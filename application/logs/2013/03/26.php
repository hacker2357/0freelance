<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-26 00:03:12 --- CRITICAL: ErrorException [ 2 ]: dir(media\files\DrFMUtbk2yroF3V87JA414UiBLPsCgSDhmZnirBRTjICMkNJbl.png,media\files\DrFMUtbk2yroF3V87JA414UiBLPsCgSDhmZnirBRTjICMkNJbl.png):  ~ APPPATH\classes\Controller\CRegistration.php [ 86 ] in :
2013-03-26 00:03:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'dir(media\files...', 'C:\xampp\htdocs...', 86, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(86): dir('media\files\DrF...')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(241): Controller_CRegistration->add_user('sdgh@gmail.com')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-03-26 00:43:48 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Unknown modifier 'g' ~ APPPATH\classes\Controller\CRegistration.php [ 94 ] in :
2013-03-26 00:43:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'C:\xampp\htdocs...', 94, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(94): preg_replace('/^(.*)(\/)(.*)$...', '$1/$3', 'media\files')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(247): Controller_CRegistration->add_user('sdgh@gmail.com')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-03-26 00:51:46 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Compilation failed: missing ) at offset 34 ~ APPPATH\classes\Controller\CRegistration.php [ 102 ] in :
2013-03-26 00:51:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'C:\xampp\htdocs...', 102, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(102): preg_replace('/^(.*media\\fil...', 'media/files/$2', 'C:\xampp\htdocs...')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(251): Controller_CRegistration->add_user('sdgh@gmail.com')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-03-26 00:54:39 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Compilation failed: missing ) at offset 23 ~ APPPATH\classes\Controller\CRegistration.php [ 102 ] in :
2013-03-26 00:54:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'C:\xampp\htdocs...', 102, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(102): preg_replace('/^(.*media\\fil...', 'media/files/$2', 'C:\xampp\htdocs...')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(251): Controller_CRegistration->add_user('sdgh@gmail.com')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-03-26 01:39:17 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Empty regular expression ~ APPPATH\classes\Controller\CRegistration.php [ 106 ] in :
2013-03-26 01:39:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'C:\xampp\htdocs...', 106, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(106): preg_replace('', '', 'C:\\xampp\\htdo...')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(255): Controller_CRegistration->add_user('sdgh@gmail.com')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-03-26 01:56:08 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Userful' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in :
2013-03-26 01:56:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-26 02:42:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\Controller\CRegistration.php [ 220 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php:220
2013-03-26 02:42:29 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(220): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 220, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(240): Controller_CRegistration->add_user('sdgh@gmail.com')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php:220
2013-03-26 14:09:41 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::size() must be of the type array, string given ~ SYSPATH\classes\Kohana\Upload.php [ 169 ] in C:\xampp\htdocs\0freelance\system\classes\Kohana\Upload.php:169
2013-03-26 14:09:41 --- DEBUG: #0 C:\xampp\htdocs\0freelance\system\classes\Kohana\Upload.php(169): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 169, Array)
#1 [internal function]: Kohana_Upload::size('1M')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(189): Kohana_Validation->check()
#4 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(249): Controller_CRegistration->add_user('sddfg@gmail.com')
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#8 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\0freelance\system\classes\Kohana\Upload.php:169
2013-03-26 14:37:44 --- CRITICAL: ErrorException [ 1 ]: Class 'Image' not found ~ APPPATH\classes\Controller\CRegistration.php [ 207 ] in :
2013-03-26 14:37:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-26 14:38:05 --- CRITICAL: ErrorException [ 1 ]: Cannot instantiate abstract class Image ~ APPPATH\classes\Controller\CRegistration.php [ 207 ] in :
2013-03-26 14:38:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-26 14:39:32 --- CRITICAL: ErrorException [ 1 ]: Class Image contains 10 abstract methods and must therefore be declared abstract or implement the remaining methods (Kohana_Image::_do_resize, Kohana_Image::_do_crop, Kohana_Image::_do_rotate, ...) ~ APPPATH\classes\Image.php [ 3 ] in :
2013-03-26 14:39:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-26 16:19:18 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Login.php [ 11 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Login.php:11
2013-03-26 16:19:18 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Login.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\xampp\htdocs...', 11, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(69): Controller_Login->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Login.php:11
2013-03-26 16:26:05 --- CRITICAL: View_Exception [ 0 ]: The requested view v_prtfolio could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php:137
2013-03-26 16:26:05 --- DEBUG: #0 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(137): Kohana_View->set_filename('v_prtfolio')
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(30): Kohana_View->__construct('v_prtfolio', NULL)
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Portfolio.php(23): Kohana_View::factory('v_prtfolio')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Portfolio->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Portfolio))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php:137