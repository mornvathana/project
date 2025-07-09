<?php
    session_start();
    include('../../config/dbcon.php');


    $page = isset($_POST['page']) ? (int)$_POST['page'] : 1;
    $limit = isset($_POST['limit']) ? (int)$_POST['limit'] : 10;
    $totalPage = ($page - 1) * $limit;

    $product = $_POST['product_item'] ?? null;
    $category = $_POST['category_item'] ?? null;
    $brand = $_POST['brand_item'] ?? null;
    $search = $_POST['search'] ?? null;
    //
    $where = [];

    if (!empty($product)) {
        $where[] = "d.name = '$product'";
    }
    if (!empty($brand)) {  
        $where[] = "d.brand_id = '$brand'";
    }
    if (!empty($category)) {  
        $where[] = "d.slug = '$category'";
    }

    $condition = !empty($where) ? "WHERE " . implode(" AND ", $where) : "";
    

    $sql = "SELECT d.id,d.brand_id,d.slug,d.barcode,d.name,d.original_price,d.sell_price 
            , i.specification,i.description,i.image,i.demo_image FROM product_detail d JOIN 
            product_image i on d.id = i.product_id $condition AND d.name LIKE '%$search%' LIMIT $totalPage,$limit";
    $sql_filter = $conn->query($sql);

    if($sql_filter === false){
        echo 505;
    }else{
        $data = array();
        while($row = $sql_filter->fetch_assoc()){
            $id = $row['brand_id'];
            $sql = $conn->query("SELECT * FROM brands WHERE id = $id");
            if($sql->num_rows > 0){
                foreach($sql as $name){
                    $brandname = $name['name'];
                }

            }
            $data[] = array(
                "id" => $row['id'],
                "brand" => $brandname,
                "name" => $row['name'],
                "sell" => $row['sell_price'],
                "image" => $row['image'], 

            );
        }
        echo $data ? json_encode($data) : json_encode(["code" => 404]);
    }
?>