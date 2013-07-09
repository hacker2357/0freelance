<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dublicates extends Controller
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
        $podrazdels = ORM::factory('Podrazdel')->find_all();
        
        
        
        $result = array();
        
        foreach ($podrazdels as $podrazdel)
        {
            $podrazdels2 = ORM::factory('Podrazdel')->find_all();
            
            foreach($podrazdels2 as $p)
            {
                if (UTF8::strtolower($p->name) == UTF8::strtolower($podrazdel->name) && $p->id != $podrazdel->id)
                {
                    $result[] = array('id' => $p->id, 'name' => $p->name);
                   // $p->delete();
                }
            }
        }
        
        print_r($result);
    }

}