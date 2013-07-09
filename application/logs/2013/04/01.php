<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-01 17:09:00 --- CRITICAL: ErrorException [ 8 ]: Undefined index: check_email ~ APPPATH\classes\Controller\Account.php [ 33 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php:33
2013-04-01 17:09:00 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(69): Controller_Account->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php:33
2013-04-01 21:58:27 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::values() must be of the type array, object given, called in C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php on line 86 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 772 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:772
2013-04-01 21:58:27 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(772): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 772, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(86): Kohana_ORM->values(Object(Validation))
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(30): Controller_Account->edit_about('22')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(69): Controller_Account->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:772
2013-04-01 21:59:03 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::values() must be of the type array, object given, called in C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php on line 86 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 772 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:772
2013-04-01 21:59:03 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(772): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 772, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(86): Kohana_ORM->values(Object(Validation), Array)
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(30): Controller_Account->edit_about('22')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(69): Controller_Account->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:772
2013-04-01 22:02:22 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::values() must be of the type array, object given, called in C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php on line 86 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 772 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:772
2013-04-01 22:02:22 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(772): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 772, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(86): Kohana_ORM->values(Object(Validation), Array)
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(30): Controller_Account->edit_about('22')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(69): Controller_Account->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:772
2013-04-01 22:17:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Account.php [ 419 ] in :
2013-04-01 22:17:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-01 22:31:24 --- CRITICAL: Kohana_Exception [ 0 ]: The about_me property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-04-01 22:31:24 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('about_me')
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(29): Kohana_ORM->__get('about_me')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(69): Controller_Account->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600