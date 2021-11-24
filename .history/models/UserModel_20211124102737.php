<?php
    
    require_once('DbModel.php')
    class UserModel extends DbModel {
        function __construct(argument)
        {
            $con = $this -> connect();
        }
    }

?>