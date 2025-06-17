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

        $data[] = array(
            "id" => $item['id'],
            "status" => $item['status'],
        );
        echo json_encode($data);
        }
    }else{
        echo $stmt->error;
    }
?>