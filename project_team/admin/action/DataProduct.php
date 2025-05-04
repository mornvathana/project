<?php

    session_start();
    include('../../config/dbcon.php');
    
    $product_title = $_POST['product_name'];
    $doubleName = "SELECT product_name FROM product_database WHERE product_name = '$product_title'";
    $double_run = mysqli_query($conn,$doubleName);
    if(mysqli_num_rows($double_run) > 0){
        echo 400;
    }else{
        $product = "INSERT INTO product_database (id,product_name) VALUES(null,'$product_title')";
    $product_run = mysqli_query($conn,$product);
    if($product_run){
        redirect('product1.php', 'We have added the product!');
    }else{
        redirect1('product1.php', 'Seomething went wrong!');
    }
    }
    
?>