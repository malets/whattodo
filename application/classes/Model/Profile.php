<?php
defined('SYSPATH') or die('No direct script access.');
 
class Model_Profile extends Model
{
    protected $_tableAchivments = 'achivments';
    protected $_tableCategories = 'categories';
    protected $_tableUserInfo = 'userInfo';

    public function get_achivments($user_id){
        $categoriesQ = DB::select()
            ->from($this->_tableAchivments)
            ->where('UserID','=',$user_id)
            ->execute();
        
        $result = $categoriesQ->as_array();
 
            if($result)
                return $result;
            else
                return array();
    }
    
     public function get_all_categories(){
        $categoriesQ = DB::select()
            ->from($this->_tableCategories)
            ->execute();
        
        $result = $categoriesQ->as_array();
 
            if($result)
                return $result;
            else
                return array();
    }
    
    public function edit_profile($values){
         $result = DB::update($this->_tableUserInfo)
                 ->set($values)
                 ->where('userID','=', $values['userID'])
                 ->execute();
         
             return $result;
             
         
    }
}
?>