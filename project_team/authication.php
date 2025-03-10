<?php
    if(!isset($_SESSION['auth'])){
        redirect1("login.php","Please login to continue!");
    }
?>