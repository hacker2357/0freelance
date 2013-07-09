<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajaxcities extends Controller
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
        $arr = Arr::extract($_POST, array('country_id'));
        
        if (!isset($arr['country_id'])) die;
        
        $cities = ORM::factory('Region')->where('id_country', '=', $arr['country_id'])->order_by('oid')->find_all();
        
        $content = base64_encode(View::factory('v_city')->bind('cities', $cities));
        
        $array = array('content' => $content);
        
        $json = json_encode($array);
        
        $this->response->body($json);
    }

}