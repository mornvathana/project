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

    $order1 = "SELECT d.id,d.brand_id,d.promotion,d.barcode,d.name,d.original_price,d.sell_price 
              , i.specification,i.description,i.image,i.demo_image 
              FROM product_detail d JOIN product_image i on d.id = i.product_id LIMIT $totalPage,$limit";
    $order = $conn->query($order1);
    $Data = array();
    if ($order->num_rows > 0) {
        while($row = $order->fetch_array()){
            $id = $row[1];
            $data = $conn->query("SELECT * FROM users WHERE id = $id");
            foreach($data as $item){
                $userName = $item['name'];
            }
            $Data[] = array(
                "id" => $row[0],
                "barcode" => $row[3],
                "name" => $row[4],
                "total" => $total,
                "user_id" => $userName,
            );
        }
        echo json_encode($Data);
    } else {
        echo 404;
    }
?>