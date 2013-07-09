<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-27 09:13:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'case' (T_CASE) ~ APPPATH\classes\Controller.php [ 78 ] in :
2013-03-27 09:13:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-27 15:51:06 --- CRITICAL: Database_Exception [ 1048 ]: Column 'avatar_id' cannot be null [ INSERT INTO `users` (`first_name`, `last_name`, `birthday`, `pol_id`, `status_id`, `city_id`, `website`, `phone`, `hide_email`, `avatar_id`, `email`, `username`, `password`) VALUES ('ЫВПВЫПЫВ', 'Ывпывп', '', '1', '1', '1765', '', '', '1', NULL, 'hacker@mail.ru', 'sdfghs', '4301a8ce0402d6c8edf36b16d81e008fb5cfcdcef2cc884fff0255238c1362a0') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php:251
2013-03-27 15:51:06 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(218): Kohana_ORM->create()
#3 C:\xampp\htdocs\0freelance\application\classes\Controller\CRegistration.php(256): Controller_CRegistration->add_user('hacker@mail.ru')
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_CRegistration->action_getpage()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_CRegistration))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php:251