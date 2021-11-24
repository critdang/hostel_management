<?php 

    require_once('models/UserModel.php');
    class UserController
    {
        public function getUser() {
            $username = isset($_POST['username'])? $_POST['username']: '';
            $password = isset($_POST['password'])? $_POST['password']: '';
            if($password != '' && $username != '') {
                $usermodel = new UserModel();
                $result = $usermodel -> login($username, $password);
                if($result) {
                    echo "dang nhap ok"
                }else{
                    require_once('views/Login.php');
                    echo"sai tai khoan"
                }
            }else {
                require_once('views/Login.php');
            }
        }
    }
?>