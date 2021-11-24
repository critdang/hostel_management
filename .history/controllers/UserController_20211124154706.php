<?php
    require_once('models/UserModel.php');
    class UserController
    {
        public $model;

        public function __construct() {
            $this -> model = new UserModel();
        }
        public function getUser() {
            if(!isset($_POST['username'])&&!isset($_POST['password']))
            {
                `<h1> Nhập đi bố </h1>`
                include 'views/UserInfo.php';
            }else {
                $user = $this -> model -> getUser($_GET['username']);
                include 'views/UserInfo.php';
            }
        }
    }
?>