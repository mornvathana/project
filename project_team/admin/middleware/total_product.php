<?php
     if($_SESSION['auth_user']){

        $id = $_SESSION['auth_user']['user_id'];

    }
    
    $permission = permission($id);

    if($permission['total_product'] == 0){

        header("Location: notfound.php");
        exit();

    } 
?>