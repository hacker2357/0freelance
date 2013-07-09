<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Deleteemail extends Controller
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
           $emails = ORM::factory('Email')->where('time', '<', time()-604800)->find_all();
           
           foreach($emails as $email)
           {
                $email->delete();
           }
           
           $recover = ORM::factory('Recover')->where('time', '<', time()-86400)->find_all();
           
           foreach($recover as $r)
           {
                $r->delete();
           }
           
           $cemails = ORM::factory('CEmail')->where('time', '<', time()-86400)->find_all();
           
           foreach($cemails as $cemail)
           {
                $cemail->delete();
           }
	}

}