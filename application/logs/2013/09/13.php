<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-13 08:08:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/Login.php [ 1 ] in /media/share/whatToDo/application/views/Login.php:1
2013-09-13 08:08:33 --- DEBUG: #0 /media/share/whatToDo/application/views/Login.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/share/wh...', 1, Array)
#1 /media/share/whatToDo/system/classes/Kohana/View.php(61): include('/media/share/wh...')
#2 /media/share/whatToDo/system/classes/Kohana/View.php(348): Kohana_View::capture('/media/share/wh...', Array)
#3 /media/share/whatToDo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /media/share/whatToDo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#10 {main} in /media/share/whatToDo/application/views/Login.php:1
2013-09-13 08:47:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/Login.php [ 1 ] in /media/share/whatToDo/application/views/Login.php:1
2013-09-13 08:47:44 --- DEBUG: #0 /media/share/whatToDo/application/views/Login.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/share/wh...', 1, Array)
#1 /media/share/whatToDo/system/classes/Kohana/View.php(61): include('/media/share/wh...')
#2 /media/share/whatToDo/system/classes/Kohana/View.php(348): Kohana_View::capture('/media/share/wh...', Array)
#3 /media/share/whatToDo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /media/share/whatToDo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#10 {main} in /media/share/whatToDo/application/views/Login.php:1
2013-09-13 08:49:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/Controller/Login.php [ 90 ] in :
2013-09-13 08:49:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-13 08:52:35 --- EMERGENCY: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT * FROM `unactiveUsers` WHERE `userID` = ('5', '', '123ewq', 'mm@ll.ru', '0', '0', '0', '0') AND `CODE` = 'bkugkughkuglo' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php:251
2013-09-13 08:52:35 --- DEBUG: #0 /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /media/share/whatToDo/application/classes/Model/Login.php(39): Kohana_Database_Query->execute()
#2 /media/share/whatToDo/application/classes/Controller/Login.php(95): Model_Login->activation('mm@ll.ru', 'bkugkughkuglo')
#3 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_Login->action_registration_check()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#9 {main} in /media/share/whatToDo/modules/database/classes/Kohana/Database/Query.php:251
2013-09-13 08:53:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: ID ~ APPPATH/classes/Model/Login.php [ 33 ] in /media/share/whatToDo/application/classes/Model/Login.php:33
2013-09-13 08:53:36 --- DEBUG: #0 /media/share/whatToDo/application/classes/Model/Login.php(33): Kohana_Core::error_handler(8, 'Undefined index...', '/media/share/wh...', 33, Array)
#1 /media/share/whatToDo/application/classes/Controller/Login.php(95): Model_Login->activation('mm@ll.ru', 'bkugkughkuglo')
#2 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_Login->action_registration_check()
#3 [internal function]: Kohana_Controller->execute()
#4 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#8 {main} in /media/share/whatToDo/application/classes/Model/Login.php:33
2013-09-13 08:53:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: ID ~ APPPATH/classes/Model/Login.php [ 34 ] in /media/share/whatToDo/application/classes/Model/Login.php:34
2013-09-13 08:53:57 --- DEBUG: #0 /media/share/whatToDo/application/classes/Model/Login.php(34): Kohana_Core::error_handler(8, 'Undefined index...', '/media/share/wh...', 34, Array)
#1 /media/share/whatToDo/application/classes/Controller/Login.php(95): Model_Login->activation('mm@ll.ru', 'bkugkughkuglo')
#2 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_Login->action_registration_check()
#3 [internal function]: Kohana_Controller->execute()
#4 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#8 {main} in /media/share/whatToDo/application/classes/Model/Login.php:34
2013-09-13 08:54:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: UserID ~ APPPATH/classes/Model/Login.php [ 53 ] in /media/share/whatToDo/application/classes/Model/Login.php:53
2013-09-13 08:54:19 --- DEBUG: #0 /media/share/whatToDo/application/classes/Model/Login.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/share/wh...', 53, Array)
#1 /media/share/whatToDo/application/classes/Controller/Login.php(95): Model_Login->activation('mm@ll.ru', 'bkugkughkuglo')
#2 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_Login->action_registration_check()
#3 [internal function]: Kohana_Controller->execute()
#4 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#8 {main} in /media/share/whatToDo/application/classes/Model/Login.php:53
2013-09-13 09:04:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/Login.php [ 1 ] in /media/share/whatToDo/application/views/Login.php:1
2013-09-13 09:04:57 --- DEBUG: #0 /media/share/whatToDo/application/views/Login.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/share/wh...', 1, Array)
#1 /media/share/whatToDo/system/classes/Kohana/View.php(61): include('/media/share/wh...')
#2 /media/share/whatToDo/system/classes/Kohana/View.php(348): Kohana_View::capture('/media/share/wh...', Array)
#3 /media/share/whatToDo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /media/share/whatToDo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#10 {main} in /media/share/whatToDo/application/views/Login.php:1
2013-09-13 09:05:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/Login.php [ 1 ] in /media/share/whatToDo/application/views/Login.php:1
2013-09-13 09:05:29 --- DEBUG: #0 /media/share/whatToDo/application/views/Login.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/share/wh...', 1, Array)
#1 /media/share/whatToDo/system/classes/Kohana/View.php(61): include('/media/share/wh...')
#2 /media/share/whatToDo/system/classes/Kohana/View.php(348): Kohana_View::capture('/media/share/wh...', Array)
#3 /media/share/whatToDo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /media/share/whatToDo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#10 {main} in /media/share/whatToDo/application/views/Login.php:1
2013-09-13 09:15:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/Controller/Error.php [ 4 ] in :
2013-09-13 09:15:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-13 09:15:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/Controller/Error.php [ 4 ] in :
2013-09-13 09:15:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-13 10:02:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/header.php [ 5 ] in /media/share/whatToDo/application/views/header.php:5
2013-09-13 10:02:57 --- DEBUG: #0 /media/share/whatToDo/application/views/header.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/share/wh...', 5, Array)
#1 /media/share/whatToDo/system/classes/Kohana/View.php(61): include('/media/share/wh...')
#2 /media/share/whatToDo/system/classes/Kohana/View.php(348): Kohana_View::capture('/media/share/wh...', Array)
#3 /media/share/whatToDo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /media/share/whatToDo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Header))
#7 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /media/share/whatToDo/application/classes/Controller/Login.php(11): Kohana_Request->execute()
#10 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#13 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#16 {main} in /media/share/whatToDo/application/views/header.php:5
2013-09-13 11:30:12 --- EMERGENCY: Kohana_Exception [ 0 ]: The ID property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /media/share/whatToDo/modules/orm/classes/Kohana/ORM.php:600
2013-09-13 11:30:12 --- DEBUG: #0 /media/share/whatToDo/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('ID')
#1 /media/share/whatToDo/application/classes/Controller/Achivment.php(29): Kohana_ORM->__get('ID')
#2 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_Achivment->action_add_goal()
#3 [internal function]: Kohana_Controller->execute()
#4 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Achivment))
#5 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#8 {main} in /media/share/whatToDo/modules/orm/classes/Kohana/ORM.php:600
2013-09-13 11:31:04 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 3 for Model_Achivment::add_goal(), called in /media/share/whatToDo/application/classes/Controller/Achivment.php on line 30 and defined ~ APPPATH/classes/Model/Achivment.php [ 22 ] in /media/share/whatToDo/application/classes/Model/Achivment.php:22
2013-09-13 11:31:04 --- DEBUG: #0 /media/share/whatToDo/application/classes/Model/Achivment.php(22): Kohana_Core::error_handler(2, 'Missing argumen...', '/media/share/wh...', 22, Array)
#1 /media/share/whatToDo/application/classes/Controller/Achivment.php(30): Model_Achivment->add_goal('te4est', 'ge')
#2 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_Achivment->action_add_goal()
#3 [internal function]: Kohana_Controller->execute()
#4 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Achivment))
#5 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#8 {main} in /media/share/whatToDo/application/classes/Model/Achivment.php:22
2013-09-13 11:31:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/Achivment.php [ 1 ] in /media/share/whatToDo/application/views/Achivment.php:1
2013-09-13 11:31:33 --- DEBUG: #0 /media/share/whatToDo/application/views/Achivment.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/share/wh...', 1, Array)
#1 /media/share/whatToDo/system/classes/Kohana/View.php(61): include('/media/share/wh...')
#2 /media/share/whatToDo/system/classes/Kohana/View.php(348): Kohana_View::capture('/media/share/wh...', Array)
#3 /media/share/whatToDo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /media/share/whatToDo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Achivment))
#7 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#10 {main} in /media/share/whatToDo/application/views/Achivment.php:1
2013-09-13 11:33:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/Achivment.php [ 1 ] in /media/share/whatToDo/application/views/Achivment.php:1
2013-09-13 11:33:37 --- DEBUG: #0 /media/share/whatToDo/application/views/Achivment.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/share/wh...', 1, Array)
#1 /media/share/whatToDo/system/classes/Kohana/View.php(61): include('/media/share/wh...')
#2 /media/share/whatToDo/system/classes/Kohana/View.php(348): Kohana_View::capture('/media/share/wh...', Array)
#3 /media/share/whatToDo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /media/share/whatToDo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Achivment))
#7 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#10 {main} in /media/share/whatToDo/application/views/Achivment.php:1