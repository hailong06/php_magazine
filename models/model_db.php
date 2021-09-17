<?php
    class db_model{
        public function connect()
        {
            $conn = mysqli_connect('localhost', 'root', '', 'magazine_mvc');
            mysqli_set_charset($conn, 'utf8');
            if(mysqli_connect_errno()){
                echo 'connect error: ' .mysqli_connect_error();
            }
            return $conn;
        }
    }
?>