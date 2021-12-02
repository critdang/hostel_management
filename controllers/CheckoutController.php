<?php 
  class CheckoutController
  {
    public function getCheckout($user_id) {
      require_once('models/CheckoutModel.php');
      $checkoutModel = new CheckoutModel();
      $rooms = $checkoutModel->getCheckout($user_id);
      // kiem tra dorms
      require_once('views/CheckoutView.php');
      $checkoutView = new CheckoutView();
      $checkoutView -> showAllRoom($rooms);
    }
  } 
$temp = (new CheckoutController())->getCheckout($_SESSION['session_id']);
?>