<?php 
  $con = new mysqli("localhost","root","","hostel");
            
  // Check connection
  if ($con -> connect_errno) {
      echo "Failed to connect to MySQL: " . $con -> connect_error;
  }

  $user_id=$_SESSION['session_id'];
  $result = $con -> query("SELECT COUNT(cart_id) AS num FROM tbl_cart WHERE user_id='$user_id'");

  //number of cart
  $num = mysqli_fetch_array($result)['num'];
?>