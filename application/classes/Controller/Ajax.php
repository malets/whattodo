<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller_CommonAuthorized {
    
    public $model = 'Achivment';
    public $profileModel = 'Profile';
    public $template = 'empty';
        
        public function action_add_goal(){
                $name = $this->request->post('name');
                $description = $this->request->post('description');
                $categoryID = $this->request->post('category');
                if(!$name || !$description || !$categoryID)
                    return;
                
                $userID = Auth::instance()->get_user()->id;
                Model::factory($this->model)->add_goal($name, $description, $categoryID, $userID);
        }
        
        public function action_achive_goal(){
                $goalID = $this->request->post('goalID');
                
                $content = View::factory('empty');
                $this->template->content = $content;
                
                $goalsUser = Model::factory($this->model)->get_goal_user($goalID);
                $currentUser = Auth::instance()->get_user()->id;
                
                if($goalsUser != $currentUser)
                {
                    $this->template->answer = '{"success": false, "errorMsg": "Пользователь пытается изменить чужую цель"}';
                    return;
                }
                
                $result = Model::factory($this->model)->achive_goal($goalID);
                
                
                if($result)                
                    $this->template->answer = '{"success": true}';
                else
                    $this->template->answer = '{"success": false, "errorMsg": "Не удалось перевести цель в достижение"}';
                
        }
        
        public function action_edit_profile(){
                $infoArray = Array();
                $infoArray['userID'] = Auth::instance()->get_user()->id;
                $infoArray['name'] = $this->request->post('userName');
                $infoArray['birthDate'] = $this->request->post('userBirthdate');
                $infoArray['City'] = $this->request->post('userCity');
                
                $result = Model::factory($this->profileModel)->edit_profile($infoArray);
                
                if($result)                
                    $this->template->answer = '{"success": true}';
                else
                    $this->template->answer = '{"success": false, "errorMsg": "Не удалось отредактировать профиль"}';
       
        }

}
