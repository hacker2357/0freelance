<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-02 12:28:34 --- CRITICAL: Kohana_Exception [ 0 ]: Installed GD does not support ico images ~ MODPATH\image\classes\Kohana\Image\GD.php [ 109 ] in C:\xampp\htdocs\0freelance\modules\image\classes\Kohana\Image.php:54
2013-04-02 12:28:34 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('media\files\G2N...')
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(325): Kohana_Image::factory('media\files\G2N...')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(38): Controller_Account->edit_user('22')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(69): Controller_Account->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\0freelance\modules\image\classes\Kohana\Image.php:54