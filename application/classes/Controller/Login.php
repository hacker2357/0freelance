<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller_Base
{
    protected $errors = array();
    
    public function before()
	{
                if (Auth::instance()->logged_in()) Auth::instance()->logout();
		parent::before();
                
                $this->template->scripts = array_merge($this->template->scripts, array('media/js/login.js'));
	}
	
	public function after()
	{
		parent::after();
	}
	
        public function check_login()
        {
            if (!empty($_POST))
            {
                $post = Arr::extract($_POST, array('login_input', 'password_input'));
                $auth = Auth::instance();
                $status = $auth->login($post['login_input'], $post['password_input']);
                if ($status)
                {
                    if (isset($_GET['url']))
                        HTTP::redirect($_GET['url']);
                    else HTTP::redirect (Route::get('default')->uri());
                }
                {
                    $this->errors = Kohana::message('user', 'no_user');
                }
                
            }
        }
        
	public function action_getpage()
	{
            $login_url = URL::base().Route::get('default')->uri(array('controller' => 'login'));
            if (isset($_GET['url']))
            {
                $login_url = $login_url.'?url='.$_GET['url'];
            }
            
            $this->check_login();
            $this->template->site_description = 'Фриланс. Удаленная работа. Здесь вы можете найти исполнителя или работу.';
            $this->template->page_title = 'Фриланс. Удаленная работа.';
            
            $post = Arr::extract($_POST, array('login_input'));
            
            $forgot = URL::base().Route::get('default')->uri(array('controller' => 'forgotpassword'));
            
            $content = View::factory('v_login', array('sidebar' => array(Request::factory('widgets/sidebar')->execute()),
                'form_action' => $login_url, 'errors' => $this->errors))->bind('login_input', $post['login_input'])
                 ->bind('forgot', $forgot);
            $this->template->content = $content;
	}

}