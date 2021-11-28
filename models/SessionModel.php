<?php if(isset($_SESSION['login'])){
  $_SESSION['session_id']=$_SESSION['user_id'];
} 
else {
  $_SESSION['session_id']=0;
}
?>