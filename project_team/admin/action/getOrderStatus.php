<?php
    session_start();
    include('../../config/dbcon.php');
    // 
    if(isset($_GET['status'])){
        $id = $_GET['status'];
    }

    if(isset($_GET['selectPage'])){
        $num = $_GET['selectPage'];
    }

    if(isset($_GET['currentPage'])){
        $start = $_GET['currentPage'] ? 0 : null;
    }

    $order1 = "SELECT * FROM orders WHERE status = $id LIMIT $start,$num";
    $order = $conn->query($order1);
    $Data = array();
    if ($order->num_rows > 0) {
        while($row = $order->fetch_array()){
            $Data[] = array(
                "id" => $row[0],
                "user_id" => $row[1],
                "first" => $row[3],
                "last" => $row[4],
                "city" => $row[5],
                "province" => $row[6],
                "email" => $row[7],
                "phone_number" => $row[8],
                "total_price" => $row[9],
                "status" => $row[10],
                "created_at" => $row[11],
            );
        }
        echo json_encode($Data);
    } else {
        echo 404;
    }
?>