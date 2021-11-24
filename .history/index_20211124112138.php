<?php
    // $controller = isset($_GET['controller'])? $_GET['controller'].'Controller' : 'UserController';
    $action = isset($_GET['action']) ? $_GET['action'] : 'getUser';

    include_once('controllers/UserController.php');
    class UserController
    {
        public function getUser() {
            echo 'day la get user: ';
        }
    }
    $usercontroller = new UserController();
    $usercontroller-> $action();
?>