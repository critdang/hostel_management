<?php
    
    require_once('models/DbModel.php');
    class UserModel extends DbModel 
    {
        // public function login($username, $password)
        // {
        //     $con = parent::connect();
        //     $sql = 'SELECT * FROM `user` WHERE username = "'.$username.'" and password = "'.$password.'" ';
        //     $result = $con -> query($sql);
        //     return $user = mysqli_fetch_assoc($result);
        // }
        public function checkUser($username, $password)
        {
            $con = parent::connect();
            $sql = mysqli_query($con,"SELECT * FROM `user` WHERE username = '$username' and passsword = '$passsword'");
        }
    }

?>