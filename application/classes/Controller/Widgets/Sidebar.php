<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Sidebar extends Controller_Template
{
	public $template = 'Widgets/W_sidebar';
	
	public function action_index()
	{
            $razdels = ORM::factory('Razdel')->find_all();
            
            $this->template->razdels = $razdels;
	}

}