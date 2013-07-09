<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajaxportfolio extends Controller
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
        if (!isset($_POST['id']) || empty($_POST['id'])) die;
        
        $razdels = ORM::factory('Razdel')->find_all();
        
        $content = base64_encode(View::factory('v_ajaxportfolio')
                ->set('razdels', $razdels)->set('id', $_POST['id']));
        
        $array = array('content' => $content);
        
        $json = json_encode($array);
        
        $this->response->body($json);
    }

}