<?php
    session_start();
    include('../../config/dbcon.php');
    // 
    $page = $_POST['page'];
    $limit = $_POST['limit'];
    $totalPage = ($page - 1) * $limit;

    // total row 
    $sql = "SELECT COUNT(*) as Total FROM product_detail";
    $sTotal = $conn->query($sql);
    $rTotal = $sTotal->fetch_array();
    $total = $rTotal['0'];

    // fetch data 
    $stmt = $conn->prepare("SELECT d.id,d.brand_id,d.promotion,d.barcode,d.name,d.original_price,d.sell_price 
                    , i.specification,i.description,i.image,i.demo_image FROM product_detail d JOIN product_image i on d.id = i.product_id LIMIT ?,?");
    $stmt->bind_param("ii",$totalPage,$limit);

    $data = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        while($row = $result->fetch_array()){
            $id = $row['1'];
            $b = "SELECT name FROM brands WHERE id = $id";
            $q = $conn->query($b);
            $r = $q->fetch_assoc();
            $brand = $r['name'];
            $data[] = array(
                "brand" => $brand,
                "name" => $row['4'],
                "price" => $row['6'],
                "image" => $row['9'],
                "total" => $total,
            );
        }
        echo json_encode($data);
    }

?>