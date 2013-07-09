<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Base
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
                //$user = ORM::factory('user');
                
               // $user->values(array('username' => 'admin', 'password' => 'admin', 'email' => 'hacker2357@gmail.com'), array('username', 'password', 'email'))->create();
                
                //$role = ORM::factory('role')->where('name', '=', 'admin')->or_where('name', '=', 'login')->find_all()->as_array();
                
               // print_r($role);
                
                //die();
                
               // $user->add('roles', ORM::factory('role')->where('name', '=', 'login')->find());
                //$user->add('roles', ORM::factory('role')->where('name', '=', 'admin')->find());
            
                //$auth = Auth::instance();
                
                //$auth->login('admin', 'admin', TRUE);
                
		$all_projects = ORM::factory('Project')->find_all();
		$this->template->all_projects = $all_projects;
		
		$this->template->site_description = 'Фриланс. Удаленная работа. Здесь вы можете найти исполнителя или работу.';
		$this->template->page_title = 'Фриланс. Удаленная работа.';
		
		$content = View::factory('v_index', array('all_projects' => $all_projects, 'sidebar' => array(Request::factory('widgets/sidebar')->execute())));
		$this->template->content = $content;
	}

}