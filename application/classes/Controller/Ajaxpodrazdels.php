<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajaxpodrazdels extends Controller
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
        if (!isset($_POST['razdel_id']) || empty($_POST['razdel_id'])) die;
        
        $razdel = ORM::factory('Razdel', array('id' => $_POST['razdel_id']));
        
        $podrazdels = $razdel->podrazdels->find_all();
        
        $content = base64_encode(View::factory('v_ajaxpodrazdels')->bind('podrazdels', $podrazdels));
        
        $array = array('content' => $content);
        
        $json = json_encode($array);
        
        $this->response->body($json);
    }

}