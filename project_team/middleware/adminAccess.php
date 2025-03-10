<?php
    if(isset($_SESSION['auth'])){
        if($_SESSION['role_as'] != 1){
            redirect1('../index.php',"You are not authorized to access this page!!");
        }
    }
    // else{
    //    redirect('../login.php',"You have to login for continue!");
    // }
?>