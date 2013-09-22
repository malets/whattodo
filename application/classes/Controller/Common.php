<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class Controller_Common extends Controller_Template {

       public $template = 'common';
        
	public function before()
	{
            parent::before();
            
            $this->template->styles = array('style', 'smoothness/jquery-ui-1.10.3.custom');
            $this->template->js = array('jquery-ui-1.10.3.custom/js/jquery-1.9.1', 'jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min');
	}
}
?>
