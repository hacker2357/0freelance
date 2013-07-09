<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Safety extends Controller_Base
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
		//$all_projects = Model::factory('index')->get_all_projects();
		//$this->template->all_projects = $all_projects;
                
		$this->template->site_description = 'Фриланс. Удаленная работа. Здесь вы можете найти исполнителя или работу.';
		$this->template->page_title = 'Настройки - Безопасность';
		
		$content = View::factory('v_safety')->set('sidebar', array(Request::factory('widgets/sidebar')->execute()))
                        ->set('menu', Request::factory('widgets/accountmenu')->execute())
                        ->set('avatar', Request::factory('widgets/avatar')->execute());
		$this->template->content = $content;
	}

} // End Welcome
