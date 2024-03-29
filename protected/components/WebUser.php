<?php
 
// this file must be stored in:
// protected/components/WebUser.php
 
class WebUser extends CWebUser {
 
  // Store model to not repeat query.
  private $_model;
 
  // Return first name.
  // access it by Yii::app()->user->first_name
//  function getFirst_Name(){
//    $user = $this->loadUser(Yii::app()->user->id);
//    return $user->username;
//  }
 
  // This is a function that checks the field 'role'
  // in the User model to be equal to 1, that means it's admin
  // access it by Yii::app()->user->isAdmin()
   public function getisAdmin(){
        $user = $this->loadUser(Yii::app()->user->id);
        if ($user)
           return $user->role=='Admin';
        return false;
    }
    
    public function getisKasir(){
            $user = $this->loadUser(Yii::app()->user->id);
            if ($user)
               return $user->role=='Kasir';
            return false;
        }

        public function getisPelanggan(){
            $user = $this->loadUser(Yii::app()->user->id);
            if ($user)
               return $user->role=='Pelanggan';
            return false;
        }


 
  // Load user model.
  protected function loadUser($id=null)
    {
        if($this->_model===null)
        {
            if($id!==null)
                $this->_model= User::model()->findByPk($id);
        }
        return $this->_model;
    }
}
?>