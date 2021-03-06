<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="shortcut icon" href="/assets/img/images/logo-mb.png" type="image/png">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="../../assets/css/grid_raw.css"> 
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="stylesheet" href="../../assets/css/grid_admin.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-logo">
            <img src="../../assets/img/images/logo-lg.png" alt="Company logo">
            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-menu'></i>
            </div>
        </div>
        <div class="sidebar-user">
            <div class="sidebar-user-info">
                <img src="../../assets/img/images/logo-mb.png" alt="User picture" class="profile-image">
                <div class="slider-user-name">
                    <h1>dmin</h1>
                </div>
            </div>
            <button class="btn btn-outline">
                <i class='bx bx-log-out' ></i>
            </button>
        </div>
        <!-- sidebar menu -->
        <div class="sidebar-menu">
            <li>
                <a href="#" class="active">
                    <i class='bx bx-home' ></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="active">
                    <i class='bx bx-shopping-bag' ></i>
                    <span>Sales</span>
                </a>
            </li>
            <li>
                <a href="#" class="active">
                    <i class='bx bx-bar-chart-alt-2' ></i>
                    <span>Analyse</span>
                </a>
            </li>
            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-user-circle' ></i>
                    <span>Account</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="#">
                            Edit profile
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Account settings
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Billing
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-category' ></i>
                    <span>Project</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="#">
                            List
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Add project
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-category' ></i>
                    <span>E-commerce</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="#">
                            List product
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Add product
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Orders
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="active">
                    <i class='bx bx-mail-send' ></i>
                    <span>Mail</span>
                </a>
            </li>
            <li>
                <a href="#" class="active">
                    <i class='bx bx-chat' ></i>
                    <span>Chat</span>
                </a>
            </li>
            <li>
                <a href="#" class="active">
                    <i class='bx bx-calendar' ></i>
                    <span>Calendar</span>
                </a>
            </li>
            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-cog' ></i>
                    <span>Settings</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="#" class="darkmode-toggle" id="darkmode-toggle">
                            Darkmode
                            <span class="darkmode-switch"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </div>
        <!-- /sidebar menu -->

    </div>
    <!-- /Sidebar -->
    <!-- Main conent -->
    <div class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-eight'></i>
            </div>
            <div class="main-title">
                Dashboard
            </div>
        </div>
        <div class="main-content">
            <div class="row">
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">
                        <!-- Counter -->
                        <div class="counter">
                            <div class="counter-title">
                                total order
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                <?php foreach ($orders as $order) {
                                 ?>
                                    <?php echo $order['order_id'] ?>
                                    <?php echo '1' ?>
                                    
                                <?php } ?>
                                </div>
                                <i class='bx bx-shopping-bag' ></i>
                            </div>
                        </div>
                        <!-- End COunter -->
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">
                        <!-- Counter -->
                        <div class="counter">
                            <div class="counter-title">
                                convention rate
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    30.5%
                                </div>
                                <i class='bx bx-chat' ></i>
                            </div>
                        </div>
                        <!-- End COunter -->
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">
                        <!-- Counter -->
                        <div class="counter">
                            <div class="counter-title">
                                total profit
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    $9,780
                                </div>
                                <i class='bx bx-line-chart' ></i>
                            </div>
                        </div>
                        <!-- End COunter -->
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">
                        <!-- Counter -->
                        <div class="counter">
                            <div class="counter-title">
                                daily visitors
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    690
                                </div>
                                <i class='bx bx-user' ></i>
                            </div>
                        </div>
                        <!-- End COunter -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3 col-md-6 col-sm-12">
                    <!-- Top product -->
                    <div class="box f-height">
                        <div class="box-header">
                            top product
                        </div>
                        <div class="box-body">
                            <ul class="product-list">
                              <!-- list -->
                              <?php foreach ($products as $product) {
                                 ?>
                                <li class="product-list-item">
                                    <div class="item-info">
                                        <img src="../../assets/img/<?php echo $product['room_img'] ?>" alt="product image">
                                        <div class="item-name">
                                            <div class="product-name">
                                               <?php echo $product['room_name'] ?>
                                            </div>
                                            <div class="text-second">
                                               <?php echo $product['category_name'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-sale-info">
                                            <div class="text-second">Sales</div>
                                            <div class="product-sales"><?php echo "$".$product['room_price'] ?></div>
                                    </div>
                                </li>
                                <?php } ?>
                                <!-- endlist -->
                            </ul>
                        </div>
                    </div>
                    <!-- /Top product -->
                </div>
                <div class="col-4 col-md-6 col-sm-12">
                    <!-- category-chart -->
                    <div class="box f-height">
                        <div class="box-body">
                            <div id="category-chart"></div>
                        </div>
                    </div>
                    <!-- /category-chart -->
                </div>
                <div class="col-5 col-md-12 col-sm-12">
                    <!-- Customer-chart -->
                    <div class="box f-height">
                        <div class="box-header">
                            Customers
                        </div>
                        <div class="box-body">
                            <div id="customer-chart"></div>
                        </div>
                    </div>
                    <!-- /Customer-chart -->
                </div>
                <div class="col-12">
                    <!-- Order table -->
                    <div class="box">
                        <div class="box-header">
                            Recent Orders
                        </div>
                        <div class="box-body overflow-scroll">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Customer ID</th>
                                        <th>Date</th>
                                        <th>Order Status</th>
                                        <th>Payment Status</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#2345</td>
                                        <td>
                                            <div class="order-owner">
                                                <img src="../../assets/img/images/user-image-2.png" alt="user 1 image">
                                                <span> Quang Dai</span>
                                            </div>
                                        </td>
                                        <td>2021-05-09</td>
                                        <td>
                                            <span class="order-status order-ready">
                                                Ready
                                            </span>
                                        </td>
                                        <td>
                                            <div class="payment-status payment-pending">
                                                <div class="dot"></div>
                                                    <span>Pending</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$123.45</td>
                                    </tr>
                                    <tr>
                                        <td>#2345</td>
                                        <td>
                                            <div class="order-owner">
                                                <img src="../../assets/img/images/user-image-2.png" alt="user 1 image">
                                                <span> Duc Chuong</span>
                                            </div>
                                        </td>
                                        <td>2021-05-09</td>
                                        <td>
                                            <span class="order-status order-shipped">
                                                Shipped
                                            </span>
                                        </td>
                                        <td>
                                            <div class="payment-status payment-paid">
                                                <div class="dot"></div>
                                                    <span>Paid</span>
                                            </div>
                                        </td>
                                        <td>$123.45</td>
                                    </tr>
                                    <tr>
                                        <td>#2345</td>
                                        <td>
                                            <div class="order-owner">
                                                <img src="../../assets/img/images/user-image-3.png" alt="user 1 image">
                                                <span> Quang Huy</span>
                                            </div>
                                        </td>
                                        <td>2021-05-09</td>
                                        <td>
                                            <span class="order-status order-shipped">
                                                Shipped
                                            </span>
                                        </td>
                                        <td>
                                            <div class="payment-status payment-paid">
                                                <div class="dot"></div>
                                                    <span>Paid</span>
                                            </div>
                                        </td>
                                        <td>$123.45</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End Order table -->

                </div>
            </div>
        </div>
    </div>
    <!-- /Main conent -->
    <div class="overlay">

    </div>
    <!-- Script -->
    <!-- Apexchart -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- APP JS -->
    <script src="../../js/admin.js"></script>
</body>
</html>