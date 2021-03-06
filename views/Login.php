<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Document</title>
</head>
<body>
    <div id="container" class="container">
        <!-- Form section -->
        <div class="row">
            <!-- Sign up -->
            <div class="col align-item-center flex-col sign-up">
                <div class="form-wrapper align-item-center">
                    <div class="form sign-up">
                        <form action="#" method="post">
                            <div class="input-group">
                                <i class='bx bxs-user'></i>
                                <input type="text" placeholder="Username">
                            </div>
                            <div class="input-group">
                                <i class='bx bx-mail-send'></i>
                                <input type="email" placeholder="Email">
                            </div>
                            <div class="input-group">
                                <i class='bx bxs-lock-alt' ></i>
                                <input type="password" placeholder="Password">
                            </div>
                            <div class="input-group">
                                <i class='bx bxs-lock-alt' ></i>
                                <input type="password" placeholder="Confirm Password">
                            </div>
                            <div class="input-btn">
                                <input type="submit" class="input-group" name="logout_home" value="Sign up">
                            </div>
                        </form>
                        <p>
                            <span>
                                Already have an account?
                            </span>
                            <b onclick="toggle()" class='pointer'>
                                Sign in here
                            </b>
                        </p>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="social-list align-item-center sign-up">
                        <div class="align-item-center facebook-bg">
                            <i class='bx bxl-facebook' ></i>
                        </div>
                        <div class="align-item-center google-bg">
                            <i class='bx bxl-google' ></i>
                        </div>
                        <div class="align-item-center twitter-bg">
                            <i class='bx bxl-twitter' ></i>
                        </div>
                        <div class="align-item-center insta-bg">
                            <i class='bx bxl-instagram-alt' ></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end sign up -->
            <!-- sign in -->
            <div class="col align-item-center flex-col sign-in" >
                <div class="form-wrapper align-item-center">
                    <form action="../controllers/admin/UserController.php" method= "POST" class="form sign-in">
                        <div class="input-group">
                            <i class='bx bxs-user'></i>
                            <input type="text" name="username" placeholder="Username">
                        </div>
                        <div class="input-group">
                            <i class='bx bxs-lock-alt' ></i>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="input-btn">
                            <input type="submit" class="input-group" name="login_home" value="Log in">
                        </div>
                        <p>
                            <b>
                                Forgot your password?
                            </b>
                        </p>
                        <p>
                            <span>
                                Don't have an account?
                            </span>
                            <b onclick="toggle()" class="pointer">
                                Sign up here
                            </b>
                        </p>
                    </form>
                </div>
                <div class="form-wrapper">
                    <div class="social-list align-item-center sign-in">
                        <div class="align-item-center facebook-bg">
                            <i class='bx bxl-facebook' ></i>
                        </div>
                        <div class="align-item-center google-bg">
                            <i class='bx bxl-google' ></i>
                        </div>
                        <div class="align-item-center twitter-bg">
                            <i class='bx bxl-twitter' ></i>
                        </div>
                        <div class="align-item-center insta-bg">
                            <i class='bx bxl-instagram-alt' ></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End sign in -->
        </div>
        <!-- end form section -->
        <!-- Content section -->
        <div class="row content-row">
            <!-- Sign up content -->
            <div class="col align-item-center flex-col">
                <div class="text sign-in">
                    <h2>
                        Welcome back
                    </h2>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus quia sed pariatur, tempora exercitationem dolor quas odit dignissimos temporibus perspiciatis maxime soluta quae sunt! Natus consectetur suscipit unde quasi dicta?
                    </p>
                </div>
                <div class="img sign-in">
                    <img src="../assets/img/undraw_online_payments_re_y8f2.svg" alt="welcome">
                </div>
            </div>
            <!-- END Sign up content -->
            <!--  Sign up content -->

            
            <div class="col align-item-center flex-col" >
                
                <div class="text sign-up">
                    <h2>
                        Join with us
                    </h2>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus quia sed pariatur, tempora exercitationem dolor quas odit dignissimos temporibus perspiciatis maxime soluta quae sunt! Natus consectetur suscipit unde quasi dicta?
                    </p>
                </div>
                <div class="img sign-up">
                    <img src="../assets/img/undraw_co-working_re_w93t (1).svg" alt="welcome">
                </div>
            </div>
            
            <!-- END Sign up content -->

        </div>
        <!-- end Content section -->
    </div>
    <script src="../js/index.js"></script>
</body>
</html>