<?php
    class CheckoutModel {
        public function getCheckout($user_id)
        {
            
            $con = new mysqli("localhost","root","","hostel");
            
            // Check connection
            if ($con -> connect_errno) {
                echo "Failed to connect to MySQL: " . $con -> connect_error;
            }
        //    tạo ra các con trỏ
            $result = $con -> query("SELECT *,ABS(DATEDIFF(checkin,checkout)*room_price*(1+adults*0.2+children*0.1)) AS price, (SELECT price) *0.1 AS tax, (SELECT price)+(SELECT tax) AS total, CONCAT(MONTHNAME(checkin),' ',DAY(checkin),',',YEAR(checkin)) AS check_in_day, CONCAT(MONTHNAME(checkout),' ',DAY(checkout),',',YEAR(checkout)) AS check_out_day FROM tbl_cart,tbl_room WHERE  user_id='0' AND tbl_cart.room_id=tbl_room.room_id");

            $rooms = array();

            if($result->num_rows>0) {
                // Trả về từng dorm
                while($room = mysqli_fetch_array($result)) {
                    // lưu ptu vào posts
                    $rooms[] = $room;
                }
            }
            // bước 5 trả về controller
            return $rooms;
        }
        public function getTotal($rooms)
        {
          $total=0;
          foreach ($rooms as $room) {
            $total+=$room['total'];
          }
          return $total;
        }
    }
    // Kiem tra
    // $dorms = (new DormModel()) -> getDorm();
    // foreach ($dorms as $dorm) {
    //     print_r($dorm);
    // }
?>