<?php
    require_once('../models/UserModel.php');
    class UserController
    {
        public $model;

        public function __construct() {
            $this -> model = new UserModel();
        }
        public function getUser() {
            if(!isset($_POST['username'])&&!isset($_POST['password']))
            {
                echo `<h1> Nhập đi bố </h1>`;
            }else {
                $user = $this -> model -> getUser($_POST['username'],$_POST['password']);
                if($user!==null) {
                    include '../views/UserInfo.php';
                }
                else{
                    header("../login.php");
                }
            }
        }
    }
    $usercontroller = new UserController();
    $usercontroller-> getUser();
?>