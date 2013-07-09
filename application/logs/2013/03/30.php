<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-30 19:30:53 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\v_account.php [ 19 ] in C:\xampp\htdocs\0freelance\application\views\v_account.php:19
2013-03-30 19:30:53 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\views\v_account.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 19, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\0freelance\application\views\v_base.php(77): Kohana_View->__toString()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\0freelance\application\classes\Controller\Base.php(22): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(16): Controller_Base->after()
#10 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(87): Controller_Account->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#13 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\0freelance\application\views\v_account.php:19
2013-03-30 20:31:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\Account.php [ 242 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php:242
2013-03-30 20:31:01 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(242): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 242, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Account->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php:242
2013-03-30 20:39:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: saved ~ APPPATH\classes\Controller\Account.php [ 23 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php:23
2013-03-30 20:39:50 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(23): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(69): Controller_Account->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php:23