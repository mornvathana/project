<?php
    if(!isset($_SESSION['lang'])){
        $_SESSION['lang'] = 'kh';
    }

    if(isset($_GET['lang'])){
        $_SESSION['lang'] = $_GET['lang'];
    }

    $lang = $_SESSION['lang'];
    $text = include("lang/$lang.php");

?>