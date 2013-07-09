<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Base extends Controller_Template
{
	public $template = 'v_base';
	
	public function before()
	{
		parent::before();
		
		$this->template->site_name = 'Фриланс. Удаленная работа';
		$this->template->site_description = 'Фриланс. Удаленная работа. Здесь вы можете найти исполнителя или работу.';
		$this->template->page_title = null;
		$this->template->menu = Request::factory('widgets/menu')->execute();
		
		$this->template->styles = array();
                $this->template->scripts = array('media/js/base64.js');
	}
        
	public function after()
	{
		parent::after();
	}
	
	public static function get_dialog_link($user_id)
	{
		return Route::get('default')->uri(array('controller' => 'chat')) . '?id=' . $user_id;
	}

}
