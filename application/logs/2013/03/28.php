<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-28 02:12:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Controller\Widgets\Menu.php [ 12 ] in :
2013-03-28 02:12:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-28 15:52:55 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\views\v_settings.php [ 47 ] in :
2013-03-28 15:52:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-28 16:26:46 --- CRITICAL: Kohana_Exception [ 0 ]: The region_name_ru property does not exist in the Model_City class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-28 16:26:46 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('region_name_ru')
#1 C:\xampp\htdocs\0freelance\application\views\v_settings.php(133): Kohana_ORM->__get('region_name_ru')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\0freelance\application\views\v_base.php(77): Kohana_View->__toString()
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\0freelance\application\classes\Controller\Base.php(22): Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(14): Controller_Base->after()
#11 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(87): Controller_Account->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#14 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#17 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-28 16:27:00 --- CRITICAL: Kohana_Exception [ 0 ]: The country_name_ru property does not exist in the Model_Region class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-28 16:27:00 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('country_name_ru')
#1 C:\xampp\htdocs\0freelance\application\views\v_settings.php(116): Kohana_ORM->__get('country_name_ru')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\0freelance\application\views\v_base.php(77): Kohana_View->__toString()
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\0freelance\application\classes\Controller\Base.php(22): Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(14): Controller_Base->after()
#11 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(87): Controller_Account->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#14 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#17 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-28 16:34:10 --- CRITICAL: Kohana_Exception [ 0 ]: The city property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-28 16:34:10 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('city')
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(30): Kohana_ORM->__get('city')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Account->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-28 16:41:08 --- CRITICAL: Kohana_Exception [ 0 ]: The city property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-28 16:41:08 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('city')
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(30): Kohana_ORM->__get('city')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Account->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-28 16:41:41 --- CRITICAL: Kohana_Exception [ 0 ]: The country_id property does not exist in the Model_Region class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-28 16:41:41 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('country_id')
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(30): Kohana_ORM->__get('country_id')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Account->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-28 16:44:33 --- CRITICAL: Kohana_Exception [ 0 ]: The country_id property does not exist in the Model_Region class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-28 16:44:33 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('country_id')
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(30): Kohana_ORM->__get('country_id')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Account->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:600
2013-03-28 16:44:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: country_id ~ MODPATH\orm\classes\Kohana\ORM.php [ 630 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:630
2013-03-28 16:44:48 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(630): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 630, Array)
#1 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('country')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(30): Kohana_ORM->__get('country')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Account->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:630
2013-03-28 16:45:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: country_id ~ MODPATH\orm\classes\Kohana\ORM.php [ 630 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:630
2013-03-28 16:45:08 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(630): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 630, Array)
#1 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('country')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(30): Kohana_ORM->__get('country')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Account->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:630
2013-03-28 16:45:47 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'country_id' in 'where clause' [ SELECT `region`.`id_region` AS `id_region`, `region`.`id_country` AS `id_country`, `region`.`oid` AS `oid`, `region`.`region_name_ru` AS `region_name_ru`, `region`.`region_name_en` AS `region_name_en` FROM `region_` AS `region` WHERE `country_id` = '219' ORDER BY `oid` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php:251
2013-03-28 16:45:47 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `region`...', 'Model_Region', Array)
#1 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(30): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Account->action_getpage()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php:251
2013-03-28 16:45:59 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'country_id' in 'where clause' [ SELECT `region`.`id_region` AS `id_region`, `region`.`id_country` AS `id_country`, `region`.`oid` AS `oid`, `region`.`region_name_ru` AS `region_name_ru`, `region`.`region_name_en` AS `region_name_en` FROM `region_` AS `region` WHERE `country_id` = '219' ORDER BY `oid` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php:251
2013-03-28 16:45:59 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `region`...', 'Model_Region', Array)
#1 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(30): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Account->action_getpage()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php:251
2013-03-28 16:46:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id_region ~ MODPATH\orm\classes\Kohana\ORM.php [ 630 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:630
2013-03-28 16:46:36 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(630): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 630, Array)
#1 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('region')
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(30): Kohana_ORM->__get('region')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Account->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php:630
2013-03-28 16:47:14 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'country_id' in 'where clause' [ SELECT `region`.`id_region` AS `id_region`, `region`.`id_country` AS `id_country`, `region`.`oid` AS `oid`, `region`.`region_name_ru` AS `region_name_ru`, `region`.`region_name_en` AS `region_name_en` FROM `region_` AS `region` WHERE `country_id` = '219' ORDER BY `oid` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php:251
2013-03-28 16:47:14 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `region`...', 'Model_Region', Array)
#1 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\0freelance\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(30): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Account->action_getpage()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\0freelance\modules\database\classes\Kohana\Database\Query.php:251
2013-03-28 17:18:45 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH\classes\Kohana\Route.php [ 104 ] in C:\xampp\htdocs\0freelance\system\classes\Kohana\Route.php:104
2013-03-28 17:18:45 --- DEBUG: #0 C:\xampp\htdocs\0freelance\system\classes\Kohana\Route.php(104): Kohana_Core::error_handler(2, 'Illegal offset ...', 'C:\xampp\htdocs...', 104, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(32): Kohana_Route::get(Array)
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Account->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\system\classes\Kohana\Route.php:104
2013-03-28 22:14:25 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_Filters::filter_all(), called in C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php on line 235 and defined ~ APPPATH\classes\Model\Filters.php [ 37 ] in C:\xampp\htdocs\0freelance\application\classes\Model\Filters.php:37
2013-03-28 22:14:25 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Model\Filters.php(37): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 37, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(235): Model_Filters->filter_all(Array)
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Account->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\application\classes\Model\Filters.php:37
2013-03-28 22:15:26 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Filters::$website ~ APPPATH\classes\Model\Filters.php [ 43 ] in C:\xampp\htdocs\0freelance\application\classes\Model\Filters.php:43
2013-03-28 22:15:26 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Model\Filters.php(43): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 43, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(235): Model_Filters->filter_all(Array, Array)
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Account->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\application\classes\Model\Filters.php:43
2013-03-28 22:16:01 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Filters::$website ~ APPPATH\classes\Model\Filters.php [ 43 ] in C:\xampp\htdocs\0freelance\application\classes\Model\Filters.php:43
2013-03-28 22:16:01 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Model\Filters.php(43): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 43, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(235): Model_Filters->filter_all(Array, Array)
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Account->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\application\classes\Model\Filters.php:43
2013-03-28 22:16:18 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Filters::website(), called in C:\xampp\htdocs\0freelance\application\classes\Model\Filters.php on line 43 and defined ~ APPPATH\classes\Model\Filters.php [ 20 ] in C:\xampp\htdocs\0freelance\application\classes\Model\Filters.php:20
2013-03-28 22:16:18 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Model\Filters.php(20): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 20, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Model\Filters.php(43): Model_Filters->website()
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(235): Model_Filters->filter_all(Array, Array)
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Account->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\0freelance\application\classes\Model\Filters.php:20
2013-03-28 22:21:37 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant self - assumed 'self' ~ APPPATH\classes\Model\Filters.php [ 43 ] in C:\xampp\htdocs\0freelance\application\classes\Model\Filters.php:43
2013-03-28 22:21:37 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Model\Filters.php(43): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 43, Array)
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(235): Model_Filters->filter_all(Array, Array)
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Account->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\application\classes\Model\Filters.php:43
2013-03-28 22:38:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function phone() ~ APPPATH\classes\Model\Filters.php [ 55 ] in :
2013-03-28 22:38:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-28 23:36:39 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php:168
2013-03-28 23:36:39 --- DEBUG: #0 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(168): Kohana_ORM->update()
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(209): Controller_Account->edit_user('22')
#2 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Account->action_getpage()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php:168
2013-03-28 23:39:41 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\xampp\htdocs\0freelance\modules\orm\classes\Model\Auth\User.php:201
2013-03-28 23:39:41 --- DEBUG: #0 C:\xampp\htdocs\0freelance\modules\orm\classes\Model\Auth\User.php(201): Kohana_ORM->update(Object(Validation))
#1 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(168): Model_Auth_User->update_user(Array, Array)
#2 C:\xampp\htdocs\0freelance\application\classes\Controller\Account.php(209): Controller_Account->edit_user('22')
#3 C:\xampp\htdocs\0freelance\system\classes\Kohana\Controller.php(84): Controller_Account->action_getpage()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\0freelance\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\0freelance\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\0freelance\modules\orm\classes\Model\Auth\User.php:201
2013-03-28 23:41:10 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth_ORM::values() ~ APPPATH\classes\Controller\Account.php [ 170 ] in :
2013-03-28 23:41:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-28 23:41:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth_ORM::update_user() ~ APPPATH\classes\Controller\Account.php [ 170 ] in :
2013-03-28 23:41:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :