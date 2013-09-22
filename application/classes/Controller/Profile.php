<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Profile extends Controller_CommonAuthorized {
    
    public $template = 'Profile';
    public $model = 'Profile';
    public $TEST_USER_ID = 0;

	public function action_index()
	{     
                $header_url = 'header/';
                $header = Request::factory($header_url)->execute();
                
		$content = View::factory('Profile');
 
                $userID = Auth::instance()->get_user()->id;
                $achivments = Model::factory($this->model)->get_achivments($userID);
                $categories = Model::factory($this->model)->get_all_categories();
                
                $this->template->content = $content;
                $this->template->header = $header;
                $this->template->achivments = $achivments;
                $this->template->categories = $categories;
	}

}
