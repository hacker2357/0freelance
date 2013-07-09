<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Chat extends Controller_Base
{
	public $template = 'v_messages_base';
	
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
		$this->template->site_description = 'Фриланс. Удаленная работа. Здесь вы можете найти исполнителя или работу.';
		$this->template->page_title = 'Сообщения';
		//$dialog_id = $_GET[		
		$content = View::factory('v_chat', array('all_messages' => array(), 'sidebar' => array(Request::factory('widgets/sidebar')->execute()), 'chatmenu' => Request::factory('widgets/menuchat')->execute()));
		$this->template->content = $content;
	}

} // End Welcome
