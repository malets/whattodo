<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-15 03:26:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Achivment::achive_goal() ~ APPPATH/classes/Controller/Ajax.php [ 21 ] in :
2013-09-15 03:26:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-15 03:34:37 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'IDfg' in 'where clause' [ UPDATE `achivments` SET `achived` = '1' WHERE `IDfg` = '6' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php:251
2013-09-15 03:34:37 --- DEBUG: #0 /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `achivme...', false, Array)
#1 /media/share/whatToDo/application/classes/Model/Achivment.php(33): Kohana_Database_Query->execute()
#2 /media/share/whatToDo/application/classes/Controller/Ajax.php(21): Model_Achivment->achive_goal('6')
#3 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_achive_goal()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#9 {main} in /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php:251
2013-09-15 03:35:39 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'IDfg' in 'where clause' [ UPDATE `achivments` SET `achived` = '1' WHERE `IDfg` = '6' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php:251
2013-09-15 03:35:39 --- DEBUG: #0 /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `achivme...', false, Array)
#1 /media/share/whatToDo/application/classes/Model/Achivment.php(33): Kohana_Database_Query->execute()
#2 /media/share/whatToDo/application/classes/Controller/Ajax.php(21): Model_Achivment->achive_goal('6')
#3 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_achive_goal()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#9 {main} in /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php:251
2013-09-15 03:43:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: answer ~ APPPATH/views/empty.php [ 1 ] in /media/share/whatToDo/application/views/empty.php:1
2013-09-15 03:43:25 --- DEBUG: #0 /media/share/whatToDo/application/views/empty.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/share/wh...', 1, Array)
#1 /media/share/whatToDo/system/classes/Kohana/View.php(61): include('/media/share/wh...')
#2 /media/share/whatToDo/system/classes/Kohana/View.php(348): Kohana_View::capture('/media/share/wh...', Array)
#3 /media/share/whatToDo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /media/share/whatToDo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#10 {main} in /media/share/whatToDo/application/views/empty.php:1
2013-09-15 03:44:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/empty.php [ 1 ] in /media/share/whatToDo/application/views/empty.php:1
2013-09-15 03:44:46 --- DEBUG: #0 /media/share/whatToDo/application/views/empty.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/share/wh...', 1, Array)
#1 /media/share/whatToDo/system/classes/Kohana/View.php(61): include('/media/share/wh...')
#2 /media/share/whatToDo/system/classes/Kohana/View.php(348): Kohana_View::capture('/media/share/wh...', Array)
#3 /media/share/whatToDo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /media/share/whatToDo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#10 {main} in /media/share/whatToDo/application/views/empty.php:1
2013-09-15 03:47:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: answer ~ APPPATH/views/empty.php [ 1 ] in /media/share/whatToDo/application/views/empty.php:1
2013-09-15 03:47:47 --- DEBUG: #0 /media/share/whatToDo/application/views/empty.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/share/wh...', 1, Array)
#1 /media/share/whatToDo/system/classes/Kohana/View.php(61): include('/media/share/wh...')
#2 /media/share/whatToDo/system/classes/Kohana/View.php(348): Kohana_View::capture('/media/share/wh...', Array)
#3 /media/share/whatToDo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /media/share/whatToDo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#10 {main} in /media/share/whatToDo/application/views/empty.php:1
2013-09-15 09:46:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: answer ~ APPPATH/views/empty.php [ 1 ] in /media/share/whatToDo/application/views/empty.php:1
2013-09-15 09:46:34 --- DEBUG: #0 /media/share/whatToDo/application/views/empty.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/share/wh...', 1, Array)
#1 /media/share/whatToDo/system/classes/Kohana/View.php(61): include('/media/share/wh...')
#2 /media/share/whatToDo/system/classes/Kohana/View.php(348): Kohana_View::capture('/media/share/wh...', Array)
#3 /media/share/whatToDo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /media/share/whatToDo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#10 {main} in /media/share/whatToDo/application/views/empty.php:1
2013-09-15 09:47:09 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'ID' [ INSERT INTO `userInfo` () VALUES ('1', 'ge', 'gtrtg', 'rgerr') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php:251
2013-09-15 09:47:09 --- DEBUG: #0 /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /media/share/whatToDo/application/classes/Model/Profile.php(40): Kohana_Database_Query->execute()
#2 /media/share/whatToDo/application/classes/Controller/Ajax.php(52): Model_Profile->edit_profile(Array)
#3 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_edit_profile()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#9 {main} in /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php:251
2013-09-15 09:50:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: answer ~ APPPATH/views/empty.php [ 1 ] in /media/share/whatToDo/application/views/empty.php:1
2013-09-15 09:50:30 --- DEBUG: #0 /media/share/whatToDo/application/views/empty.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/share/wh...', 1, Array)
#1 /media/share/whatToDo/system/classes/Kohana/View.php(61): include('/media/share/wh...')
#2 /media/share/whatToDo/system/classes/Kohana/View.php(348): Kohana_View::capture('/media/share/wh...', Array)
#3 /media/share/whatToDo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /media/share/whatToDo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#10 {main} in /media/share/whatToDo/application/views/empty.php:1
2013-09-15 09:50:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: answer ~ APPPATH/views/empty.php [ 1 ] in /media/share/whatToDo/application/views/empty.php:1
2013-09-15 09:50:55 --- DEBUG: #0 /media/share/whatToDo/application/views/empty.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/share/wh...', 1, Array)
#1 /media/share/whatToDo/system/classes/Kohana/View.php(61): include('/media/share/wh...')
#2 /media/share/whatToDo/system/classes/Kohana/View.php(348): Kohana_View::capture('/media/share/wh...', Array)
#3 /media/share/whatToDo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /media/share/whatToDo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#10 {main} in /media/share/whatToDo/application/views/empty.php:1