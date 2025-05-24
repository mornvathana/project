<?php
    session_start();
    include('../../config/dbcon.php');
    // 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $order1 = "SELECT * FROM orders WHERE id = $id";
    $order = $conn->query($order1);
    $Data = array();
    if ($order->num_rows > 0) {
        while($row = $order->fetch_array()){
                $num = $row[2];
                $user_id = $row[1];
                $sql = $conn->query("SELECT * FROM cart WHERE id = $num AND status = 0 AND user_id = $user_id");
                foreach($sql as $data){
                    $image = $data['product_image'];
                }
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
                "image" => $image,
                "status" => $row[10],
                "created_at" => $row[11],
            );
        }
        echo json_encode($Data);
    } else {
        echo 404;
    }
    }
    
?>