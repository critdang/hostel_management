<php 
ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once('models/UserModel.php')
    class UserController
    {
        public function getUser() {
            echo 'day la get user: ';
        }
    }
    echo 'PHP pho';
?>