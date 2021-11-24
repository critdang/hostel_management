<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    // $controller = isset($_GET['controller'])? $_GET['controller'].'Controller' : 'UserController';
    $action = isset($_GET['action']) ? $_GET['action'] : 'getUser';

    require_once('controllers/UserController.php');
  
    $usercontroller = new UserController();
    $usercontroller-> $action();
?>