<?php
    $conn = new mysqli("localhost","root","","ecommerce_data");

    function getPopularProduct($select,$id){
        global $conn;
        $product = "SELECT d.id,d.brand_id,d.promotion,d.barcode,d.name,d.original_price,d.sell_price 
                            , i.specification,i.description,i.image,i.demo_image 
                            , p.product_id, p.popular_pd, p.used_pd , p.new_pd
                            FROM product_detail d 
                            JOIN product_image i on d.id = i.product_id 
                            JOIN product_option p ON d.id = p.product_id
                            where p.$select = $id ";
        return $product1 = mysqli_query($conn,$product);

    }
    function getProductByBrand($select,$id){
        global $conn;
        $product = "SELECT d.id,d.brand_id,d.promotion,d.barcode,d.name,d.original_price,d.sell_price 
                            , i.specification,i.description,i.image,i.demo_image 
                            , p.product_id, p.popular_pd, p.used_pd , p.new_pd
                            FROM product_detail d 
                            JOIN product_image i on d.id = i.product_id 
                            JOIN product_option p ON d.id = p.product_id
                            where d.$select = $id ";
        return $product1 = mysqli_query($conn,$product);

    }

    function getBrandTitle($table,$id){
        global $conn;
        $query = "SELECT * FROM $table WHERE id = $id";
        return $query_run = mysqli_query($conn,$query);
    }

    function whereProduct($table,$selectCol,$property){
        global $conn;
        $query = "SELECT * FROM $table where $selectCol = '$property'";
        return $query_run = mysqli_query($conn,$query);
    }
    function getPrice($id,$userid){
        global $conn;
        $product = "SELECT * FROM orders WHERE cart_id = $id AND user_id = $userid";
        return $product1 = mysqli_query($conn,$product);
    }
    function getOrders($id){
        global $conn;
        $product = "SELECT * FROM cart WHERE user_id = $id AND status = 0";
        return $product1 = mysqli_query($conn,$product);
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
        $product = "SELECT * FROM $table WHERE user_id = $id AND status = 1 ORDER BY id DESC";
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
    function getCartOrders($userId,$cartId,$orderId){
        global $conn;
        $product = "SELECT d.id,d.category_id,d.user_id,d.shipping_id,d.barcode,d.product_name,d.product_price,d.specification,d.product_image,d.product_qty,d.total_price 
                    , i.user_id,i.cart_id,i.first_name,i.last_name,i.city,i.province,i.email,i.phone_number,i.total_price,i.created_at FROM cart d JOIN orders i on d.id = i.cart_id where i.cart_id = $cartId AND i.user_id = $userId AND i.id = $orderId";
        return $product1 = mysqli_query($conn,$product);
    }
    function getProduct($id,$min,$max){
        global $conn;
        $product = "SELECT d.id,d.brand_id,d.promotion,d.barcode,d.name,d.original_price,d.sell_price 
                    , i.specification,i.description,i.image,i.demo_image FROM product_detail d JOIN product_image i on d.id = i.product_id where d.brand_id = $id AND d.sell_price BETWEEN $min AND $max";
        return $product1 = mysqli_query($conn,$product);
    }
    function getProductEach($id){
        global $conn;
        $product = "SELECT d.id,d.brand_id,d.promotion,d.barcode,d.name,d.original_price,d.sell_price 
                    , i.specification,i.description,i.image,i.demo_image FROM product_detail d JOIN product_image i on d.id = i.product_id where d.id = '$id'";
        return $product1 = mysqli_query($conn,$product);
    }
    function getBrandEach($id){
        global $conn;
        $product = "SELECT d.id,d.brand_id,d.promotion,d.barcode,d.name,d.original_price,d.sell_price 
                    , i.specification,i.description,i.image,i.demo_image FROM product_detail d JOIN product_image i on d.id = i.product_id where d.brand_id = $id";
        return $product1 = mysqli_query($conn,$product);
    }
    function menu($id){
        global $conn;
        $menu = "SELECT name,id FROM brands WHERE product_id = $id";
        return $menu1 = mysqli_query($conn,$menu);
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

    function getPopularFeatured($select,$limit){
        global $conn;
        $product = "SELECT d.id,d.brand_id,d.promotion,d.barcode,d.name,d.original_price,d.sell_price 
                            , i.specification,i.description,i.image,i.demo_image 
                            , p.product_id, p.popular_pd, p.used_pd , p.new_pd
                            FROM product_detail d 
                            JOIN product_image i on d.id = i.product_id 
                            JOIN product_option p ON d.id = p.product_id
                            where p.$select = 1 LIMIT $limit";
        return $product1 = mysqli_query($conn,$product);

    }

    function getMenu($table){
        global $conn;
        // select index in sql
        $query = "SELECT * FROM $table  ORDER BY id DESC LIMIT 1,7";
        return mysqli_query($conn,$query);
    }

    function getMenuwithID($table,$id){
        global $conn;
        // select index in sql
        $query = "SELECT * FROM $table WHERE id = $id";
        return mysqli_query($conn,$query);
    }
?>
