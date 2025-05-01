<?php
    session_start();
    include('../../config/dbcon.php');
    // 
    $tableId  = $_POST['tableId'];
    $dashboard = $_POST['dashboard'];
    $total_product = $_POST['total_product'];
    $product = $_POST['product'];
    $brands = $_POST['brands'];
    $category = $_POST['category'];
    $orders = $_POST['orders'];
    $users = $_POST['users'];
    $inventory = $_POST['inventory'];
    $userId = $_POST['userId'];


    $sql = "INSERT INTO permission (
                            user_id,
                            dashboard,
                            total_product,
                            product,
                            brands,
                            category,
                            orders,
                            user,
                            inventory,
                            updated_by)
                            VALUES ('$tableId','$dashboard','$total_product','$product','$brands','$category','$orders','$users','$inventory','$userId')";

    $result = $conn->query($sql);
    
    if($result){
        echo 202;
    }else{
        echo 404;
    }
    
?>