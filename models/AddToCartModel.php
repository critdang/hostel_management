<?php 
  class AddToCart extends DbModel 
  {
      public function addToCart($cart_id,$room_id)
      {
          $con = parent::connect();
          $cart_insert = mysqli_query($con,"INSERT INTO tbl_cart(cart_id,room_id) values ($cart_id,$room_id)");
          return $cart_insert;

      }
    }
?>