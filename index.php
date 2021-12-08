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
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22256%22 height=%22256%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2220%22 fill=%22%23f3df05%22></rect><path fill=%22%23fff%22 d=%22M71.28 28.67L71.28 28.67Q71.28 29.93 70.52 30.83Q69.75 31.73 68.77 32.18L68.77 32.18Q66.42 30.56 63.28 29.12Q60.13 27.68 55.09 27.68L55.09 27.68Q50.95 27.68 47.44 29.12Q43.92 30.56 41.31 33.35Q38.70 36.14 37.22 40.37Q35.73 44.60 35.73 50.09L35.73 50.09Q35.73 55.67 37.17 59.81Q38.62 63.95 41.18 66.74Q43.75 69.53 47.34 70.92Q50.95 72.32 55.36 72.32L55.36 72.32Q60.03 72.32 63.50 71.02Q66.97 69.71 69.30 67.91L69.30 67.91Q70.20 68.27 71.02 69.22Q71.83 70.16 71.83 71.42L71.83 71.42Q71.83 73.31 69.67 74.84L69.67 74.84Q67.59 76.28 64.00 77.41Q60.39 78.53 54.81 78.53L54.81 78.53Q49.14 78.53 44.28 76.73Q39.42 74.93 35.87 71.38Q32.31 67.82 30.25 62.51Q28.18 57.20 28.18 50.09L28.18 50.09Q28.18 42.98 30.29 37.63Q32.41 32.27 36.01 28.67Q39.61 25.07 44.42 23.27Q49.23 21.47 54.55 21.47L54.55 21.47Q58.23 21.47 61.34 22.10Q64.44 22.73 66.65 23.77Q68.86 24.80 70.07 26.11Q71.28 27.41 71.28 28.67Z%22></path></svg>" />
</head>
<body>
    <div class="app">
        <?php
        require_once('models/DbModel.php');
        require_once('models/SessionModel.php');
        include('include/topbar.php');
        // slider
        if(isset($_GET['manage'])){
            $page = $_GET['manage'];
        }else{
            $page ='';
        }
        if($page!='checkout'){
            include('include/sticky_button.php');
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
            include('controllers/CartController.php');
        }elseif($page=='checkout') {
            include('controllers/CheckoutController.php');
            // include('include/Checkout.php');
        } 
        else{
            // home
            include('include/slider.php');
            include('controllers/RoomController.php');
        }
        
        // footer
        include('include/footer.php');
        if($page!='checkout'){        
            include('include/sticky-book_mobi.php');
        }

        ?>
    </div>
    <!-- Navbar -->
    <script src="./js/slider.js"></script>
    <script type="text/javascript">
            window.addEventListener("scroll",function() { 
            var navbar = document.querySelector("header");
            document.getElementsByClassName('book-btn-mobile');
            var sticky = navbar.offsetTop;
            var a = window.pageYOffset;
            console.log(window.scrollY);
            // navbar.classList.toggle("sticky",window.scrollY>0);
        })
    </script>

    <!-- dropdown -->
    <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    // function myFunction() {
    //     document.getElementById('checkout-dropdown').classList.toggle("show");
    // }
    // window.addEventListener("click",function() {
    //     var c = document.getElementsByClassName('dropbtn');
    //     for(var i=0; i<c.length; i++) {
    //     var a = document.getElementsByClassName('dropbtn')[i].dataset.index
    //     console.log(a);
    //     }
    // })
    // Close the dropdown if the user clicks outside of it
    // window.onclick = function(event) {
    // if (!event.target.matches('.dropbtn, .fas')) {
    //     var dropdowns = document.getElementsByClassName("dropdown-content");
    //     console.log(dropdowns);
    //     var i;
    //     for (i = 0; i < dropdowns.length; i++) {
    //     var openDropdown = dropdowns[i];
    //     var b = document.getElementsByClassName("dropdown-content")[i].dataset.index;
    //     console.log(b);
    //     if (openDropdown.classList.contains('show')) {
    //         openDropdown.classList.remove('show');
    //     }
    //     }
    // }
    // }
    
        function myFunction(x) {
            console.log(x);
            x.classList.toggle("fa-chevron-up");
        }
        var acc = document.getElementsByClassName("dropbtn");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                if(this.classList.toggle("active")) {
                    x.classList.toggle("fa-chevron-up");
                }
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                panel.style.display = "none";
                } else {
                panel.style.display = "block";
                }
            });
        }
    </script>

    <!-- Validator -->
    <script src="./js/validator.js"></script>
    <script>
        //Truyền object vào function validator
        Validator({
            form:'#form-1',
            formGroupSelector:'.form-group',
            errorSelector: '.form-message',
            rules: [
                //chạy hàm có đối số cho hàm 
                Validator.isRequired('#fullname','Vui lòng nhập tên đầy đủ'),
                Validator.isRequired('#email'),
                Validator.isRequired('#avartar'),
                Validator.isEmail('#email'),
                Validator.minLength('#password',6),
                Validator.isRequired('#password_confirmation'),
                Validator.isRequired('input[name="gender"]'),
                Validator.isRequired('#province'),
                Validator.isConfirmed('#password_confirmation', function() {
                  return document.querySelector('#form-1 #password').value;
                },'Mật khẩu nhập lại không chính xác')
            ],

            // data nhận được từ formValues của enableInputs 
          onSubmit: function(data) {
          }
        })
    </script>

    <!-- modal  -->
    <script>
        var modalBtn = document.querySelector('.modal-btn');
        // var modalBg = document.querySelector('.modal-bg');
        var modalBg = document.querySelector('.checkout-mobile__modal-bg');
        var modalClose = document.querySelector('.modal-close');
        modalBtn.addEventListener('click', function(){
            modalBg.classList.add('bg-active');
        })

        modalClose.addEventListener("click", function() {
            modalBg.classList.remove('bg-active');
            
        })
    </script>
</body>

</html>