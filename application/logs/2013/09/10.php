<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-10 12:33:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/Login.php [ 1 ] in /media/share/whatToDo/application/views/Login.php:1
2013-09-10 12:33:20 --- DEBUG: #0 /media/share/whatToDo/application/views/Login.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/share/wh...', 1, Array)
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
2013-09-10 12:34:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/Login.php [ 1 ] in /media/share/whatToDo/application/views/Login.php:1
2013-09-10 12:34:10 --- DEBUG: #0 /media/share/whatToDo/application/views/Login.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/share/wh...', 1, Array)
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
2013-09-10 12:37:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/Login.php [ 1 ] in /media/share/whatToDo/application/views/Login.php:1
2013-09-10 12:37:28 --- DEBUG: #0 /media/share/whatToDo/application/views/Login.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/share/wh...', 1, Array)
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
2013-09-10 12:56:23 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Common ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /media/share/whatToDo/system/classes/Kohana/Request/Client.php:114
2013-09-10 12:56:23 --- DEBUG: #0 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#2 /media/share/whatToDo/application/classes/Controller/Achivment.php(10): Kohana_Request->execute()
#3 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_Achivment->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Achivment))
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#9 {main} in /media/share/whatToDo/system/classes/Kohana/Request/Client.php:114
2013-09-10 12:56:55 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Common ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /media/share/whatToDo/system/classes/Kohana/Request/Client.php:114
2013-09-10 12:56:55 --- DEBUG: #0 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#2 /media/share/whatToDo/application/classes/Controller/Achivment.php(10): Kohana_Request->execute()
#3 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_Achivment->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Achivment))
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#9 {main} in /media/share/whatToDo/system/classes/Kohana/Request/Client.php:114
2013-09-10 12:57:33 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Common ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /media/share/whatToDo/system/classes/Kohana/Request/Client.php:114
2013-09-10 12:57:33 --- DEBUG: #0 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#2 /media/share/whatToDo/application/classes/Controller/Achivment.php(10): Kohana_Request->execute()
#3 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_Achivment->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Achivment))
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#9 {main} in /media/share/whatToDo/system/classes/Kohana/Request/Client.php:114
2013-09-10 12:58:11 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Common ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /media/share/whatToDo/system/classes/Kohana/Request/Client.php:114
2013-09-10 12:58:11 --- DEBUG: #0 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#2 /media/share/whatToDo/application/classes/Controller/Achivment.php(10): Kohana_Request->execute()
#3 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_Achivment->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Achivment))
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#9 {main} in /media/share/whatToDo/system/classes/Kohana/Request/Client.php:114
2013-09-10 12:58:17 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Common ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /media/share/whatToDo/system/classes/Kohana/Request/Client.php:114
2013-09-10 12:58:17 --- DEBUG: #0 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#2 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#3 {main} in /media/share/whatToDo/system/classes/Kohana/Request/Client.php:114
2013-09-10 13:00:11 --- EMERGENCY: ErrorException [ 1 ]: Call to private method Controller_Login::action_isLogin() from context 'Kohana_Controller' ~ SYSPATH/classes/Kohana/Controller.php [ 84 ] in :
2013-09-10 13:00:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-10 13:00:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/Login.php [ 1 ] in /media/share/whatToDo/application/views/Login.php:1
2013-09-10 13:00:35 --- DEBUG: #0 /media/share/whatToDo/application/views/Login.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/share/wh...', 1, Array)
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
2013-09-10 13:01:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/Login.php [ 1 ] in /media/share/whatToDo/application/views/Login.php:1
2013-09-10 13:01:29 --- DEBUG: #0 /media/share/whatToDo/application/views/Login.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/share/wh...', 1, Array)
#1 /media/share/whatToDo/system/classes/Kohana/View.php(61): include('/media/share/wh...')
#2 /media/share/whatToDo/system/classes/Kohana/View.php(348): Kohana_View::capture('/media/share/wh...', Array)
#3 /media/share/whatToDo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /media/share/whatToDo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /media/share/whatToDo/application/classes/Controller/Achivment.php(10): Kohana_Request->execute()
#10 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_Achivment->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Achivment))
#13 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#16 {main} in /media/share/whatToDo/application/views/Login.php:1
2013-09-10 13:01:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/Login.php [ 1 ] in /media/share/whatToDo/application/views/Login.php:1
2013-09-10 13:01:50 --- DEBUG: #0 /media/share/whatToDo/application/views/Login.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/share/wh...', 1, Array)
#1 /media/share/whatToDo/system/classes/Kohana/View.php(61): include('/media/share/wh...')
#2 /media/share/whatToDo/system/classes/Kohana/View.php(348): Kohana_View::capture('/media/share/wh...', Array)
#3 /media/share/whatToDo/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /media/share/whatToDo/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /media/share/whatToDo/application/classes/Controller/Achivment.php(10): Kohana_Request->execute()
#10 /media/share/whatToDo/system/classes/Kohana/Controller.php(84): Controller_Achivment->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 /media/share/whatToDo/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Achivment))
#13 /media/share/whatToDo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /media/share/whatToDo/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /media/share/whatToDo/index.php(118): Kohana_Request->execute()
#16 {main} in /media/share/whatToDo/application/views/Login.php:1