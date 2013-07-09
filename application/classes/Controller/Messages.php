<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Messages extends Controller_Base
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
		
		$all_dialogs = Model::factory('Index')->get_all_dialogs();
		$content = View::factory('v_messages', array('all_dialogs' => $all_dialogs, 'sidebar' => array(Request::factory('widgets/sidebar')->execute()), 'chatmenu' => Request::factory('widgets/menuchat')->execute()));
		$this->template->content = $content;
	}

} // End Welcome
