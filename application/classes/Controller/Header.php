<?php defined('SYSPATH') or die('No direct script access.');

if(Request::initial() === Request::current())
    Request::initial()->redirect(URL::base());

class Controller_Header extends Controller_Common{
       
        public $template = 'header';
        
        public function action_index()
        {
            $content = View::factory('header');
            $this->template->content = $content;
            //$this->template->var = $var;
        }
}
?>
