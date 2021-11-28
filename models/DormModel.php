<?php
    class DormModel {
        public function getDorm()
        {
            
            $con = new mysqli("localhost","root","","hostel");
            
            // Check connection
            if ($con -> connect_errno) {
                echo "Failed to connect to MySQL: " . $con -> connect_error;
            }
        //    tạo ra các con trỏ
            $result = $con -> query("SELECT * FROM `tbl_room`");

            $dorms = array();

            if($result->num_rows>0) {
                // Trả về từng dorm
                while($dorm = mysqli_fetch_array($result)) {
                    // lưu ptu vào posts
                    $dorms[] = $dorm;
                }
            }
            // bước 5 trả về controller
            return $dorms;
        }
    }
    // Kiem tra
    // $dorms = (new DormModel()) -> getDorm();
    // foreach ($dorms as $dorm) {
    //     print_r($dorm);
    // }
?>