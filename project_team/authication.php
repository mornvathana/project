<?php
    if(!isset($_SESSION['auth']) || $_SESSION['auth'] == false){
        redirect1("login.php","Please login to continue!");
    }
?>