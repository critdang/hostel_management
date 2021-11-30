<?php
    class CartController
    {
        public function getCart() {
          $user_id=$_SESSION['session_id'];
            if(isset($_GET['room'])){
              $room_id=$_GET['room'];
              require('models/AddToCartModel.php');
              $addToCart=(new AddToCart())->addToCart($user_id,$room_id);
            }
            require_once('models/CartModel.php');
            $CartModel = new CartModel();
            $CartModel->updateCart();
            $cart = $CartModel->getCart($user_id);
            // kiem tra dorms
            require_once('views/CartView.php');
            $cartView = new CartView();
            $cartView -> showCart($cart);
        }
    }
    $temp = (new CartController())->getCart();
?>