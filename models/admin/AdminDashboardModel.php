<?php
    // require_once('../models/DbModel.php');
    class AdminDashBoardModel 
    {
        public function getAllProduct()
        {
            
            $con = new mysqli("localhost","root","","hostel");
            
            // Check connection
            if ($con -> connect_errno) {
                echo "Failed to connect to MySQL: " . $con -> connect_error;
            }
        //    tạo ra các con trỏ
            $result = $con -> query("SELECT * FROM tbl_room,tbl_category WHERE tbl_room.category_id=tbl_category.category_id");

            $products = array();

            if($result->num_rows>0) {
                // Trả về từng room
                while($product = mysqli_fetch_array($result)) {
                    // lưu ptu vào posts
                    $products[] = $product;
                }
            }
            // bước 5 trả về controller
            return $products;
        }

        public function getAllOrder() {
            $con = new mysqli("localhost","root","","hostel");
            
            // Check connection
            if ($con -> connect_errno) {
                echo "Failed to connect to MySQL: " . $con -> connect_error;
            }
        //    tạo ra các con trỏ
            $result = $con -> query("SELECT * FROM tbl_room,tbl_category WHERE tbl_room.category_id=tbl_category.category_id");

            $orders = array();

            if($result->num_rows>0) {
                // Trả về từng room
                while($order = mysqli_fetch_array($result)) {
                    // lưu ptu vào posts
                    $orders[] = $order;
                }
            }
            // bước 5 trả về controller
            return $orders;

        }
    }

?>