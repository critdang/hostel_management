<?php
    require_once('models/UserModel.php');
    class UserController
    {
        public $model;

        public function __construct() {
            $this -> model = new UserModel();
        }
        public function getUser() {
            if(!isset($_POST['user']))
            {
                $user = $this -> model -> getUser('list');
                include 'views/UserInfo.php';
            }else {
                $user = $this -> model -> getUser($_GET['username']);
                include 'views/UserInfo.php';
            }
        }
    }
?>