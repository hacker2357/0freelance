<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Menuchat extends Controller_Template
{
    public $template = 'Widgets/W_menuchat';
	
	public function action_index()
	{
		$this->template->chat_menu_list = array(
												array('link' => URL::Base() . Route::get('default')->uri(array('controller' => 'messages')), 'text' => __('Диалоги')),
												array('link' => URL::Base() . Route::get('default')->uri(array('controller' => 'chat')), 'text' => __('Просмотр диалогов')),
											);
	}

}