<?php
    session_start();
    include('../../config/dbcon.php');

    $order1 = "SELECT d.id,d.brand_id,d.promotion,d.barcode,d.name,d.original_price,d.sell_price 
              , i.specification,i.description,i.image,i.demo_image 
              FROM product_detail d JOIN product_image i on d.id = i.product_id";
    $order = $conn->query($order1);
    $Data = array();
    if ($order->num_rows > 0) {
        while($row = $order->fetch_array()){
            $Data[] = array(
                "id" => $row[0],
                "barcode" => $row[3],
                "name" => $row[4],
                "created" => $row[1],
            );
        }
        echo json_encode($Data);
    } else {
        echo 404;
    }
?>