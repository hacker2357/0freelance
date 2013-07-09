<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-24 00:00:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\CRegistration.php [ 49 ] in :
2013-03-24 00:00:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-24 00:02:48 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Pol as array ~ APPPATH\classes\Controller\CRegistration.php [ 55 ] in :
2013-03-24 00:02:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-24 00:09:28 --- CRITICAL: ErrorException [ 2 ]: in_array() expects at least 2 parameters, 1 given ~ SYSPATH\classes\Kohana\Validation.php [ 399 ] in :
2013-03-24 00:09:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', 'C:\xampp\htdocs...', 399, Array)
#1 [internal function]: in_array(Array)
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Validation.php(399): ReflectionFunction->invokeArgs(Array)
#3 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(87): Kohana_Validation->check()
#4 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(113): Controller_CRegistration->add_user('hacker@gmail.co...')
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#8 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-03-24 00:10:43 --- CRITICAL: ErrorException [ 2 ]: in_array() expects at least 2 parameters, 1 given ~ SYSPATH\classes\Kohana\Validation.php [ 399 ] in :
2013-03-24 00:10:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', 'C:\xampp\htdocs...', 399, Array)
#1 [internal function]: in_array(Array)
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Validation.php(399): ReflectionFunction->invokeArgs(Array)
#3 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(87): Kohana_Validation->check()
#4 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(113): Controller_CRegistration->add_user('hacker@gmail.co...')
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#8 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-03-24 00:58:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\CRegistration.php [ 14 ] in :
2013-03-24 00:58:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-24 13:44:47 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Validation::$first_name ~ APPPATH\classes\Controller\CRegistration.php [ 142 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php:142
2013-03-24 13:44:47 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(142): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 142, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(167): Controller_CRegistration->add_user('hacker@gmail.co...')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php:142
2013-03-24 13:50:01 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Validation::filter() ~ APPPATH\classes\Controller\CRegistration.php [ 136 ] in :
2013-03-24 13:50:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-24 13:50:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Validation::filters() ~ APPPATH\classes\Controller\CRegistration.php [ 136 ] in :
2013-03-24 13:50:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-24 13:54:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\CRegistration.php [ 140 ] in :
2013-03-24 13:54:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-24 13:55:36 --- CRITICAL: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH\classes\Kohana\Validation.php [ 65 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php:45
2013-03-24 13:55:36 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(45): Kohana_Validation->offsetSet('first_name', '??????????')
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(170): Controller_CRegistration->add_user('hacker@gmail.co...')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php:45
2013-03-24 16:37:45 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::values() must be of the type array, object given, called in C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php on line 174 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 772 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:772
2013-03-24 16:37:45 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(772): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 772, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(174): Kohana_ORM->values(Object(Validation))
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(198): Controller_CRegistration->add_user('hacker@gmail.co...')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:772
2013-03-24 16:42:47 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::values() must be of the type array, object given, called in C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php on line 175 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 772 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:772
2013-03-24 16:42:47 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(772): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 772, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(175): Kohana_ORM->values(Object(Validation), Array)
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(199): Controller_CRegistration->add_user('hacker@gmail.co...')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:772
2013-03-24 16:44:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post_arr ~ APPPATH\classes\Controller\CRegistration.php [ 177 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php:177
2013-03-24 16:44:08 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(177): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 177, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(201): Controller_CRegistration->add_user('hacker@gmail.co...')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php:177
2013-03-24 16:45:06 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::values() must be of the type array, object given, called in C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php on line 177 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 772 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:772
2013-03-24 16:45:06 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(772): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 772, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(177): Kohana_ORM->values(Object(Validation), Array)
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(201): Controller_CRegistration->add_user('hacker@gmail.co...')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:772
2013-03-24 16:45:45 --- CRITICAL: Kohana_Exception [ 0 ]: The country_id property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:699
2013-03-24 16:45:45 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('country_id', '219')
#1 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(801): Kohana_ORM->__set('country_id', '219')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(177): Kohana_ORM->values(Array, Array)
#3 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(201): Controller_CRegistration->add_user('hacker@gmail.co...')
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:699
2013-03-24 16:46:35 --- CRITICAL: Kohana_Exception [ 0 ]: The country_id property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:699
2013-03-24 16:46:35 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('country_id', '219')
#1 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(801): Kohana_ORM->__set('country_id', '219')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(177): Kohana_ORM->values(Array, Array)
#3 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(201): Controller_CRegistration->add_user('hacker@gmail.co...')
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:699
2013-03-24 17:54:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Controller\Deleteemail.php [ 19 ] in :
2013-03-24 17:54:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-24 19:19:47 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Unknown modifier '/' ~ APPPATH\classes\Controller\CRegistration.php [ 61 ] in :
2013-03-24 19:19:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'C:\xampp\htdocs...', 61, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(61): preg_replace('/^(http(s){0,1}...', 'http$2://$3$4/$...', 'freelance.ru')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(219): Controller_CRegistration->add_user('sdkgh@gmail.com')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-03-24 19:20:11 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Unknown modifier '/' ~ APPPATH\classes\Controller\CRegistration.php [ 62 ] in :
2013-03-24 19:20:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'C:\xampp\htdocs...', 62, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(62): preg_replace('/^(http(s){0,1}...', 'http$2://$3$4/$...', 'freelance.ru')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(220): Controller_CRegistration->add_user('sdkgh@gmail.com')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-03-24 19:20:31 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Unknown modifier '/' ~ APPPATH\classes\Controller\CRegistration.php [ 62 ] in :
2013-03-24 19:20:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'C:\xampp\htdocs...', 62, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(62): preg_replace('/^(http(s){0,1}...', 'http$2:\/\/$3$4...', 'freelance.ru')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(220): Controller_CRegistration->add_user('sdkgh@gmail.com')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-03-24 19:20:55 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Unknown modifier '/' ~ APPPATH\classes\Controller\CRegistration.php [ 62 ] in :
2013-03-24 19:20:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'C:\xampp\htdocs...', 62, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(62): preg_replace('/^(http(s){0,1}...', 'http$2://$3$4/$...', 'freelance.ru')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(220): Controller_CRegistration->add_user('sdkgh@gmail.com')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-03-24 19:23:50 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Unknown modifier '/' ~ APPPATH\classes\Controller\CRegistration.php [ 62 ] in :
2013-03-24 19:23:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'C:\xampp\htdocs...', 62, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(62): preg_replace('/^(http(s){0,1}...', 'http$2:$3$4$6', 'freelance.ru')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(220): Controller_CRegistration->add_user('sdkgh@gmail.com')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-03-24 19:24:37 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Unknown modifier '/' ~ APPPATH\classes\Controller\CRegistration.php [ 63 ] in :
2013-03-24 19:24:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(63): preg_replace('/^(http(s){0,1}...', 'http$2://$3$4/$...', 'freelance.ru')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(221): Controller_CRegistration->add_user('sdkgh@gmail.com')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-03-24 19:25:30 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Unknown modifier '/' ~ APPPATH\classes\Controller\CRegistration.php [ 63 ] in :
2013-03-24 19:25:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(63): preg_replace('/^(http(s){0,1}...', 'http$2://$3$4/$...', '')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(221): Controller_CRegistration->add_user('sdkgh@gmail.com')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-03-24 19:25:55 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Unknown modifier '/' ~ APPPATH\classes\Controller\CRegistration.php [ 63 ] in :
2013-03-24 19:25:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(63): preg_replace('/^(http(s){0,1}...', 'http$2://$3$4/$...', '')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(221): Controller_CRegistration->add_user('sdkgh@gmail.com')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-03-24 20:29:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\classes\Controller\Registration.php [ 65 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Registration.php:65
2013-03-24 20:29:03 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Registration.php(65): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 65, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Registration.php(78): Controller_Registration->add_email()
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Registration->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Registration.php:65
2013-03-24 20:38:13 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Registration.php:60
2013-03-24 20:38:13 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Registration.php(60): Kohana_ORM->find()
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Registration.php(84): Controller_Registration->add_email()
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Registration->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Registration.php:60
2013-03-24 20:43:02 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 186 ] in :
2013-03-24 20:43:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-24 21:41:00 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Recover' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-03-24 21:41:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-24 21:41:18 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Recover' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-03-24 21:41:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-24 21:42:20 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user.id_user' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`first_name` AS `first_name`, `user`.`last_name` AS `last_name`, `user`.`birthday` AS `birthday`, `user`.`pol_id` AS `pol_id`, `user`.`status_id` AS `status_id`, `user`.`city_id` AS `city_id`, `user`.`website` AS `website`, `user`.`phone` AS `phone`, `user`.`hide_email` AS `hide_email`, `user`.`avatar` AS `avatar`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login` FROM `users` AS `user` WHERE `user`.`id_user` = '1' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php:251
2013-03-24 21:42:20 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(650): Kohana_ORM->find()
#4 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('recover')
#5 C:\xampp\htdocs\0freelance\application\classes\Controller\Forgotpassword.php(41): Kohana_ORM->__get('recover')
#6 C:\xampp\htdocs\0freelance\application\classes\Controller\Forgotpassword.php(52): Controller_Forgotpassword->recover_pass()
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Forgotpassword->action_getpage()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forgotpassword))
#10 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php:251
2013-03-24 21:43:19 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user.id_user' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`first_name` AS `first_name`, `user`.`last_name` AS `last_name`, `user`.`birthday` AS `birthday`, `user`.`pol_id` AS `pol_id`, `user`.`status_id` AS `status_id`, `user`.`city_id` AS `city_id`, `user`.`website` AS `website`, `user`.`phone` AS `phone`, `user`.`hide_email` AS `hide_email`, `user`.`avatar` AS `avatar`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login` FROM `users` AS `user` WHERE `user`.`id_user` = '1' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php:251
2013-03-24 21:43:19 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(650): Kohana_ORM->find()
#4 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('recover')
#5 C:\xampp\htdocs\0freelance\application\classes\Controller\Forgotpassword.php(41): Kohana_ORM->__get('recover')
#6 C:\xampp\htdocs\0freelance\application\classes\Controller\Forgotpassword.php(52): Controller_Forgotpassword->recover_pass()
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Forgotpassword->action_getpage()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forgotpassword))
#10 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php:251
2013-03-24 21:44:34 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user.id_user' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`first_name` AS `first_name`, `user`.`last_name` AS `last_name`, `user`.`birthday` AS `birthday`, `user`.`pol_id` AS `pol_id`, `user`.`status_id` AS `status_id`, `user`.`city_id` AS `city_id`, `user`.`website` AS `website`, `user`.`phone` AS `phone`, `user`.`hide_email` AS `hide_email`, `user`.`avatar` AS `avatar`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login` FROM `users` AS `user` WHERE `user`.`id_user` = '1' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php:251
2013-03-24 21:44:34 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(650): Kohana_ORM->find()
#4 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('recover')
#5 C:\xampp\htdocs\0freelance\application\classes\Controller\Forgotpassword.php(41): Kohana_ORM->__get('recover')
#6 C:\xampp\htdocs\0freelance\application\classes\Controller\Forgotpassword.php(52): Controller_Forgotpassword->recover_pass()
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Forgotpassword->action_getpage()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forgotpassword))
#10 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php:251
2013-03-24 21:47:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id_user ~ MODPATH\orm\classes\Kohana\ORM.php [ 630 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:630
2013-03-24 21:47:37 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(630): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 630, Array)
#1 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('recover')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Forgotpassword.php(41): Kohana_ORM->__get('recover')
#3 C:\xampp\htdocs\0freelance\application\classes\Controller\Forgotpassword.php(52): Controller_Forgotpassword->recover_pass()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Forgotpassword->action_getpage()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forgotpassword))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:630
2013-03-24 21:50:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id_user ~ MODPATH\orm\classes\Kohana\ORM.php [ 630 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:630
2013-03-24 21:50:04 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(630): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 630, Array)
#1 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('recover')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Forgotpassword.php(41): Kohana_ORM->__get('recover')
#3 C:\xampp\htdocs\0freelance\application\classes\Controller\Forgotpassword.php(52): Controller_Forgotpassword->recover_pass()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Forgotpassword->action_getpage()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forgotpassword))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:630
2013-03-24 21:50:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id_user ~ MODPATH\orm\classes\Kohana\ORM.php [ 630 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:630
2013-03-24 21:50:34 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(630): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 630, Array)
#1 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('recover')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Forgotpassword.php(41): Kohana_ORM->__get('recover')
#3 C:\xampp\htdocs\0freelance\application\classes\Controller\Forgotpassword.php(52): Controller_Forgotpassword->recover_pass()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Forgotpassword->action_getpage()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forgotpassword))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:630
2013-03-24 21:57:02 --- CRITICAL: Kohana_Exception [ 0 ]: The key property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-24 21:57:02 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('key')
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Forgotpassword.php(41): Kohana_ORM->__get('key')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Forgotpassword.php(52): Controller_Forgotpassword->recover_pass()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Forgotpassword->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forgotpassword))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-24 21:58:09 --- CRITICAL: Kohana_Exception [ 0 ]: The key property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-24 21:58:09 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('key')
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Forgotpassword.php(41): Kohana_ORM->__get('key')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Forgotpassword.php(52): Controller_Forgotpassword->recover_pass()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Forgotpassword->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forgotpassword))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-24 22:00:05 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user.id_user' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`first_name` AS `first_name`, `user`.`last_name` AS `last_name`, `user`.`birthday` AS `birthday`, `user`.`pol_id` AS `pol_id`, `user`.`status_id` AS `status_id`, `user`.`city_id` AS `city_id`, `user`.`website` AS `website`, `user`.`phone` AS `phone`, `user`.`hide_email` AS `hide_email`, `user`.`avatar` AS `avatar`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login` FROM `users` AS `user` WHERE `user`.`id_user` = '464' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php:251
2013-03-24 22:00:05 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(650): Kohana_ORM->find()
#4 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('recover')
#5 C:\xampp\htdocs\0freelance\application\classes\Controller\Forgotpassword.php(41): Kohana_ORM->__get('recover')
#6 C:\xampp\htdocs\0freelance\application\classes\Controller\Forgotpassword.php(52): Controller_Forgotpassword->recover_pass()
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Forgotpassword->action_getpage()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Forgotpassword))
#10 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php:251