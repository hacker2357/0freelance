<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Changepassword extends Controller_Base
{
    protected $errors = array();
    
    public function before()
    {
            if (Auth::instance()->logged_in()) Auth::instance()->logout();
            parent::before();
            $this->template->scripts = array('media/js/login.js');
    }

    public function after()
    {
            parent::after();
    }
    
    public function change_password()
    {
        if (!isset($_GET['user_id']) || empty($_GET['user_id']) || !isset($_GET['key']) || empty($_GET['key']))
            die;
        
        $recover = ORM::factory('Recover')->where('user_id', '=', $_GET['user_id'])->and_where('key', '=', $_GET['key'])->find();
        
        if (!$recover->loaded()) die;
        
        $post = $this->request->post();
        
        if (!empty($post))
        {
            $valid = Validation::factory($post);
            
            $valid->rules('password', array(
                                            array('not_empty'),
                                            array('min_length', array(':value', 8)),
                                            array('max_length', array(':value', 32)),
                                            array('matches', array(':validation', 'password', 'password_confirm')),
            ));
            
            if ($valid->check())
            {
                $user = ORM::factory('User', array('id' => $_GET['user_id']));
                
                if ($user->update_user($post, array('password')))
                {
                    $recover->delete();
                    HTTP::redirect('login');
                }
            }
            else
            {
                $this->errors = $valid->errors('changepassword');
            }
        }
    }
    
    public function action_getpage()
    {
        $message = $this->change_password();
        
        $this->template->site_description = 'Фриланс. Удаленная работа. Здесь вы можете найти исполнителя или работу.';
        $this->template->page_title = 'Фриланс. Удаленная работа.';
        
        $login_url = URL::base().Route::get('default')->uri(array('controller' => 'changepassword'))
                .'?user_id='.$_GET['user_id'].'&key='.$_GET['key'];
        
        $content = View::factory('v_changepassword', array('sidebar' => array(Request::factory('widgets/sidebar')->execute()),
            'form_action' => $login_url, 'errors' => $this->errors))->bind('login_input', $post['login_input']);
        $this->template->content = $content;
    }

}