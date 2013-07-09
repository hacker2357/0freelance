<?php defined('SYSPATH') OR die('No direct script access.');

abstract class Controller extends Kohana_Controller {

	public function getExtension($filename)
	{
		return '.'.substr($filename, strrpos($filename, '.') + 1);
	}
        
        function send_mail($to, $from, $subject, $message)
        {
            try
            {
                mail($to, $subject, $message,
                    "From: $from\r\n"
                   ."Reply-To: $from\r\n"
                   ."X-Mailer: PHP/" . phpversion());
                //Email::send($to, $from, $subject, $message);
            }
            catch (Exception $e)
            {
                return $e->getMessage();
            }
        }
        
        public function check_user_access()
        {
            $auth = Auth::instance();
            
            if ($auth->logged_in('admin')) return TRUE;
            
            $c = UTF8::strtolower(Request::initial()->controller());
            
            $widget_c = UTF8::strtolower(Request::current()->controller());
            
                        
            if (!$auth->logged_in('login'))
            {
                switch ($widget_c)
                {
                    case 'index': ; break;
                    case 'login': ; break;
                    case 'menu': ; break;
                    case 'sidebar': ; break;
                    case 'registration': ; break;
                    case 'cregistration': ; break;
                    case 'ajaxcities': ; break;
                    case 'deleteemail': ; break;
                    case 'forgotpassword': ; break;
                    case 'changepassword': ; break;
                    case 'avatar': ; break;
                    case 'ajaxpodrazdels': ; break;
                    case 'project': ; break;
                    case 'reviews': ; break;
                    case 'freereviews': ; break;
                    case 'user': ; break;
                    default:
                    {
                        HTTP::redirect(Route::get('default')->uri(array('controller' => 'login')).'?url='.Request::initial()->url(true));
                        die();
                    }
                }
            }
            else
            {
                switch ($widget_c)
                {
                    case 'index': ; break;
                    case 'menu': ; break;
                    case 'sidebar': ; break;
                    case 'menuchat': ; break;
                    case 'base': ; break;
                    case 'account': ; break;
                    case 'chat': ; break;
                    case 'messages': ; break;
                    case 'registration': ; break;
                    case 'ajaxcities': ; break;
                    case 'logout': ; break;
                    case 'login': ; break;
                    case 'deleteemail': ; break;
                    case 'portfolio': ; break;
                    case 'uvedomlenya': ; break;
                    case 'safety': ; break;
                    case 'accountmenu': ; break;
                    case 'avatar': ; break;
                    case 'ajaxpodrazdels': ; break;
                    case 'ajaxportfolio': ; break;
                    case 'project'; ; break;
                    case 'reviews': ; break;
                    case 'freereviews': ; break;
                    case 'user': ; break;
                    default:
                    {
                        HTTP::redirect(Route::get('default')->uri(array('controller' => 'login')).'?url='.Request::initial()->url(true));
                        die();
                    }
                }
            }
            
        }
        
        public function get_change_email_link($key)
        {
            return URL::base(true).Route::get('default')->uri(array('controller'  =>  'account')).'?key='.$key;
        }
        
        public function __construct(Request $request, Response $response) {
            parent::__construct($request, $response);
            $this->check_user_access();
        }
}
