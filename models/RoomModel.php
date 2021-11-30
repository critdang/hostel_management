<?php
    // require_once('../models/DbModel.php');
    class RoomModel 
    {
        public function getRoom()
        {
            
            $con = new mysqli("localhost","root","","hostel");
            
            // Check connection
            if ($con -> connect_errno) {
                echo "Failed to connect to MySQL: " . $con -> connect_error;
            }
        //    tạo ra các con trỏ
            $result = $con -> query("SELECT * FROM `tbl_room`");

            $rooms = array();

            if($result->num_rows>0) {
                // Trả về từng room
                while($room = mysqli_fetch_array($result)) {
                    // lưu ptu vào posts
                    $rooms[] = $room;
                }
            }
            // bước 5 trả về controller
            return $rooms;
        }
    }
    // $rooms = (new RoomModel()) -> getRoom(); 
    
    // foreach($rooms as $room) {
    //     print_r($room);
    // }
?>