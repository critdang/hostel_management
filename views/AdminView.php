<?php
    class AdminView {
        public function showDashBoard($products) {
            require_once('../../templates/admin/Admin.php');
        }
        public function showOrder($orders) {
            require_once('../../templates/admin/Admin.php');
        }
    }

?>