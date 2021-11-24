<?php
    
    require_once('models/DbModel.php');
    class UserModel extends DbModel 
    {
        public function login($username, $password)
        {
            $con = parent::connect();
            $sql = "SELECT * FROM `user` WHERE username = "'.$username.'" and password = "'.$password.'" ';
            return $result = $con->query($sql);
        }
    }

?>