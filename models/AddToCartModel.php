<?php 
  class AddToCart extends DbModel 
  {
      public function addToCart($user_id,$room_id)
      {
          $con = parent::connect();
          $cart_insert = mysqli_query($con,"INSERT INTO tbl_cart(user_id,room_id) values ($user_id,$room_id)");
          return $cart_insert;

      }
    }
?>