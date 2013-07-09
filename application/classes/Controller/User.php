<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Base
{
	public function before()
	{
		parent::before();
	}
	
	public function after()
	{
		parent::after();
	}
	
	public function action_getpage()
	{
            $user_id = $this->request->param('user_id');
            $user = ORM::factory('User')->where('id', '=', $user_id)->find();
            
            if (!$user->loaded()) die(Kohana::message('user', 'user_not_loaded'));
            
	    $this->template->content = View::factory('v_user', array(
                'sidebar' => array(Request::factory('widgets/sidebar')->execute()),
                'user' => $user,
            ));
	}

}