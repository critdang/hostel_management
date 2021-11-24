<?php 

    require_once('models/UserModel.php');
    class UserController
    {
        public $model;

        public function __construct() {
            $this -> model = new UserModel();
        }
        public function getUser() {
            if(!isset($_GET['user']))
            {
                $user = $this -> model -> getUser('list');
                include 'views/UserInfo.php';
            }else {
                $user = $this -> model -> getUser($_GET['username']);
                include 'views/UserInfo.php';
            }

            // $username = isset($_GET['username'])? $_GET['username']: '';
            // $password = isset($_GET['password'])? $_GET['password']: '';
            // if($password != '' && $username != '') {
            //     $usermodel = new UserModel();
            //     $user = $usermodel -> login($username, $password);
            //     if($user) {
            //         echo "dang nhap ok";
            //     }else{
            //         require_once('views/Login.php');
                    
            //         echo"sai tai khoan";
            //     }
            // }else {
            //     require_once('views/Login.php');
            // }
        }
    }
?>