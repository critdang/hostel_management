<?php
    
    require_once('models/DbModel.php');
    class UserModel extends DbModel 
    {
        public function connect()
        {
            $con = $this -> connect();

        }
    }
    $UserModel1 = new UserModel();
    $UserModel1 -> connect();
?>