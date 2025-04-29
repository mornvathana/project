<?php
    include("../config/dbcon.php");
    session_start();
    
    // get user
    function getUser($selectCol,$property){
        global $conn;
        $query = "SELECT * FROM users where $selectCol = $property";
        return $query_run = mysqli_query($conn,$query);
    }
    function countCategoryItem($table,$value){
        global $conn;
        $query = "SELECT count(*) as count FROM $table WHERE id = $value";
        $query_run = mysqli_query($conn,$query);
        if($query_run){
            $result = mysqli_fetch_assoc($query_run);
                return $result['count'];
        }
        return 0;
    }
    function countTable($table){
        global $conn;
        $query = "SELECT COUNT(*) AS count FROM $table";
        $query_run = mysqli_query($conn,$query);
        if($query_run){
            $result = mysqli_fetch_assoc($query_run);
                return $result['count'];
        }
        return 0;
    }
    function countStatus($table,$status){
        global $conn;
        $count = "SELECT COUNT(*) AS total FROM $table WHERE status = $status";
        $count_run = mysqli_query($conn,$count);
        if($count_run){
            $result = mysqli_fetch_assoc($count_run);
            return $result['total'];
        }
    }
    function countData($table, $selectName) {
        global $conn;
        $query = "SELECT COUNT(*) AS count FROM $table WHERE product_name = '$selectName'";
        $query_run = mysqli_query($conn, $query);
        
        if ($query_run) {
            $result = mysqli_fetch_assoc($query_run);
            return $result['count']; 
        }
        return 0; 
    }
    // get edit category
    function getById($table,$id){
        global $conn;
        $sql = "SELECT * FROM $table WHERE id = $id";
        return $sql_run = mysqli_query($conn,$sql);
    }
    //count
    function whereProduct($table,$selectCol,$property){
        global $conn;
        $query = "SELECT * FROM $table where $selectCol = '$property'";
        return $query_run = mysqli_query($conn,$query);
    }
    // matching brand 
    function whereProduct1($property){
        global $conn;
        $query = "SELECT * FROM brands where id = $property";
        return $query_run = mysqli_query($conn,$query);
    }
    // function for select product
    function selectProduct($name,$table){
        global $conn;
        $query = "SELECT $name FROM $table";
        return $query_run = mysqli_query($conn,$query);
    }
    function getAll($table){
        global $conn;
        $product = "SELECT * FROM $table";
        return $product_run = mysqli_query($conn,$product);
    }
    function getAllStatus($table,$pedding){
        global $conn;
        $product = "SELECT * FROM $table WHERE status IN ($pedding)";
        return $product_run = mysqli_query($conn,$product);
    }
    function getAdmin($table){
        global $conn;
        $product = "SELECT * FROM $table where role_as = 1";
        return $product_run = mysqli_query($conn,$product);
    }
    // join table 
    function allProduct(){
        global $conn;
        $product = "SELECT d.id,d.brand_id,d.promotion,d.barcode,d.name,d.original_price,d.sell_price 
                    , i.specification,i.description,i.image,i.demo_image FROM product_detail d JOIN product_image i on d.id = i.product_id";
        return $product1 = mysqli_query($conn,$product);
    }
    function getProduct($id){
        global $conn;
        $product = "SELECT d.id,d.brand_id,d.promotion,d.barcode,d.name,d.original_price,d.sell_price 
                    , i.specification,i.description,i.image,i.demo_image FROM product_detail d JOIN product_image i on d.id = i.product_id where d.id = '$id'";
        return $product1 = mysqli_query($conn,$product);
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