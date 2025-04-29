<?php
    session_start();
    include('../../config/dbcon.php');

    $page = $_POST['page'];
    $limit = $_POST['limit'];
    $totalPage = ($page - 1) * $limit;

    // total row 
    $sql = "SELECT COUNT(*) as Total FROM orders";
    $sTotal = $conn->query($sql);
    $rTotal = $sTotal->fetch_array();
    $total = $rTotal['0'];

    $product = "SELECT * FROM orders ORDER BY id DESC LIMIT $totalPage,$limit";
    $order = $conn->query($product);
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
                "firstName" => $row[3],
                "lastName" => $row[4],
                "date" => $row[11],
                "total" => $row[9],
                "status" => $row[10],
                "user_id" => $userName,
                "total" => $total,
            );
        }
        
        echo json_encode($Data);
    } else {
        echo 404;
    }
?>