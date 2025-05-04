<?php
     if(isset($_SESSION['auth_user'])){

        $id = $_SESSION['auth_user']['user_id'];

    }
    
    if(!empty($id)){

    $permission = permission($id);

    if($permission['product'] == 0){

        header("Location: notfound.php");
        exit();

    } 
    }
?>