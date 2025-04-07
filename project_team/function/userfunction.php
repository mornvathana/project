<?php
    $conn = new mysqli("localhost","root","","ecommerce_data");
    function whereProduct($table,$selectCol,$property){
        global $conn;
        $query = "SELECT * FROM $table where $selectCol = '$property'";
        return $query_run = mysqli_query($conn,$query);
    }
    function getCategory($selectCol,$property){
        global $conn;
        $query = "SELECT * FROM category_db where $selectCol = $property";
        return $query_run = mysqli_query($conn,$query);
    }
    function getAll($table){
        global $conn;
        $product = "SELECT * FROM $table ORDER BY id DESC";
        return $product_run = mysqli_query($conn,$product);
    }
    function getProductUser($table,$id){
        global $conn;
        $product = "SELECT * FROM $table WHERE user_id = $id ORDER BY id DESC";
        return $product_run = mysqli_query($conn,$product);
    }
    function getShipping1($id){
        global $conn;
        $shipping = "SELECT * FROM shipping where id = $id";
        return $shipping1 = mysqli_query($conn,$shipping);
    }
    function getTitle($table){
        global $conn;
        $query = "SELECT product_name FROM product_database";
        return $query_run = mysqli_query($conn,$query);
    }
    function getById($table,$id){
        global $conn;
        $sql = "SELECT * FROM $table WHERE id = $id";
        return $sql_run = mysqli_query($conn,$sql);
    }
    function getProduct($id){
        global $conn;
        $product = "SELECT d.id,d.brand_id,d.promotion,d.barcode,d.name,d.original_price,d.sell_price 
                    , i.specification,i.description,i.image,i.demo_image FROM product_detail d JOIN product_image i on d.id = i.product_id where d.brand_id = '$id'";
        return $product1 = mysqli_query($conn,$product);
    }
    function getProductEach($id){
        global $conn;
        $product = "SELECT d.id,d.brand_id,d.promotion,d.barcode,d.name,d.original_price,d.sell_price 
                    , i.specification,i.description,i.image,i.demo_image FROM product_detail d JOIN product_image i on d.id = i.product_id where d.id = '$id'";
        return $product1 = mysqli_query($conn,$product);
    }
    function getShipping($id){
        global $conn;
        $product1 = "SELECT * FROM shipping WHERE id = $id";
        return $product = mysqli_query($conn,$product1);
    }
    function redirect($url,$message){
        $_SESSION['message'] = $message;
        header('Location: '.$url);
        exit();
    }
    function redirect1($url,$message1){
        $_SESSION['message1'] = $message1;
        header('Location: '.$url);
        exit();
    }
?>
