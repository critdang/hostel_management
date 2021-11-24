<?php 

    require_once('models/UserModel.php');
    class UserController
    {
        public function getUser() {
            $username = isset($_GET['username'])? $_GET['username']: '';
            $password = isset($_GET['password'])? $_GET['password']: '';
            if($password != '' && $username != '') {
                $usermodel = new UserModel();
                $user = $usermodel -> login($username, $password);
                if($user) {
                    echo "dang nhap ok";
                }else{
                    require_once('views/Login.php');
                    
                    echo"sai tai khoan";
                }
            }else {
                require_once('views/Login.php');
            }
        }
    }
?>