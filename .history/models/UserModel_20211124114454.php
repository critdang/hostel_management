<?php
    
    require_once('models/DbModel.php')
    class UserModel extends DbModel 
    {
        public function connect()
        {
            $con = parent::connect(); 
        }
    }

?>