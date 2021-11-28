<?php
    class DormController
    {
        public function getDorm() {
            require_once('models/DormModel.php');
            $dormModel = new DormModel();
            $dorms = $dormModel->getDorm();
            // kiem tra dorms
            require_once('views/DormView.php');
            $dormView = new DormView();
            $dormView -> showAllDorm($dorms);
            print_r($dormView);
        }
    }
    $temp = (new DormController())->getDorm();
?>