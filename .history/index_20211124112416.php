<?php
    // $controller = isset($_GET['controller'])? $_GET['controller'].'Controller' : 'UserController';
    $action = isset($_GET['action']) ? $_GET['action'] : 'getUser';

    include_once('controllers/UserController.php');
    if(isset(include_once('controllers/UserController.php'){
        echo 'ok';
    }
    $usercontroller = new UserController();
    $usercontroller-> $action();
?>