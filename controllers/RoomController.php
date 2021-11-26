<?php
    class RoomController
    {
        public function getRoom() {
            require_once('./models/RoomModel.php');
            $roomModel = new RoomModel();
            // Lưu lại giá trị được trả về bằng mảng
            $rooms = $roomModel-> getRoom();
            
            // in giá trị posts để test
            // print_r($posts);

            require_once('views/RoomView.php');
            $roomView = new RoomView();
            $roomView -> showAllRoom($rooms);
        }
        public function addRoom() {
            
        }
    }

?>