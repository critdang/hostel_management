<?php

$con = new mysqli("localhost","root","","hostel");

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}
/* check if server is alive */
if ($con->ping()) {
  printf ("Our connection is ok!\n");
} else {
  printf ("Error: %s\n", $con->error);
}
// Change character set to utf8
$con -> set_charset("utf8");

// $con -> close(); xóa
?>