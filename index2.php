<?php
    $action = $_GET['action'];
    require_once('controllers/RoomController.php');

    $roomController = new RoomController();
    // Điều hướng bằng truyền query paramater
    if($action =='list') {
        $roomController-> getRoom();
    }
    if($action =='add') {
        $roomController-> addRoom();
    }

?>

