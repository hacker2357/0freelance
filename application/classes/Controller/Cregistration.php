<?php defined('SYSPATH') or die('No direct script access.');

class Controller_CRegistration extends Controller_Base
{
    public $key;
    
    public $form;
    
	public function before()
	{
		parent::before();
                $this->template->scripts = array('media/js/base64.js');
                $this->template->styles = array('media/dot-luv/jquery-ui-1.10.2.custom.min.css');
	}
	
	public function after()
	{
		parent::after();
	}
	
        public function get_email() //Получаем email
        {
            $post = Arr::extract($_GET, array('key')); //Получаем параметр key
            
            if ((!isset($post['key'])) || (empty($post['key']))) die; //Если его не сущществует умираем
            
            $email = ORM::factory('Email')->where('key', '=', $post['key'])->find(); //Проверяем сущществует ли такой key в базе данных
            
            if (!$email->loaded()) die(Kohana::message('registration', 'activation_not_found')); //И вытаскиваем email
            
            $this->key = $post['key'];
            return $email->email;
        }
        
        public function unique_login($login) // Проверка логина на уникальность
        {
            $user = ORM::factory('User')->where('username', '=', $login)->find();
            
            if ($user->loaded()) return FALSE;
            
            return TRUE;
        }
        
        public function add_user($email)
        {
            if (empty($_POST)) return NULL; //Проверяем был ли запрос POST
            
            $post_arr = array('first_name', 'last_name', 'birthday', 'pol_id', 'status_id', 'country_id', 'city_id',
                              'website', 'phone', 'hide_email', 'avatar', 'email', 'username',
                              'password', 'password_confirm');
            
            $array = Arr::extract($_POST, $post_arr);
            
            $array['email'] = $email;
            
                //Фльтрация
                
                Model::factory('Filters')->filter_all($array,
                        array('first_name', 'last_name', 'birthday',
                              'website', 'phone', 'username'));
                
                // /^(\d)(\s|-|\()*(\d{3})(\s|-|\))*(\d{3})(\s|-)*(\d{2})(\s|-)*(\d{2})$/u
                // $1 ($3) $5-$7-$9
                
                // website /^(http(s){0,1}://){0,1}(www\.){0,1}([a-z\-]+\.[a-z]+)(/){0,1}(.*)$/
                
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
                    ))->rules('username', array(
                                                    array('not_empty'),
                                                    array('max_length', array(':value', 32)),
                                                    array('regex', array(':value', Kohana::$config->load('regex')->get('username'))),
                                                    array(array($this, 'unique_login'), array(':value')),
                    ))->rules('password', array(
                                                    array('not_empty'),
                                                    array('min_length', array(':value', 8)),
                                                    array('max_length', array(':value', 32)),
                                                    array('matches', array(':validation', 'password', 'password_confirm')),
                    ))->rules('hide_email', array(
                                                    array('numeric', array(':value')),
                                                    array('in_array', array(':value', array(1))),
                    ));
                
                $this->form = $post;
                
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
                        $errors = $file_valid->errors('cregistration', true);
                    }
                }
                
                if ($post->check() && empty($errors))
                {
                    $user = ORM::factory('User');
                    
                    if ($check_file==1)
                    {
                        $file = Model::factory('Useful')->upload_file($_FILES['avatar']);
                        $array['avatar_id'] = $file['id'];
                        
                        $image = Image::factory($file['path']);
                        
                        $image->resize(96, 96, Image::INVERSE);
                        
                        $image->crop(96, 96);
                        
                        $image->save($file['path']);
                    }
                    
                    $user->values($array, array('first_name', 'last_name', 'birthday', 'pol_id', 'status_id', 'city_id',
                              'website', 'phone', 'hide_email', 'avatar_id', 'email', 'username',
                              'password'))->create()->add('roles', ORM::factory('Role', array('name' => 'login')));
                    $auth = Auth::instance();
                    
                    $auth->login($array['username'], $array['password']);
                    
                    if ($auth->logged_in('login'))
                    {
                        $email = ORM::factory('Email')->where('email', '=', $array['email'])->find();
                        if ($email->loaded())
                        {
                            $email->delete();
                        }
                    }
                    
                    HTTP::redirect('account');
                }
                else
                {
                    return array_merge($post->errors('cregistration', true), $errors);
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
            $email = $this->get_email();
            
            $errors = $this->add_user($email); //Выполняем валидацию и добавляем пользователя
            
            $this->template->site_description = 'Фриланс. Удаленная работа. Здесь вы можете найти исполнителя или работу.';
            $this->template->page_title = 'Фриланс. Удаленная работа.';

            $url = Route::get('default')->uri(array('controller' => 'cregistration')).'?key='.$this->key;
            
            $statuses = ORM::factory('Status')->find_all();
            
            $pols = ORM::factory('Pol')->find_all();
            
            $countries = ORM::factory('Country')->order_by('oid')->find_all();
            
            $regions = ORM::factory('Region')->where('id_country', '=', $this->form['country_id'])->order_by('oid')->find_all();
            
            $content = View::factory('v_cregistration', array('sidebar' => array(Request::factory('widgets/sidebar')->execute())))
                    ->bind('email', $email)->bind('url', $url)->bind('statuses', $statuses)
                    ->bind('pols', $pols)->bind('countries', $countries)->bind('errors', $errors)
                    ->bind('form', $this->form)->bind('regions', $regions);
            $this->template->content = $content;
	}

}