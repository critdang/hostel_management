<?php
    
    require_once('models/DbModel.php');
    class UserModel extends DbModel 
    {
        public function login($username, $password)
        {
            $con = parent::connect();
            $sql = 'SELECT * FROM `user` WHERE username = "'.$username.'" and password = "'.$password.'" ';
            $result = $con -> query($sql);
            return $user = mysqli_fetch_assoc($result);
        }
        public function getUser($username)
        {
            $con = parent::connect();
            if($username) {
                $sql = 'SELECT * FROM `user` WHERE username = "'$username'"';
                return $ten = mysqli_fetch_assoc($sql);
            }else{
                $sql = 'SELECT * FROM `user`';
                return $ten = mysqli_fetch_assoc($sql);
            }
        }
    }

?>