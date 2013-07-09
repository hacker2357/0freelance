<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-31 13:32:16 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Valid.php [ 39 ] in :
2013-03-31 13:32:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\0freelance\system\classes\Kohana\Valid.php(39): preg_match('', '???????????????...')
#2 [internal function]: Kohana_Valid::regex('???????????????...', NULL)
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(182): Kohana_Validation->check()
#5 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(21): Controller_Account->edit_user('22')
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(69): Controller_Account->before()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#9 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#12 {main} in :