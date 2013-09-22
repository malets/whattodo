<?php
defined('SYSPATH') or die('No direct script access.');
 
class Model_Login extends Model
{
    protected $_tableUsers = 'users';
    protected $_tableUnactiveUsers = 'unactiveUsers';
    protected $_tableUserRole = 'roles_users';
    protected $_tableUserInfo = 'userInfo';



    public function add_user($email, $pass, $activationCode){
        DB::insert($this->_tableUsers, array('username', 'email', 'password'))
                ->values(array($email, $email, $pass))
                ->execute();
        
        $id = mysql_insert_id();
        
        DB::insert($this->_tableUnactiveUsers, array('userID', 'CODE'))
                ->values(array($id, $activationCode))
                ->execute();

    }
    
    public function activation($email, $code){
         $userIDq = DB::select()
                 ->from($this->_tableUsers)
                 ->where('email', '=', $email)
                 ->execute();
         
         $userID = $userIDq->as_array();
         
         if(!$userID)
             return 'Пользователь с email '+$email+' не был найден в базе';
         
         $userID = $userID[0]['id'];

         $activateUser = DB::select()
            ->from($this->_tableUnactiveUsers)
            ->where('userID','=',$userID)
            ->and_where('CODE', '=', $code)
            ->execute();
         
        $result = $activateUser->as_array();
        
        if(!$result)
            return 'Пользователь с email '+$email+' был удалён до того, как активировал свою запись';
        
        DB::delete($this->_tableUnactiveUsers)
            ->where('userID','=',$userID)
            ->and_where('CODE', '=', $code)
            ->execute();
        
        DB::update($this->_tableUsers)
                ->set(array('activate'=>true))
                ->where('id', '=', $userID)
                ->execute();
				
        DB::insert($this->_tableUserRole, array('user_id', 'role_id'))
                        ->values(array($userID, '1'))
                        ->execute();
        
        DB::insert($this->_tableUserInfo, array('userID'))
                ->values(array($userID))
                ->execute();
		
        
        return true;
    }
}
?>
