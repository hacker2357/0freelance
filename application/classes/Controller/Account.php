<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Account extends Controller_Base
{
    public $form;
    
    public $errors;
    
    public $message;
    
    public $message_about;
    
    public $errors_about;
    
    public $form_about;
    
    public $active = 0;
    
	public function before()
	{
		parent::before();
                $this->template->styles = array('media/dot-luv/datepicker.css');
                $this->template->scripts = array('media/js/base64.js');
                
                $user = Auth::instance()->get_user();
                
                $this->form = $user;
                
                $this->form_about = array('about_me' => $user->about_me, 'podpis' => $user->podpis);
                
                if (isset($_POST['about']) && $_POST['about']==1)
                {
                    if (isset($_POST['about_me']))
                    {
                        $_POST['about_me'] = HTML::chars($_POST['about_me']);
                    }
                    
                    if (isset($_POST['podpis']))
                    {
                        $_POST['podpis'] = HTML::chars($_POST['podpis']);
                    }
                    $this->active = 1;
                    $this->edit_about($user->id);
                }
                else
                {
                    $this->edit_user($user->id);
                }
                
                if (isset($_GET['saved']))
                {
                    if ($_GET['saved']==1)
                    {
                        $this->message = Kohana::message('account', 'saved');
                    }
                    elseif ($_GET['saved']=='email_changed')
                    {
                        $this->message = Kohana::message('account', 'email_changed');
                    }
                    elseif ($_GET['saved']=='check_email')
                    {
                        $this->message = Kohana::message('account', 'check_email');
                    }
                }
                elseif (isset($_GET['key']) && Valid::not_empty($_GET['key']))
                {
                    if ($this->change_email_by_key($_GET))
                    {
                        HTTP::redirect(Route::get('default')->uri(array('controller'  =>  'account')).'?saved=email_changed');
                    }
                }
	}
	
	public function after()
	{
		parent::after();
	}
        
        public function check_old_passowrd($valid, $pass)
        {
            $auth = Auth::instance();
            return $auth->check_password($valid[$pass]);
        }
        
        public function edit_about($user_id)
        {
            $post = Validation::factory($_POST);
            
            $post->rules('about_me', array(
                                            array('max_length', array(':value', 5000))
            ))->rules('podpis', array(
                                            array('max_length', array(':value', 1000))
            ));
            
            if ($post->check())
            {
                $user = ORM::factory('User', array('id' => $user_id));
                
                if ($user->values($_POST, array('podpis', 'about_me'))->update())
                {
                    $this->message_about = Kohana::message('account', 'saved');
                    $this->form_about = array('about_me' => $_POST['about_me'], 'podpis' => $_POST['podpis']);
                }
            }
            else
            {
                $this->errors_about = $post->errors('account', true);
                $this->form_about = array('about_me' => $_POST['about_me'], 'podpis' => $_POST['podpis']);
            }
        }
        
        public function add_email_to_change($email, $user)
        {
            if ($user->email!=$email)
            {
                $check_cemail = ORM::factory('CEmail')->where('newemail', '=', $email)->find();
                if (!$check_cemail->loaded())
                {
                    if (!ORM::factory('CEmail', array('user_id' => $user->id))->loaded())
                    {
                        $cemail = ORM::factory('CEmail');
                    }
                    else
                    {
                        $cemail = ORM::factory('CEmail', array('user_id' => $user->id));
                    }
                    
                    $cemail->newemail = $email;
                    $cemail->user_id = $user->id;
                    $key = Model::factory('Useful')->generate_password(100);
                    $cemail->key = $key;
                    $cemail->time = time();

                    if ($cemail->save())
                    {
                        $this->send_mail($email, Kohana::$config->load('config')->get('email'),
                                Kohana::$config->load('config.change_email.title'),
                                Kohana::$config->load('config.change_email.content').
                                $this->get_change_email_link($key));
                        return TRUE;
                    }
                    return FALSE;
                }
                $this->send_mail($email, Kohana::$config->load('config')->get('email'),
                                Kohana::$config->load('config.change_email.title'),
                                Kohana::$config->load('config.change_email.content').
                                $this->get_change_email_link($check_cemail->key));
                return TRUE;
            }
            return FALSE;
        }
	
        public function change_email_by_key($get)
        {
            if (isset($get['key']) && Valid::not_empty($get['key']))
            {
                $cemail = ORM::factory('CEmail', array('key'  =>  $get['key']));
                
                if ($cemail->loaded())
                {
                    $user = Auth::instance()->get_user();
                    
                    if ($user->values(array('email'  =>  $cemail->newemail))->update())
                    {
                        $cemail->delete();
                        return TRUE;
                    }
                }
            }
            return FALSE;
        }
        
        public function edit_user($user_id)
        {
            if (empty($_POST)) return NULL; //Проверяем был ли запрос POST
            
            $post_arr = array('first_name', 'last_name', 'birthday', 'pol_id', 'status_id', 'country_id', 'city_id',
                              'website', 'phone', 'hide_email', 'avatar', 'email', 'username',
                              'old_password', 'password', 'password_confirm');
            
            $array = Arr::extract($_POST, $post_arr);
            
                //Фльтрация
                
                Model::factory('Filters')->filter_all($array,
                        array('first_name', 'last_name', 'birthday',
                              'website', 'phone', 'username'));
                
                $this->form = (object)$array;
                
                $post = Validation::factory($array);
                
                //Получаем список полов для проверки сущществует ли такой, чтобы нельзя было схимичить
                
                $pols = ORM::factory('Pol')->find_all();
                
                //Создаем массив для проверки в in_array()
                
                $pol_array = array();
                
                foreach($pols as $pol)
                {
                    $pol_array[] = $pol->pol_id;
                }
                
                //Получаем список статусов
                
                $statuses = ORM::factory('Status')->find_all();
                
                //Создаем массив для проверки в in_array()
                
                $status_array = array();
                
                foreach($statuses as $status)
                {
                    $status_array[] = $status->status_id;
                }
                
                //Получаем список стран
                
                $countries = ORM::factory('Country')->find_all();
                
                //Создаем массив для проверки в in_array()
                
                $country_array = array();
                
                foreach($countries as $country)
                {
                    $country_array[] = $country->id_country;
                }
                
                //Получаем список регионов
                
                $regions = ORM::factory('Region')->where('id_country', '=', $array['country_id'])->order_by('oid')->find_all();
                
                //Создаем массив для проверки в in_array()
                
                $region_array = array();
                
                foreach($regions as $region)
                {
                    $region_array[] = $region->id_region;
                }
                
                $post->rules('first_name', array(
                                                    array('not_empty'),
                                                    array('max_length', array(':value', 32)),
                                                    array('regex', array(':value', Kohana::$config->load('regex')->get('first_name'))),
                    ))->rules('last_name', array(
                                                    array('not_empty'),
                                                    array('max_length', array(':value', 32)),
                                                    array('regex', array(':value', Kohana::$config->load('regex')->get('last_name'))),
                    ))->rules('birthday', array(
                                                    array('regex', array(':value', Kohana::$config->load('regex')->get('birthday'))),
                    ))->rules('pol_id', array(
                                                    array('not_empty'),
                                                    array('numeric', array(':value')),
                                                    array('in_array', array(':value', $pol_array)),
                    ))->rules('status_id', array(
                                                    array('not_empty'),
                                                    array('numeric', array(':value')),
                                                    array('in_array', array(':value', $status_array)),
                    ))->rules('country_id', array(
                                                    array('not_empty'),
                                                    array('numeric', array(':value')),
                                                    array('in_array', array(':value', $country_array)),
                    ))->rules('city_id', array(
                                                    array('not_empty'),
                                                    array('numeric', array(':value')),
                                                    array('in_array', array(':value', $region_array)),
                    ))->rules('website', array(
                                                    array('regex', array(':value', Kohana::$config->load('regex')->get('website'))),
                    ))->rules('phone', array(
                                                    array('regex', array(':value', Kohana::$config->load('regex')->get('phone'))),
                    ))->rules('old_password', array(
                                                    array(array($this, 'check_old_passowrd'), array(':validation', 'old_password', 'password')),
                    ))->rules('password', array(
                                                    array('min_length', array(':value', 8)),
                                                    array('max_length', array(':value', 32)),
                                                    array('matches', array(':validation', 'password', 'password_confirm')),
                    ))->rules('hide_email', array(
                                                    array('numeric', array(':value')),
                                                    array('in_array', array(':value', array(1))),
                    ))->rules('email', array(
                                                    array('not_empty'),
                                                    array('min_length', array(':value', 5)),
                                                    array('max_length', array(':value', 255)),
                                                    array('email'),
                                                    array('email_domain'),
                    ));
                
                $pass = 0;
                
                if (Valid::not_empty($post['password']))
                {
                    $post->rule('old_password', 'not_empty');
                    $pass = 1;
                }
                elseif ($post['email'] != ORM::factory('User', array('id' => $user_id))->email)
                {
                    $post->rule('old_password', 'not_empty');
                }
                
                $errors = array();
                
                $check_file = 0;
                
                if ($_FILES['avatar']['name']!='')
                {
                    $file_valid = Validation::factory($_FILES)
                            ->rules('avatar', array(
                                                    array('Upload::image'),
                                                    array('Upload::size', array(':value' ,'10M')),
                    ));
                    if ($file_valid->check())
                    {
                        $check_file = 1;
                    }
                    else
                    {
                        $errors = $file_valid->errors('account', true);
                    }
                }
                
                if ($post->check() && empty($errors))
                {
                    $update = array('first_name', 'last_name', 'birthday', 'pol_id', 'status_id', 'city_id',
                              'website', 'phone', 'hide_email');
                    
                    if ($check_file==1)
                    {
                        $file = Model::factory('Useful')->upload_file($_FILES['avatar']);
                        
                        $image = Image::factory($file['path']);
                        
                        $image->resize(96, 96, Image::INVERSE);
                        
                        $image->crop(96, 96);
                        
                        if ($image->save($file['path']))
                        {
                            $array['avatar_id'] = $file['id'];
                            $update[] = 'avatar_id';
                            $avatar = Auth::instance()->get_user()->avatar;
                            if ($avatar->id != 0)
                            {
                                try
                                {
                                    unlink($avatar->path);
                                }
                                catch (Exception $e)
                                {
                                    
                                }
                                $avatar->delete();
                            }
                        }
                    }
                    
                    if ($pass==1)
                    {
                        $update[] = 'password';
                    }
                    
                    $user = ORM::factory('User', $user_id);
                    
                    $user->values($array, $update)->update();
                    
                    if ($this->add_email_to_change($post['email'], $user))
                    {
                        HTTP::redirect(Route::get('default')->uri(array('controller' => 'account')).'?saved=check_email');
                    }
                    
                    HTTP::redirect(Route::get('default')->uri(array('controller' => 'account')).'?saved=1');
                }
                else
                {
                    $this->errors = array_merge($post->errors('account', true), $errors);
                }
                
               /* array('first_name', 'last_name', 'birthday', 'pol_id', 'status_id', 'city_id',
                              'website', 'phone', 'hide_email', 'avatar', 'email', 'username',
                              'password')     */
                
             /*   $user = ORM::factory('user')->create_user($array, array('first_name', 'last_name', 'birthday', 'pol_id', 'status_id', 'city_id',
                              'website', 'phone', 'hide_email', 'avatar', 'email', 'username',
                              'password'));
               */
                
                //$user->values(array('username' => 'username', 'email' => '', 'password' => 'password'))->create();
                //return NULL;
        }
        
	public function action_getpage()
	{
		//$all_projects = Model::factory('index')->get_all_projects();
		//$this->template->all_projects = $all_projects;
                
                $user = Auth::instance()->get_user();
            
                $pols = ORM::factory('Pol')->find_all();
                
                $statuses = ORM::factory('Status')->find_all();
                
                $countries = ORM::factory('Country')->order_by('oid')->find_all();
                
                if (empty($errors))
                {
                    $regions = ORM::factory('Region')->where('id_country', '=', $user->region->country->id_country)->order_by('oid')->find_all();
                }
                else
                {
                    $regions = ORM::factory('Region')->where('id_country', '=', $this->form->country_id)->order_by('oid')->find_all();
                }
                
                $action = URL::base().Route::get('default')->uri(array('controller' => 'account'));
                
		$this->template->site_description = 'Фриланс. Удаленная работа. Здесь вы можете найти исполнителя или работу.';
		$this->template->page_title = 'Настройки';
                
		$content = View::factory('v_account')->set('sidebar', array(Request::factory('widgets/sidebar')->execute()))
                        ->set('menu', Request::factory('widgets/accountmenu')->execute())
                        ->set('avatar', Request::factory('widgets/avatar')->execute())
                        ->set('user', $user)->set('pols', $pols)->set('statuses', $statuses)
                        ->set('countries', $countries)->set('regions', $regions)
                        ->set('action', $action)->set('errors', $this->errors)
                        ->set('form', $this->form)->set('message', $this->message)
                        ->set('active', $this->active)->set('message_about', $this->message_about)
                        ->set('errors_about', $this->errors_about)->set('form_about', $this->form_about);
		$this->template->content = $content;
	}

}
