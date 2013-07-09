<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-16 12:51:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\Controller\Index.php [ 19 ] in :
2013-03-16 12:51:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 12:52:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\Controller\Index.php [ 19 ] in :
2013-03-16 12:52:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 12:56:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\Controller\Index.php [ 19 ] in :
2013-03-16 12:56:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 13:11:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function lang() ~ APPPATH\classes\Controller\Index.php [ 20 ] in :
2013-03-16 13:11:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 13:11:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function lang() ~ APPPATH\classes\Controller\Index.php [ 20 ] in :
2013-03-16 13:11:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 13:29:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\Index.php [ 41 ] in C:\xampp\htdocs\0freelance\application\views\Index.php:41
2013-03-16 13:29:50 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\views\Index.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 41, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(14): Kohana_Controller_Template->after()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(87): Controller_Index->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\0freelance\application\views\Index.php:41
2013-03-16 13:34:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\Controller\Index.php [ 19 ] in :
2013-03-16 13:34:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 13:35:04 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\Controller\Index.php [ 19 ] in :
2013-03-16 13:35:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 13:35:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::configuration() ~ APPPATH\classes\Controller\Index.php [ 19 ] in :
2013-03-16 13:35:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 13:39:06 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::direct_uri() ~ APPPATH\classes\Controller\Index.php [ 21 ] in :
2013-03-16 13:39:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 13:45:27 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 87 ] in :
2013-03-16 13:45:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 13:46:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Index.php [ 26 ] in :
2013-03-16 13:46:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 13:47:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Index.php [ 26 ] in :
2013-03-16 13:47:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 13:48:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Index.php [ 26 ] in :
2013-03-16 13:48:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 14:16:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: all_projects ~ APPPATH\views\v_index.php [ 99 ] in C:\xampp\htdocs\0freelance\application\views\v_index.php:99
2013-03-16 14:16:22 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\views\v_index.php(99): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 99, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\0freelance\application\views\v_base.php(67): Kohana_View->__toString()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\0freelance\application\classes\Controller\Base.php(21): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(12): Controller_Base->after()
#10 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(87): Controller_Index->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#13 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\0freelance\application\views\v_index.php:99
2013-03-16 15:00:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\v_base.php [ 38 ] in C:\xampp\htdocs\0freelance\application\views\v_base.php:38
2013-03-16 15:00:51 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\views\v_base.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 38, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\0freelance\application\classes\Controller\Base.php(21): Kohana_Controller_Template->after()
#5 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(12): Controller_Base->after()
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(87): Controller_Index->after()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\0freelance\application\views\v_base.php:38
2013-03-16 15:01:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ APPPATH\views\v_base.php [ 38 ] in :
2013-03-16 15:01:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 15:01:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\v_base.php [ 38 ] in :
2013-03-16 15:01:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 15:03:01 --- CRITICAL: View_Exception [ 0 ]: The requested view menu could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php:137
2013-03-16 15:03:01 --- DEBUG: #0 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(137): Kohana_View->set_filename('menu')
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(30): Kohana_View->__construct('menu', NULL)
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Base.php(14): Kohana_View::factory('menu')
#3 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(7): Controller_Base->before()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php:137
2013-03-16 15:07:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu_list ~ APPPATH\views\v_menu.php [ 4 ] in C:\xampp\htdocs\0freelance\application\views\v_menu.php:4
2013-03-16 15:07:38 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\views\v_menu.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\0freelance\application\views\v_base.php(38): Kohana_View->__toString()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\0freelance\application\classes\Controller\Base.php(22): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\0freelance\application\classes\Controller\Settings.php(12): Controller_Base->after()
#10 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(87): Controller_Settings->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#13 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\0freelance\application\views\v_menu.php:4
2013-03-16 15:08:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu_list ~ APPPATH\views\v_menu.php [ 4 ] in C:\xampp\htdocs\0freelance\application\views\v_menu.php:4
2013-03-16 15:08:20 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\views\v_menu.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\0freelance\application\views\v_base.php(38): Kohana_View->__toString()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\0freelance\application\classes\Controller\Base.php(22): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\0freelance\application\classes\Controller\Settings.php(12): Controller_Base->after()
#10 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(87): Controller_Settings->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#13 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\0freelance\application\views\v_menu.php:4
2013-03-16 15:09:50 --- CRITICAL: View_Exception [ 0 ]: The requested view Menu could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php:137
2013-03-16 15:09:50 --- DEBUG: #0 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(137): Kohana_View->set_filename('Menu')
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(30): Kohana_View->__construct('Menu', NULL)
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Settings.php(23): Kohana_View::factory('Menu')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Settings->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php:137
2013-03-16 15:10:26 --- CRITICAL: View_Exception [ 0 ]: The requested view Menu could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php:137
2013-03-16 15:10:26 --- DEBUG: #0 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(137): Kohana_View->set_filename('Menu')
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(30): Kohana_View->__construct('Menu', NULL)
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Settings.php(23): Kohana_View::factory('Menu')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Settings->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php:137
2013-03-16 15:12:16 --- CRITICAL: View_Exception [ 0 ]: The requested view Menu could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php:137
2013-03-16 15:12:16 --- DEBUG: #0 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(137): Kohana_View->set_filename('Menu')
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(30): Kohana_View->__construct('Menu', NULL)
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Settings.php(23): Kohana_View::factory('Menu')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Settings->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php:137
2013-03-16 15:18:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu_list ~ APPPATH\views\v_menu.php [ 4 ] in C:\xampp\htdocs\0freelance\application\views\v_menu.php:4
2013-03-16 15:18:53 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\views\v_menu.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\0freelance\application\views\v_base.php(38): Kohana_View->__toString()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\0freelance\application\classes\Controller\Base.php(22): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(12): Controller_Base->after()
#10 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(87): Controller_Index->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#13 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\0freelance\application\views\v_menu.php:4
2013-03-16 15:18:56 --- CRITICAL: View_Exception [ 0 ]: The requested view Menu could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php:137
2013-03-16 15:18:56 --- DEBUG: #0 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(137): Kohana_View->set_filename('Menu')
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(30): Kohana_View->__construct('Menu', NULL)
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Settings.php(23): Kohana_View::factory('Menu')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Settings->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php:137
2013-03-16 15:19:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\Settings.php [ 24 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Settings.php:24
2013-03-16 15:19:13 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Settings.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 24, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Settings->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Settings.php:24
2013-03-16 15:19:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu_list ~ APPPATH\views\v_menu.php [ 4 ] in C:\xampp\htdocs\0freelance\application\views\v_menu.php:4
2013-03-16 15:19:25 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\views\v_menu.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\0freelance\application\views\v_base.php(38): Kohana_View->__toString()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\0freelance\application\classes\Controller\Base.php(22): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\0freelance\application\classes\Controller\Settings.php(12): Controller_Base->after()
#10 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(87): Controller_Settings->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#13 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\0freelance\application\views\v_menu.php:4
2013-03-16 15:19:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu_list ~ APPPATH\views\v_menu.php [ 4 ] in C:\xampp\htdocs\0freelance\application\views\v_menu.php:4
2013-03-16 15:19:49 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\views\v_menu.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\0freelance\application\views\v_base.php(38): Kohana_View->__toString()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\0freelance\application\classes\Controller\Base.php(22): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\0freelance\application\classes\Controller\Settings.php(12): Controller_Base->after()
#10 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(87): Controller_Settings->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#13 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\0freelance\application\views\v_menu.php:4
2013-03-16 15:20:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu_list ~ APPPATH\views\v_menu.php [ 4 ] in C:\xampp\htdocs\0freelance\application\views\v_menu.php:4
2013-03-16 15:20:46 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\views\v_menu.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\0freelance\application\views\v_base.php(38): Kohana_View->__toString()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\0freelance\application\classes\Controller\Base.php(22): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\0freelance\application\classes\Controller\Settings.php(12): Controller_Base->after()
#10 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(87): Controller_Settings->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#13 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\0freelance\application\views\v_menu.php:4
2013-03-16 15:23:36 --- CRITICAL: View_Exception [ 0 ]: The requested view v_menu could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php:137
2013-03-16 15:23:36 --- DEBUG: #0 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(137): Kohana_View->set_filename('v_menu')
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(30): Kohana_View->__construct('v_menu', Array)
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Base.php(14): Kohana_View::factory('v_menu', Array)
#3 C:\xampp\htdocs\0freelance\application\classes\Controller\Settings.php(7): Controller_Base->before()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(69): Controller_Settings->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php:137
2013-03-16 17:47:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Controller\Widgets\Menu.php [ 11 ] in :
2013-03-16 17:47:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 17:47:11 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'base_url' ~ APPPATH\classes\Controller\Widgets\Menu.php [ 11 ] in :
2013-03-16 17:47:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 17:47:21 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'base_url' ~ APPPATH\classes\Controller\Widgets\Menu.php [ 11 ] in :
2013-03-16 17:47:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 17:48:02 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'base_url' ~ APPPATH\classes\Controller\Widgets\Menu.php [ 11 ] in :
2013-03-16 17:48:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 17:48:25 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'base_url' ~ APPPATH\classes\Controller\Widgets\Menu.php [ 11 ] in :
2013-03-16 17:48:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 20:44:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ']' ~ APPPATH\classes\Controller\Chat.php [ 24 ] in :
2013-03-16 20:44:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 21:36:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\Index.php [ 24 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:24
2013-03-16 21:36:42 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 24, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:24
2013-03-16 21:38:21 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\v_messages.php [ 23 ] in C:\xampp\htdocs\0freelance\application\views\v_messages.php:23
2013-03-16 21:38:21 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\views\v_messages.php(23): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\0freelance\application\views\v_messages_base.php(39): Kohana_View->__toString()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\0freelance\application\classes\Controller\Base.php(22): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\0freelance\application\classes\Controller\Messages.php(14): Controller_Base->after()
#10 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(87): Controller_Messages->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messages))
#13 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\0freelance\application\views\v_messages.php:23
2013-03-16 22:17:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH\classes\Controller\Base.php [ 27 ] in :
2013-03-16 22:17:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 22:25:20 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Route::uri() must be of the type array, string given, called in C:\xampp\htdocs\0freelance\application\classes\Controller\Base.php on line 27 and defined ~ SYSPATH\classes\Kohana\Route.php [ 506 ] in C:\xampp\htdocs\0freelance\system\classes\Kohana\Route.php:506
2013-03-16 22:25:20 --- DEBUG: #0 C:\xampp\htdocs\0freelance\system\classes\Kohana\Route.php(506): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 506, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Base.php(27): Kohana_Route->uri('controller', 'chat')
#2 C:\xampp\htdocs\0freelance\application\views\v_messages.php(47): Controller_Base::get_dialog_link(1)
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\0freelance\application\views\v_messages_base.php(39): Kohana_View->__toString()
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#8 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#9 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 C:\xampp\htdocs\0freelance\application\classes\Controller\Base.php(22): Kohana_Controller_Template->after()
#11 C:\xampp\htdocs\0freelance\application\classes\Controller\Messages.php(14): Controller_Base->after()
#12 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(87): Controller_Messages->after()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messages))
#15 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#18 {main} in C:\xampp\htdocs\0freelance\system\classes\Kohana\Route.php:506