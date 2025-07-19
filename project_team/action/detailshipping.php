<?php
    session_start();
    include('../config/dbcon.php');

    $id = $_POST['id'];

    $stmt = $conn->prepare("SELECT * FROM orders WHERE cart_id = ?");
    $stmt->bind_param('i',$id);

    $data = array();

    if($stmt->execute()){
        $row = $stmt->get_result();

        if($row->num_rows > 0){

        $item = $row->fetch_assoc();

        $userid = $item['user_id'];

        $name = "";

        $sql = $conn->query("SELECT name FROM users WHERE id = $userid");
        
        if($sql->num_rows > 0){
            $row = $sql->fetch_assoc();
            $name = $row['name'];
        }


        $data[] = array(
            "id" => $item['id'],
            "username" => $name,
            "city" => $item['city'],
            "province" => $item['province'],
            "phonenumber" => $item['phone_number'],
            "shippingMethod" => $item['delivery_option'],
            "status" => $item['status'],
        );
        echo json_encode($data);
        
        }
    }else{
        echo $stmt->error;
    }
?>