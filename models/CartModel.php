<?php
require_once('models/DbModel.php');
class CartModel extends DbModel
{
  public function getCart($user_id)
  {
    $con = parent::connect();
    $carts = $con->query("SELECT * FROM tbl_cart,tbl_room WHERE  user_id='$user_id' AND tbl_cart.room_id=tbl_room.room_id AND YEAR(tbl_cart.checkin)=2000");

    $rooms = array();
    if ($carts->num_rows > 0) {
      // Trả về từng room
      while ($room = mysqli_fetch_array($carts)) {
        // lưu ptu vào posts
        $rooms[] = $room;
      }
    }
    // bước 5 trả về controller
    return $rooms;
  }
  public function updateCart()
  {
    if (isset($_POST['updateCart'])) {
      $checkin = $_POST['checkin'];
      $checkout = $_POST['checkout'];
      $rooms = $_POST['rooms'];
      $adults = $_POST['adults'];
      $children = $_POST['children'];
      $cart_id = $_POST['cart_id'];
      $user_id = $_POST['user_id'];

      //update the cart by the cart_id
      $con = parent::connect();
      $carts = $con->query("UPDATE tbl_cart SET  checkin='$checkin',checkout='$checkout',rooms='$rooms',adults='$adults',children='$children' WHERE cart_id='$cart_id'");
      // header('Location:index.php');
      echo("<script>location.href = '?manage=checkout';</script>");
    }
  }
}
