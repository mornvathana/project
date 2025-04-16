<?php
    session_start();
    include('../../config/dbcon.php');

    $order1 = "SELECT * FROM orders ORDER BY id DESC";
    $order = $conn->query($order1);
    $Data = array();
    if ($order->num_rows > 0) {
        while($row = $order->fetch_array()){
            $Data[] = array(
                "id" => $row[0],
                "firstName" => $row[3],
                "lastName" => $row[4],
                "date" => $row[11],
                "total" => $row[9],
                "status" => $row[10],
                "user_id" => $row[1],
            );
        }
        
        echo json_encode($Data);
    } else {
        echo 404;
    }
?>