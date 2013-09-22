<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-25 10:08:33 --- EMERGENCY: View_Exception [ 0 ]: The requested view common could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /media/share/whatToDo/system/classes/Kohana/View.php:137
2013-08-25 10:08:33 --- DEBUG: #0 /media/share/whatToDo/system/classes/Kohana/View.php(137): Kohana_View->set_filename('common')
#1 /media/share/whatToDo/system/classes/Kohana/View.php(30): Kohana_View->__construct('common', NULL)
#2 /media/share/whatToDo/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('common')
#3 /media/share/whatToDo/application/classes/Controller/Common.php(14): Kohana_Controller_Template->before()
#4 /media/share/whatToDo/system/classes/Kohana/Controller.php(69): Controller_Common->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_ListOfAchivments))
#7 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#10 {main} in /media/share/whatToDo/system/classes/Kohana/View.php:137
2013-08-25 10:10:16 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Common.php [ 16 ] in /media/share/whatToDo/application/classes/Controller/Common.php:16
2013-08-25 10:10:16 --- DEBUG: #0 /media/share/whatToDo/application/classes/Controller/Common.php(16): Kohana_Core::error_handler(2, 'Attempt to assi...', '/media/share/wh...', 16, Array)
#1 /media/share/whatToDo/system/classes/Kohana/Controller.php(69): Controller_Common->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_ListOfAchivments))
#4 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#7 {main} in /media/share/whatToDo/application/classes/Controller/Common.php:16
2013-08-25 10:10:44 --- EMERGENCY: View_Exception [ 0 ]: The requested view common could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /media/share/whatToDo/system/classes/Kohana/View.php:137
2013-08-25 10:10:44 --- DEBUG: #0 /media/share/whatToDo/system/classes/Kohana/View.php(137): Kohana_View->set_filename('common')
#1 /media/share/whatToDo/system/classes/Kohana/View.php(30): Kohana_View->__construct('common', NULL)
#2 /media/share/whatToDo/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('common')
#3 /media/share/whatToDo/application/classes/Controller/Common.php(14): Kohana_Controller_Template->before()
#4 /media/share/whatToDo/system/classes/Kohana/Controller.php(69): Controller_Common->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_ListOfAchivments))
#7 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#10 {main} in /media/share/whatToDo/system/classes/Kohana/View.php:137
2013-08-25 11:11:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_ListOfAchivments' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-08-25 11:11:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-25 11:11:40 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_ListOfAchivments::insert(), called in /media/share/whatToDo/application/classes/Controller/ListOfAchivments.php on line 15 and defined ~ APPPATH/classes/Model/ListOfAchivments.php [ 8 ] in /media/share/whatToDo/application/classes/Model/ListOfAchivments.php:8
2013-08-25 11:11:40 --- DEBUG: #0 /media/share/whatToDo/application/classes/Model/ListOfAchivments.php(8): Kohana_Core::error_handler(2, 'Missing argumen...', '/media/share/wh...', 8, Array)
#1 /media/share/whatToDo/application/classes/Controller/ListOfAchivments.php(15): Model_ListOfAchivments->insert()
#2 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_ListOfAchivments->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_ListOfAchivments))
#5 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#8 {main} in /media/share/whatToDo/application/classes/Model/ListOfAchivments.php:8
2013-08-25 11:11:57 --- EMERGENCY: Database_Exception [ 1049 ]: Unknown database 'whatToDo' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /media/share/whatToDo/modules/database/classes/Kohana/Database/MySQL.php:75
2013-08-25 11:11:57 --- DEBUG: #0 /media/share/whatToDo/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('whatToDo')
#1 /media/share/whatToDo/modules/database/classes/Kohana/Database/MySQL.php(430): Kohana_Database_MySQL->connect()
#2 /media/share/whatToDo/modules/database/classes/Kohana/Database.php(478): Kohana_Database_MySQL->escape('')
#3 /media/share/whatToDo/modules/database/classes/Kohana/Database/Query/Builder/Insert.php(146): Kohana_Database->quote('')
#4 /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Insert->compile(Object(Database_MySQL))
#5 /media/share/whatToDo/application/classes/Model/ListOfAchivments.php(12): Kohana_Database_Query->execute()
#6 /media/share/whatToDo/application/classes/Controller/ListOfAchivments.php(15): Model_ListOfAchivments->insert('', '')
#7 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_ListOfAchivments->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_ListOfAchivments))
#10 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#13 {main} in /media/share/whatToDo/modules/database/classes/Kohana/Database/MySQL.php:75
2013-08-25 11:13:10 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'whatToDo.linkActions' doesn't exist [ INSERT INTO `linkActions` (`offer`, `wish`) VALUES ('', '') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php:251
2013-08-25 11:13:10 --- DEBUG: #0 /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `li...', false, Array)
#1 /media/share/whatToDo/application/classes/Model/ListOfAchivments.php(12): Kohana_Database_Query->execute()
#2 /media/share/whatToDo/application/classes/Controller/ListOfAchivments.php(15): Model_ListOfAchivments->insert('', '')
#3 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_ListOfAchivments->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_ListOfAchivments))
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#9 {main} in /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php:251
2013-08-25 11:17:10 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'offer' in 'field list' [ INSERT INTO `achivments` (`offer`, `wish`) VALUES ('', '') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php:251
2013-08-25 11:17:10 --- DEBUG: #0 /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ac...', false, Array)
#1 /media/share/whatToDo/application/classes/Model/ListOfAchivments.php(12): Kohana_Database_Query->execute()
#2 /media/share/whatToDo/application/classes/Controller/ListOfAchivments.php(15): Model_ListOfAchivments->insert('', '')
#3 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_ListOfAchivments->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_ListOfAchivments))
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#9 {main} in /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php:251