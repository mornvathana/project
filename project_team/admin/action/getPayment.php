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

    $order1 = "SELECT * FROM orders ORDER BY id DESC LIMIT $totalPage,$limit";
    $order = $conn->query($order1);
    $Data = array();
    if ($order->num_rows > 0) {
        while($row = $order->fetch_assoc()){
            $id = $row['user_id'];
            $data = $conn->query("SELECT * FROM users WHERE id = $id");
            foreach($data as $item){
                $userName = $item['name'];
            }
            $Data[] = array(
                "id" => $row['id'],
                "firstName" => $row['first_name'],
                "lastName" => $row['last_name'],
                "date" => $row['created_at'],
                "totalprice" => $row['total_price'],
                "status" => $row['status'],
                "user_id" => $userName,
                "total" => $total
            );
        }
        
        echo json_encode($Data);
    } else {
        echo 404;
    }
?>