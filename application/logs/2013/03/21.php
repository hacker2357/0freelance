<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-21 14:21:39 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\classes\Controller\Index.php [ 36 ] in :
2013-03-21 14:21:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-21 14:40:23 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Controller\CRegistration.php [ 44 ] in :
2013-03-21 14:40:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-21 14:44:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\v_cregistration.php [ 111 ] in :
2013-03-21 14:44:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-21 14:45:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\v_cregistration.php [ 112 ] in :
2013-03-21 14:45:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-21 17:22:16 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$country ~ APPPATH\classes\Controller\Index.php [ 37 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:37
2013-03-21 17:22:16 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 37, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:37
2013-03-21 17:22:45 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$country ~ APPPATH\classes\Controller\Index.php [ 37 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:37
2013-03-21 17:22:45 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 37, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:37
2013-03-21 17:23:30 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$country ~ APPPATH\classes\Controller\Index.php [ 37 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:37
2013-03-21 17:23:30 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 37, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:37
2013-03-21 17:23:59 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$country ~ APPPATH\classes\Controller\Index.php [ 37 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:37
2013-03-21 17:23:59 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 37, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:37
2013-03-21 17:26:03 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$country ~ APPPATH\classes\Controller\Index.php [ 37 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:37
2013-03-21 17:26:03 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 37, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:37
2013-03-21 17:26:18 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$country ~ APPPATH\classes\Controller\Index.php [ 37 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:37
2013-03-21 17:26:18 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 37, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:37
2013-03-21 17:29:51 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$country ~ APPPATH\classes\Controller\Index.php [ 37 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:37
2013-03-21 17:29:51 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 37, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:37
2013-03-21 17:30:30 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$country ~ APPPATH\classes\Controller\Index.php [ 37 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:37
2013-03-21 17:30:30 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 37, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:37
2013-03-21 17:30:50 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$country ~ APPPATH\classes\Controller\Index.php [ 37 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:37
2013-03-21 17:30:50 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 37, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:37
2013-03-21 17:32:41 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:35
2013-03-21 17:32:41 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(35): Kohana_ORM->find()
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:35
2013-03-21 17:32:54 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:35
2013-03-21 17:32:54 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(35): Kohana_ORM->find()
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:35
2013-03-21 17:33:17 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:35
2013-03-21 17:33:17 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(35): Kohana_ORM->find()
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:35
2013-03-21 17:34:39 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:35
2013-03-21 17:34:39 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(35): Kohana_ORM->find()
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:35
2013-03-21 17:36:37 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:35
2013-03-21 17:36:37 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(35): Kohana_ORM->find()
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:35
2013-03-21 17:37:08 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:35
2013-03-21 17:37:08 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(35): Kohana_ORM->find()
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:35
2013-03-21 17:37:20 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:35
2013-03-21 17:37:20 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(35): Kohana_ORM->find()
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:35
2013-03-21 18:43:12 --- CRITICAL: Kohana_Exception [ 0 ]: The city property does not exist in the Model_City class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 18:43:12 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('city')
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(37): Kohana_ORM->__get('city')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 18:51:20 --- CRITICAL: Kohana_Exception [ 0 ]: The city_name_ru property does not exist in the Model_Country class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 18:51:20 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('city_name_ru')
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(37): Kohana_ORM->__get('city_name_ru')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 18:51:55 --- CRITICAL: Kohana_Exception [ 0 ]: The city_name_ru property does not exist in the Model_Country class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 18:51:55 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('city_name_ru')
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(37): Kohana_ORM->__get('city_name_ru')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 18:54:08 --- CRITICAL: Kohana_Exception [ 0 ]: The city_name_ru property does not exist in the Model_Country class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 18:54:08 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('city_name_ru')
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(37): Kohana_ORM->__get('city_name_ru')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 18:54:19 --- CRITICAL: Kohana_Exception [ 0 ]: The city_name_ru property does not exist in the Model_Country class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 18:54:19 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('city_name_ru')
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(37): Kohana_ORM->__get('city_name_ru')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 18:54:46 --- CRITICAL: Kohana_Exception [ 0 ]: The city_name_ru property does not exist in the Model_Country class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 18:54:46 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('city_name_ru')
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(37): Kohana_ORM->__get('city_name_ru')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 18:54:53 --- CRITICAL: Kohana_Exception [ 0 ]: The city_name_ru property does not exist in the Model_Country class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 18:54:53 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('city_name_ru')
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(37): Kohana_ORM->__get('city_name_ru')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 18:58:05 --- CRITICAL: Kohana_Exception [ 0 ]: The city_name_ru property does not exist in the Model_Country class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 18:58:05 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('city_name_ru')
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(37): Kohana_ORM->__get('city_name_ru')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 19:03:25 --- CRITICAL: Kohana_Exception [ 0 ]: The city_name_ru property does not exist in the Model_Country class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 19:03:25 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('city_name_ru')
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(37): Kohana_ORM->__get('city_name_ru')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 19:56:32 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:34
2013-03-21 19:56:32 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(34): Kohana_ORM->find()
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:34
2013-03-21 19:57:33 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:34
2013-03-21 19:57:33 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(34): Kohana_ORM->find()
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:34
2013-03-21 19:58:25 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:34
2013-03-21 19:58:25 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(34): Kohana_ORM->find()
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:34
2013-03-21 19:59:18 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:34
2013-03-21 19:59:18 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(34): Kohana_ORM->find()
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:34
2013-03-21 19:59:48 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:34
2013-03-21 19:59:48 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(34): Kohana_ORM->find()
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:34
2013-03-21 20:08:13 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'id' in 'where clause' [ SELECT `country`.`id_country` AS `id_country`, `country`.`oid` AS `oid`, `country`.`country_name_ru` AS `country_name_ru`, `country`.`country_name_en` AS `country_name_en` FROM `country_` AS `country` WHERE `id` = 219 LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php:251
2013-03-21 20:08:13 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `country...', false, Array)
#1 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(34): Kohana_ORM->find()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php:251
2013-03-21 20:15:43 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$regions ~ APPPATH\classes\Controller\Index.php [ 36 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:36
2013-03-21 20:15:43 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 36, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:36
2013-03-21 20:26:14 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$country_name_ru ~ APPPATH\classes\Controller\Index.php [ 38 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:38
2013-03-21 20:26:14 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(38): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 38, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:38
2013-03-21 20:26:39 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$country_name_ru ~ APPPATH\classes\Controller\Index.php [ 38 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:38
2013-03-21 20:26:39 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(38): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 38, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:38
2013-03-21 20:27:30 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$country_name_ru ~ APPPATH\classes\Controller\Index.php [ 38 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:38
2013-03-21 20:27:30 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(38): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 38, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php:38
2013-03-21 20:32:21 --- CRITICAL: Kohana_Exception [ 0 ]: The find property does not exist in the Model_Country class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 20:32:21 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('find')
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(34): Kohana_ORM->__get('find')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 20:32:46 --- CRITICAL: Kohana_Exception [ 0 ]: The find property does not exist in the Model_Country class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 20:32:46 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('find')
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Index.php(34): Kohana_ORM->__get('find')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Index->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 22:55:57 --- CRITICAL: Kohana_Exception [ 0 ]: The region_name_ru property does not exist in the Model_City class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 22:55:57 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('region_name_ru')
#1 C:\xampp\htdocs\0freelance\application\views\v_city.php(6): Kohana_ORM->__get('region_name_ru')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\0freelance\application\views\v_base.php(72): Kohana_View->__toString()
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\0freelance\application\classes\Controller\Base.php(22): Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\0freelance\application\classes\Controller\Ajaxcities.php(12): Controller_Base->after()
#11 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(87): Controller_Ajaxcities->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxcities))
#14 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#17 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-21 22:57:40 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Ajaxcities.php [ 20 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Ajaxcities.php:20
2013-03-21 22:57:40 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Ajaxcities.php(20): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\xampp\htdocs...', 20, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Ajaxcities->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxcities))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Ajaxcities.php:20
2013-03-21 23:19:58 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\Controller\Ajaxcities.php [ 31 ] in :
2013-03-21 23:19:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :