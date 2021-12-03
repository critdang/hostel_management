<?php
    class AdminController
    {
        public function getAllProduct() {
            require_once('../../models/admin/AdminDashBoardModel.php');
            $adminModel = new AdminDashboardModel();
            $products =$adminModel->getAllProduct();

            require_once('../../views/AdminView.php');
            $adminView = new AdminView();
            $adminView -> showDashBoard($products);
        }
    }
    $temp = (new AdminController())->getAllProduct();
?>