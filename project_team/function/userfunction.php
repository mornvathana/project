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
