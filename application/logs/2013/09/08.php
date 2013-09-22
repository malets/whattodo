<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-08 08:43:21 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'whatToDo.categories' doesn't exist [ SELECT * FROM `categories` WHERE `URL` = 'begining' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php:251
2013-09-08 08:43:21 --- DEBUG: #0 /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /media/share/whatToDo/application/classes/Model/ListOfAchivments.php(57): Kohana_Database_Query->execute()
#2 /media/share/whatToDo/application/classes/Controller/ListOfAchivments.php(17): Model_ListOfAchivments->get_categoryID_by_URL('begining')
#3 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_ListOfAchivments->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_ListOfAchivments))
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#9 {main} in /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php:251
2013-09-08 08:55:28 --- EMERGENCY: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT * FROM `achivments` WHERE `CategoryID` = (('1', 'С чего начать ;)', 'begining', 'begining')) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php:251
2013-09-08 08:55:28 --- DEBUG: #0 /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /media/share/whatToDo/application/classes/Model/ListOfAchivments.php(45): Kohana_Database_Query->execute()
#2 /media/share/whatToDo/application/classes/Controller/ListOfAchivments.php(18): Model_ListOfAchivments->get_achivments_from_category(Array)
#3 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_ListOfAchivments->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_ListOfAchivments))
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#9 {main} in /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php:251
2013-09-08 08:56:20 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Model/ListOfAchivments.php [ 62 ] in /media/share/whatToDo/application/classes/Model/ListOfAchivments.php:62
2013-09-08 08:56:20 --- DEBUG: #0 /media/share/whatToDo/application/classes/Model/ListOfAchivments.php(62): Kohana_Core::error_handler(8, 'Trying to get p...', '/media/share/wh...', 62, Array)
#1 /media/share/whatToDo/application/classes/Controller/ListOfAchivments.php(17): Model_ListOfAchivments->get_categoryID_by_URL('begining')
#2 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_ListOfAchivments->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_ListOfAchivments))
#5 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#8 {main} in /media/share/whatToDo/application/classes/Model/ListOfAchivments.php:62
2013-09-08 08:56:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: ID ~ APPPATH/classes/Model/ListOfAchivments.php [ 62 ] in /media/share/whatToDo/application/classes/Model/ListOfAchivments.php:62
2013-09-08 08:56:46 --- DEBUG: #0 /media/share/whatToDo/application/classes/Model/ListOfAchivments.php(62): Kohana_Core::error_handler(8, 'Undefined index...', '/media/share/wh...', 62, Array)
#1 /media/share/whatToDo/application/classes/Controller/ListOfAchivments.php(17): Model_ListOfAchivments->get_categoryID_by_URL('begining')
#2 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_ListOfAchivments->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_ListOfAchivments))
#5 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#8 {main} in /media/share/whatToDo/application/classes/Model/ListOfAchivments.php:62
2013-09-08 08:57:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: ID ~ APPPATH/classes/Model/ListOfAchivments.php [ 63 ] in /media/share/whatToDo/application/classes/Model/ListOfAchivments.php:63
2013-09-08 08:57:00 --- DEBUG: #0 /media/share/whatToDo/application/classes/Model/ListOfAchivments.php(63): Kohana_Core::error_handler(8, 'Undefined index...', '/media/share/wh...', 63, Array)
#1 /media/share/whatToDo/application/classes/Controller/ListOfAchivments.php(17): Model_ListOfAchivments->get_categoryID_by_URL('begining')
#2 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_ListOfAchivments->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_ListOfAchivments))
#5 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#8 {main} in /media/share/whatToDo/application/classes/Model/ListOfAchivments.php:63
2013-09-08 08:57:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: ID ~ APPPATH/classes/Model/ListOfAchivments.php [ 63 ] in /media/share/whatToDo/application/classes/Model/ListOfAchivments.php:63
2013-09-08 08:57:14 --- DEBUG: #0 /media/share/whatToDo/application/classes/Model/ListOfAchivments.php(63): Kohana_Core::error_handler(8, 'Undefined index...', '/media/share/wh...', 63, Array)
#1 /media/share/whatToDo/application/classes/Controller/ListOfAchivments.php(17): Model_ListOfAchivments->get_categoryID_by_URL('begining')
#2 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_ListOfAchivments->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_ListOfAchivments))
#5 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#8 {main} in /media/share/whatToDo/application/classes/Model/ListOfAchivments.php:63
2013-09-08 08:57:29 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/ListOfAchivments.php [ 43 ] in /media/share/whatToDo/application/views/ListOfAchivments.php:43
2013-09-08 08:57:29 --- DEBUG: #0 /media/share/whatToDo/application/views/ListOfAchivments.php(43): Kohana_Core::error_handler(8, 'Trying to get p...', '/media/share/wh...', 43, Array)
#1 /media/share/whatToDo/system/classes/Kohana/View.php(61): include('/media/share/wh...')
#2 /media/share/whatToDo/system/classes/Kohana/View.php(348): Kohana_View::capture('/media/share/wh...', Array)
#3 /media/share/whatToDo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /media/share/whatToDo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_ListOfAchivments))
#7 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#10 {main} in /media/share/whatToDo/application/views/ListOfAchivments.php:43
2013-09-08 09:02:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/ListOfAchivments.php [ 25 ] in :
2013-09-08 09:02:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-08 09:39:47 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant length - assumed 'length' ~ APPPATH/views/ListOfCategories.php [ 11 ] in /media/share/whatToDo/application/views/ListOfCategories.php:11
2013-09-08 09:39:47 --- DEBUG: #0 /media/share/whatToDo/application/views/ListOfCategories.php(11): Kohana_Core::error_handler(8, 'Use of undefine...', '/media/share/wh...', 11, Array)
#1 /media/share/whatToDo/system/classes/Kohana/View.php(61): include('/media/share/wh...')
#2 /media/share/whatToDo/system/classes/Kohana/View.php(348): Kohana_View::capture('/media/share/wh...', Array)
#3 /media/share/whatToDo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /media/share/whatToDo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_ListOfCategories))
#7 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#10 {main} in /media/share/whatToDo/application/views/ListOfCategories.php:11
2013-09-08 10:16:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Achivment' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-09-08 10:16:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-08 11:13:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: achivmentINFO ~ APPPATH/classes/Controller/MyAchivments.php [ 20 ] in /media/share/whatToDo/application/classes/Controller/MyAchivments.php:20
2013-09-08 11:13:14 --- DEBUG: #0 /media/share/whatToDo/application/classes/Controller/MyAchivments.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/share/wh...', 20, Array)
#1 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_MyAchivments->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_MyAchivments))
#4 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#7 {main} in /media/share/whatToDo/application/classes/Controller/MyAchivments.php:20
2013-09-08 11:27:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_MyAchivments' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in :
2013-09-08 11:27:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :