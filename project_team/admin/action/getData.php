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
    $product = "SELECT o.*, u.name FROM orders o JOIN users u ON o.user_id = u.id ORDER BY o.id DESC LIMIT $totalPage, $limit";
    $order = $conn->query($product);
    $Data = array();
    if ($order->num_rows > 0) {
        while($row = $order->fetch_assoc()){
            $Data[] = array(
                "id" => $row['id'],
                "firstName" => $row['first_name'],
                "lastName" => $row['last_name'],
                "date" => $row['created_at'],
                "totalprice" => $row['total_price'],
                "status" => $row['status'],
                "user_id" => $row['name'],
                "total" => $total,
            );
        }
        
        echo json_encode($Data);
    } else {
        echo 404;
    }
?>