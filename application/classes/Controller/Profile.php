<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Profile extends Controller_CommonAuthorized {
    
    public $template = 'Profile';
    public $model = 'Profile';

	public function action_index()
	{     
                $header_url = 'header/';
                $header = Request::factory($header_url)->execute();
                
		$content = View::factory('Profile');
 
                $userID = Auth::instance()->get_user()->id;
                $achivments = Model::factory($this->model)->get_achivments($userID);
                $categories = Model::factory($this->model)->get_all_categories();
                $profileValues = Model::factory($this->model)->get_profile($userID);
                $userPhotos = Model::factory($this->model)->get_user_photos($userID);
                
                $bDate = new DateTime($profileValues['Birthdate']);
                $today = new DateTime('00:00:00');
                $profileValues['Age'] = $today->diff($bDate)->y;
                
                $this->template->content = $content;
                $this->template->header = $header;
                $this->template->achivments = $achivments;
                $this->template->categories = $categories;
                $this->template->profileValues = $profileValues;
                $this->template->userPhotos = $userPhotos;
	}

}
