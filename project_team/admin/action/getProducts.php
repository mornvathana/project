<?php
    session_start();
    include('../../config/dbcon.php');

    $page = $_POST['page'];
    $limit = $_POST['limit'];
    $totalPage = ($page - 1) * $limit;

    // total row 
    $sql = "SELECT COUNT(*) as Total FROM product_detail";
    $sTotal = $conn->query($sql);
    $rTotal = $sTotal->fetch_array();
    $total = $rTotal['0'];

    $order1 = "SELECT d.id,d.brand_id,d.slug,d.barcode,d.name,d.original_price,d.sell_price 
              , i.specification,i.description,i.image,i.demo_image,i.created_at 
              FROM product_detail d JOIN product_image i on d.id = i.product_id LIMIT $totalPage,$limit";
    $order = $conn->query($order1);
    $Data = array();
    if ($order->num_rows > 0) {
        while($row = $order->fetch_assoc()){
            $Data[] = array(
                "id" => $row['id'],
                "barcode" => $row['barcode'],
                "name" => $row['name'],
                "total" => $total,
                "date" => $row['created_at'],
            );
        }
        echo json_encode($Data);
    } else {
        echo 404;
    }
?>