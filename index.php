<?php
    include_once('models/DbModel.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel</title>
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/grid_raw.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="app">
        <?php
        require_once('models/DbModel.php');
        include('include/topbar.php');
        // slider
        if(isset($_GET['manage'])){
            $page = $_GET['manage'];
        }else{
            $page ='';
        }
        if($page=='about') {
            include('include/about.php');
        }elseif($page=='location') {
            include('include/location.php');
        }elseif($page=='activities') {
            include('include/activities.php');
        }elseif($page=='dorm') {
            include('controllers/DormController.php');
        }elseif($page=='detail') {
            include('include/detail.php');
        } 
        else{
            // home
            include('include/slider.php');
            include('controllers/RoomController.php');
        }
        // footer
        include('include/footer.php');
        ?>
    </div>

    <script src="./js/slider.js"></script>
    <script type="text/javascript">
            window.addEventListener("scroll",function() { 
            var navbar = document.querySelector("header");
            var sticky = navbar.offsetTop;
            var a = window.pageYOffset;
            navbar.classList.toggle("sticky",window.scrollY>0)
        })
    </script>
</body>

</html>