<?php
    $conn = new mysqli("localhost","root","","ecommerce_data");

    function getPopularProduct($select,$id,$limit){
        global $conn;
        $product = "SELECT d.id,d.brand_id,d.slug,d.barcode,d.name,d.original_price,d.sell_price 
                            , i.specification,i.description,i.image,i.demo_image 
                            , p.product_id, p.popular_pd, p.used_pd , p.new_pd
                            FROM product_detail d 
                            JOIN product_image i on d.id = i.product_id 
                            JOIN product_option p ON d.id = p.product_id
                            where p.$select = $id LIMIT $limit";
        return $product1 = mysqli_query($conn,$product);

    }

     function getByStatus($table,$status,$userId){
        global $conn;
        $product = "SELECT * FROM $table WHERE status = $status AND user_redeem = $userId";
        return $product1 = mysqli_query($conn,$product);

    }
    
    function sumScore($table,$id){
        global $conn;
        $query = "SELECT SUM(score) as total FROM $table WHERE user_id = $id" ;
        $query_run = mysqli_query($conn,$query);
        if(mysqli_num_rows($query_run) > 0){
            return mysqli_fetch_assoc($query_run);
        }
        return null;
    }

    function getProductByBrand($select,$id,$limit){
        global $conn;
        $product = "SELECT d.id,d.brand_id,d.slug,d.barcode,d.name,d.original_price,d.sell_price 
                            , i.specification,i.description,i.image,i.demo_image 
                            , p.product_id, p.popular_pd, p.used_pd , p.new_pd
                            FROM product_detail d 
                            JOIN product_image i on d.id = i.product_id 
                            JOIN product_option p ON d.id = p.product_id
                            where d.$select = $id LIMIT $limit";
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

    function whereProductDetail($selectCol,$property){
        global $conn;
        $product = "SELECT d.id,d.brand_id,d.slug,d.barcode,d.name,d.original_price,d.sell_price 
                            , i.specification,i.description,i.image,i.demo_image 
                            , p.product_id, p.popular_pd, p.used_pd , p.new_pd
                            FROM product_detail d 
                            JOIN product_image i on d.id = i.product_id 
                            JOIN product_option p ON d.id = p.product_id
                            where d.slug = '$property' LIMIT 1 ";
        return $query_run = mysqli_query($conn,$product);
    }

    function getPriceOrders2($id){
        global $conn;
        $product = "SELECT * FROM orders WHERE id = $id AND status IN (1,2,3)";
        return $product1 = mysqli_query($conn,$product);
    }

    function getPriceOrders1($id){
        global $conn;
        $product = "SELECT * FROM orders WHERE id = $id AND status IN (1,2)";
        return $product1 = mysqli_query($conn,$product);
    }


    function getPrice($id,$userid){
        global $conn;
        $product = "SELECT * FROM orders WHERE cart_id = $id AND user_id = $userid";
        return $product1 = mysqli_query($conn,$product);
    }
     function getCartOrdersPrice($id,$cartid,$table){
        global $conn;
        $product = "SELECT * FROM $table WHERE user_id = $id AND cart_id = $cartid";
        return $product1 = mysqli_query($conn,$product);
    }
     function getPriceOrders($userid){
        global $conn;
        $product = "SELECT * FROM orders WHERE user_id = $userid AND (status = 1 OR status = 2)";
        return $product1 = mysqli_query($conn,$product);
    }
    function getPriceCart($id,$userid){
        global $conn;
        $product = "SELECT * FROM cart WHERE id = $id AND user_id = $userid";
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
    function getWebInfo($table,$select){
        global $conn;
        $product = "SELECT $select FROM $table WHERE id = 1";
        return $product_run = mysqli_query($conn,$product);
    }
    function getProductUser($table,$id){
        global $conn;
        $product = "SELECT * FROM $table WHERE user_id = $id AND status = 1";
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
    function countStatusUser($table,$status,$id){
        global $conn;
        $query = "SELECT count(*) as count FROM $table WHERE status = $status AND user_id = $id";
        $query_run = mysqli_query($conn,$query);
        if($query_run){
            $result = mysqli_fetch_assoc($query_run);
                return $result['count'];
        }
        return 0;
    }
    function countCart($table,$id){
        global $conn;
        $query = "SELECT count(*) as count FROM $table WHERE user_id = $id";
        $query_run = mysqli_query($conn,$query);
        if($query_run){
            $result = mysqli_fetch_assoc($query_run);
                return $result['count'];
        }
        return 0;
    }
    function getOrders1($userId,$orderId){
        global $conn;
        $product = "SELECT * FROM orders WHERE user_id = $userId AND id = $orderId";
        return $product1 = mysqli_query($conn,$product);
    }
    function getCartOrders($userId,$cartId,$orderId){
        global $conn;
        $product = "SELECT d.id,d.category_id,d.user_id,d.shipping_id,d.barcode,d.product_name,d.product_price,d.specification,d.product_image,d.product_qty,d.total_price 
                    , i.user_id,i.cart_id,i.first_name,i.last_name,i.city,i.province,i.email,i.phone_number,i.total_price,i.created_at FROM cart d JOIN orders i on d.id = i.cart_id where i.cart_id = $cartId AND i.user_id = $userId AND i.id = $orderId";
        return $product1 = mysqli_query($conn,$product);
    }
    function getProduct($id,$min,$max,$slug,$limit){
        global $conn;
        $product = "SELECT d.id,d.brand_id,d.slug,d.barcode,d.name,d.original_price,d.sell_price 
                    , i.specification,i.description,i.image,i.demo_image FROM product_detail d JOIN product_image i on d.id = i.product_id 
                    WHERE d.brand_id = $id AND d.slug = '$slug' AND d.sell_price BETWEEN $min AND $max LIMIT $limit";
        return $product1 = mysqli_query($conn,$product);
    }
    function getProductFilter($id, $slug, $sort, $limit) {
    global $conn;

    $sql = "SELECT d.id, d.brand_id, d.slug, d.barcode, d.name, d.original_price, d.sell_price, 
                   i.specification, i.description, i.image, i.demo_image 
            FROM product_detail d 
            JOIN product_image i ON d.id = i.product_id 
            WHERE d.brand_id = $id AND d.slug = '$slug'";

    switch ($sort) {
        case 'price_asc':
            $sql .= " ORDER BY d.sell_price ASC";
            break;
        case 'price_desc':
            $sql .= " ORDER BY d.sell_price DESC";
            break;
        case 'az':
            $sql .= " ORDER BY d.name ASC";
            break;
        case 'za':
            $sql .= " ORDER BY d.name DESC";
            break;
        default:
            $sql .= " ORDER BY d.id DESC";
    }

    $sql .= " LIMIT $limit";

    return mysqli_query($conn, $sql);
    }

    function getProductEach($id){
        global $conn;
        $product = "SELECT d.id,d.brand_id,d.slug,d.barcode,d.name,d.original_price,d.sell_price 
                    , i.specification,i.description,i.image,i.demo_image FROM product_detail d JOIN product_image i on d.id = i.product_id where d.id = '$id'";
        return $product1 = mysqli_query($conn,$product);
    }
    function getBrandEach($id){
        global $conn;
        $product = "SELECT d.id,d.brand_id,d.slug,d.barcode,d.name,d.original_price,d.sell_price 
                    , i.specification,i.description,i.image,i.demo_image FROM product_detail d JOIN product_image i on d.id = i.product_id where d.brand_id = $id";
        return $product1 = mysqli_query($conn,$product);
    }
    function menu($id){
        global $conn;
        $menu = "SELECT name,id FROM brands WHERE id = $id";
        return $menu1 = mysqli_query($conn,$menu);
    }

    function favorite($table,$select,$id){
        global $conn;
        $menu = "SELECT * FROM $table WHERE $select = $id";
        return $menu1 = mysqli_query($conn,$menu);
    }

     function getDataByUsers($table,$id,$status,$cartid){
        global $conn;
        $menu = "SELECT * FROM $table WHERE user_id = $id AND status = $status AND id = $cartid";
        return $menu1 = mysqli_query($conn,$menu);
    }

    function getTableByUsers1($id){
        global $conn;
        $menu = "SELECT * FROM orders WHERE user_id = $id ";
        return $menu1 = mysqli_query($conn,$menu);
    }

    function getTableByUsers($id){
        global $conn;
        $menu = "SELECT * FROM orders WHERE user_id = $id AND status IN (1, 2)";
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
        $product = "SELECT d.id,d.brand_id,d.slug,d.barcode,d.name,d.original_price,d.sell_price 
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

    function getSelectTable($table,$id,$select){
        global $conn;
        // select index in sql
        $query = "SELECT * FROM $table WHERE $select = $id";
        return mysqli_query($conn,$query);
    }
?>
