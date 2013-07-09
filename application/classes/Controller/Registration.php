<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Registration extends Controller_Base
{
    protected $errors = array();
    
    protected $email;

    public function before()
	{
		parent::before();
                $this->template->scripts = array_merge($this->template->scripts, array('media/js/login.js'));
	}
	
	public function after()
	{
		parent::after();
        }
        
        protected function add_email()
        {
            if (isset($_POST['email_input']))
            {
                $post = Arr::extract($_POST, array('email_input'));
                
                $post['email_input'] = UTF8::trim(UTF8::strtolower($post['email_input']));
                
                $this->email = $post['email_input'];
                
                $exists = ORM::factory('Email')->where('email', '=', $post['email_input'])->find();
                
                $user_exists = ORM::factory('User')->where('email', '=', $post['email_input'])->find();
                
                if ($user_exists->loaded())
                {
                    $this->errors = array(Kohana::message('registration', 'user_exists'));
                    if ($exists->loaded())
                    {
                        $exists->delete();
                    }
                    return NULL;
                }
                
                
                if ($exists->loaded())
                {
                    $this->send_mail($post['email_input'], '0free-lance.com <support@0free-lance.com>',
                    Kohana::message('registration', 'email_content.title'), Kohana::message('registration', 'email_content.content').' '.
                            URL::base(true).Route::get('default')->uri(array('controller' => 'cregistration')).'?key='.$exists->key);
                    
                    return Kohana::message('registration', 'check_email');
                }
                
                                
                $email = ORM::factory('Email');
                $email->email = $post['email_input'];
                while (true)
                {
                    $key = Model::factory('Useful')->generate_password(100);
                    $exist_key = ORM::factory('Email', array('key' => $key));
                    if (!$exist_key->loaded()) break;
                }
                $email->key = $key;
                $email->time = time();
                try
                {
                    $email->save();
                    
                    $this->send_mail($post['email_input'], '0free-lance.com <support@0free-lance.com>',
                    Kohana::message('registration', 'email_content.title'), Kohana::message('registration', 'email_content.content').' '.
                            URL::base(true).Route::get('default')->uri(array('controller' => 'cregistration')).'?key='.$key);
                }
                catch(ORM_Validation_Exception $e)
                {
                    $this->errors = $e->errors('validation');
                }
                
                if (empty($this->errors)) return Kohana::message('registration', 'check_email');
            }
        }
        
	public function action_getpage()
	{
            $message = $this->add_email();
            
            $this->template->site_description = 'Фриланс. Удаленная работа. Здесь вы можете найти исполнителя или работу.';
            $this->template->page_title = 'Фриланс. Удаленная работа.';
            
            $content = View::factory('v_registration', array('sidebar' => array(Request::factory('widgets/sidebar')->execute()), 'errors' => $this->errors))
                    ->bind('message', $message)->bind('email', $this->email);
            $this->template->content = $content;
	}

}