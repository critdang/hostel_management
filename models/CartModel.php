<?php
    
    require_once('models/DbModel.php');
    class CartModel extends DbModel 
    {
        public function getCart($cart_id)
        {
            $con = parent::connect();
            $carts = $con -> query("SELECT tbl_room.* FROM tbl_cart,tbl_room WHERE  cart_id='$cart_id' AND tbl_cart.room_id=tbl_room.room_id ");

            $rooms = array();
            if($carts->num_rows>0) {
                // Trả về từng room
                while($room = mysqli_fetch_array($carts)) {
                    // lưu ptu vào posts
                    $rooms[] = $room;
                }
            }
            // bước 5 trả về controller
            return $rooms;

        }
      }
?>