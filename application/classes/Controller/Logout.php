<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Logout extends Controller_Base
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
           $auth = Auth::instance();
           if ($auth->logout()) HTTP::redirect('login');
	}

}