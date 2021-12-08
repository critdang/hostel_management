<?php
    class AdminController
    {
        public function getAllProduct() {
            require_once('../../models/admin/AdminDashBoardModel.php');
            $adminModel = new AdminDashboardModel();
            $products =$adminModel->getAllProduct();
            print_r($products) ;
            // require_once('../../views/AdminView.php');
            // $adminView = new AdminView();
            // $adminView -> showDashBoard($products);
        }
        public function getAllOrder() {
            require_once('../../models/admin/AdminDashBoardModel.php');
            $adminModel = new AdminDashboardModel();
            $orders =$adminModel->getAllOrder();
            console.log($orders);

            // require_once('../../views/AdminView.php');
            // $adminView = new AdminView();
            // $adminView -> showOrder($orders);
        }
    }
    $temp = (new AdminController())->getAllProduct();
    $temp1 = (new AdminController())->getAllOrder();

?>