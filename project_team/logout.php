<?php
    session_start(); 
    session_unset(); 
    session_destroy();
    header("Location: login.php"); 
    $_SESSION['message'] = "Logout Successfully!";
    exit();
?>
