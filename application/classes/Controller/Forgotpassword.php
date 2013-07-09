<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Forgotpassword extends Controller_Base
{
    protected $errors = array();
    
    protected $email;

    public function before()
	{
		parent::before();
                $this->template->scripts = array('media/js/login.js');
	}
	
	public function after()
	{
		parent::after();
        }
        
        public function get_recover_link($user_id)
        {
            $key = ORM::factory('Recover', array('user_id' => $user_id))->key;
            return URL::base(true).Route::get('default')->uri(
                    array('controller' => 'changepassword')).'?user_id='.$user_id.'&key='.$key;
        }
        
        protected function recover_pass()
        {
            $post = $this->request->post();
            if (!empty($post) && isset($post['email_input'])) // Если существует email в post
            {
                $post['email_input'] = UTF8::trim($post['email_input']);
                
                $this->email = $post['email_input']; // Переменная для шаблона
                
                $valid = Validation::factory($post);
                
                
                $valid->rules('email_input', array(
                    array('not_empty'),
                    array('email', array(':value', $post['email_input'])),
                    array('email_domain', array(':value', $post['email_input'])),
                ))->label('email_input', 'Email');
                
                if ($valid->check())
                {
                    $user = ORM::factory('User', array('email' => $post['email_input']));
                    if (!$user->loaded()) // Если пользователя с таким email-ом не существует
                    {
                        $this->errors = array(Kohana::message('forgot', 'user_not_exists'));
                        return NULL;
                    }
                    
                    $recover_loaded = ORM::factory('Recover', array('user_id' => $user->id));
                    
                    if (!$recover_loaded->loaded()) //Если в таблице recover нет ключа
                    {
                        $recover = ORM::factory('Recover');

                        $recover->key = Model::factory('Useful')->generate_password(100);

                        $recover->user_id = $user->id;

                        $recover->time = time();

                        if ($recover->save())
                        {
                            $this->send_mail($post['email_input'], Kohana::message('forgot', 'email_content.from'), Kohana::message('forgot', 'email_content.title'),
                                    Kohana::message('forgot', 'email_content.content').$this->get_recover_link($user->id));
                            return Kohana::message('forgot', 'success');
                        }
                    }
                    else //Если в таблице recover уже есть ключ
                    {
                        $this->send_mail($post['email_input'], Kohana::message('forgot', 'email_content.from'), Kohana::message('forgot', 'email_content.title'),
                                    Kohana::message('forgot', 'email_content.content').$this->get_recover_link($user->id));
                            return Kohana::message('forgot', 'success');
                        return Kohana::message('forgot', 'success');
                    }
                }
                else
                {
                    $recover_loaded->time = time();
                    $recover_loaded->save();
                    $this->errors = $valid->errors('validation');
                }
            }
        }
        
	public function action_getpage()
	{
            $message = $this->recover_pass();
            
            $this->template->site_description = 'Фриланс. Удаленная работа. Здесь вы можете найти исполнителя или работу.';
            $this->template->page_title = 'Фриланс. Удаленная работа.';
            
            $content = View::factory('v_forgotpassword', array('sidebar' => array(Request::factory('widgets/sidebar')->execute()), 'errors' => $this->errors))
                    ->bind('message', $message)->bind('email', $this->email);
            $this->template->content = $content;
	}

}