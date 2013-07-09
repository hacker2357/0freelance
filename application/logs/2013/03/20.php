<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-20 00:18:56 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Login.php [ 52 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Login.php:52
2013-03-20 00:18:56 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Login.php(52): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 52, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Login->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Login.php:52
2013-03-20 00:20:17 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Login.php [ 52 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Login.php:52
2013-03-20 00:20:17 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Login.php(52): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 52, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Login->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Login.php:52
2013-03-20 15:04:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Registration.php [ 27 ] in :
2013-03-20 15:04:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-20 15:04:50 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::extract() must be of the type array, string given, called in C:\xampp\htdocs\0freelance\application\classes\Controller\Registration.php on line 20 and defined ~ SYSPATH\classes\Kohana\Arr.php [ 296 ] in C:\xampp\htdocs\0freelance\system\classes\Kohana\Arr.php:296
2013-03-20 15:04:50 --- DEBUG: #0 C:\xampp\htdocs\0freelance\system\classes\Kohana\Arr.php(296): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\xampp\htdocs...', 296, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Registration.php(20): Kohana_Arr::extract(Array, 'email_input')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Registration->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\system\classes\Kohana\Arr.php:296
2013-03-20 15:05:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function sha256() ~ APPPATH\classes\Controller\Registration.php [ 25 ] in :
2013-03-20 15:05:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-20 15:07:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Email::save() ~ APPPATH\classes\Controller\Registration.php [ 26 ] in :
2013-03-20 15:07:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-20 15:09:26 --- CRITICAL: Kohana_Exception [ 0 ]: The hash property does not exist in the Model_Email class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:699
2013-03-20 15:09:26 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('hash', '936d7bb37dd84ad...')
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Registration.php(25): Kohana_ORM->__set('hash', '936d7bb37dd84ad...')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Registration->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:699
2013-03-20 15:11:06 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:1299
2013-03-20 15:11:06 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Registration.php(26): Kohana_ORM->save()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Registration->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:1299
2013-03-20 15:12:45 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:1299
2013-03-20 15:12:45 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Registration.php(26): Kohana_ORM->save()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Registration->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:1299
2013-03-20 16:04:01 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\v_registration.php [ 13 ] in C:\xampp\htdocs\0freelance\application\views\v_registration.php:13
2013-03-20 16:04:01 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\views\v_registration.php(13): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 13, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\0freelance\application\views\v_base.php(72): Kohana_View->__toString()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\0freelance\application\classes\Controller\Base.php(22): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\0freelance\application\classes\Controller\Registration.php(15): Controller_Base->after()
#10 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(87): Controller_Registration->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#13 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\0freelance\application\views\v_registration.php:13
2013-03-20 18:45:59 --- CRITICAL: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in C:\xampp\htdocs\0freelance\modules\email\init.php:4
2013-03-20 18:45:59 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include(): File...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\0freelance\modules\email\init.php(4): include()
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Core.php(602): require_once('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\0freelance\application\bootstrap.php(124): Kohana_Core::modules(Array)
#4 C:\xampp\htdocs\0freelance\index.php(102): require('C:\xampp\htdocs...')
#5 {main} in C:\xampp\htdocs\0freelance\modules\email\init.php:4
2013-03-20 18:50:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH\classes\Controller.php [ 14 ] in :
2013-03-20 18:50:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-20 18:50:20 --- CRITICAL: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in C:\xampp\htdocs\0freelance\modules\email\init.php:4
2013-03-20 18:50:20 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include(): File...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\0freelance\modules\email\init.php(4): include()
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Core.php(602): require_once('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\0freelance\application\bootstrap.php(124): Kohana_Core::modules(Array)
#4 C:\xampp\htdocs\0freelance\index.php(102): require('C:\xampp\htdocs...')
#5 {main} in C:\xampp\htdocs\0freelance\modules\email\init.php:4
2013-03-20 18:50:25 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'email' at 'MODPATH\email2' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in C:\xampp\htdocs\0freelance\application\bootstrap.php:124
2013-03-20 18:50:25 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\bootstrap.php(124): Kohana_Core::modules(Array)
#1 C:\xampp\htdocs\0freelance\index.php(102): require('C:\xampp\htdocs...')
#2 {main} in C:\xampp\htdocs\0freelance\application\bootstrap.php:124
2013-03-20 18:50:32 --- CRITICAL: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in C:\xampp\htdocs\0freelance\modules\email\init.php:4
2013-03-20 18:50:32 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include(): File...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\0freelance\modules\email\init.php(4): include()
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Core.php(602): require_once('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\0freelance\application\bootstrap.php(124): Kohana_Core::modules(Array)
#4 C:\xampp\htdocs\0freelance\index.php(102): require('C:\xampp\htdocs...')
#5 {main} in C:\xampp\htdocs\0freelance\modules\email\init.php:4
2013-03-20 18:50:57 --- CRITICAL: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in C:\xampp\htdocs\0freelance\modules\email\init.php:4
2013-03-20 18:50:57 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include(): File...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\0freelance\modules\email\init.php(4): include()
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Core.php(602): require_once('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\0freelance\application\bootstrap.php(124): Kohana_Core::modules(Array)
#4 C:\xampp\htdocs\0freelance\index.php(102): require('C:\xampp\htdocs...')
#5 {main} in C:\xampp\htdocs\0freelance\modules\email\init.php:4
2013-03-20 18:51:46 --- CRITICAL: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in C:\xampp\htdocs\0freelance\modules\email\init.php:4
2013-03-20 18:51:46 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include(): File...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\0freelance\modules\email\init.php(4): include()
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Core.php(602): require_once('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\0freelance\application\bootstrap.php(124): Kohana_Core::modules(Array)
#4 C:\xampp\htdocs\0freelance\index.php(102): require('C:\xampp\htdocs...')
#5 {main} in C:\xampp\htdocs\0freelance\modules\email\init.php:4
2013-03-20 21:17:50 --- CRITICAL: Kohana_Exception [ 0 ]: The hash property does not exist in the Model_Email class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-20 21:17:50 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('hash')
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Registration.php(30): Kohana_ORM->__get('hash')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Registration.php(54): Controller_Registration->add_email()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Registration->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600