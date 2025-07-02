<?php
    session_start();
    include('../config/dbcon.php');

    $id = $_POST['userid'];

    $role = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $role->bind_param("i",$id);
    $role->execute();
    $data = $role->get_result();

    if($data->num_rows > 0){
        $row = $data->fetch_assoc();
        $roleAs = $row['role_as'];
    }

    $stmt = $conn->prepare("SELECT * FROM chatbox WHERE ( user_id = ? OR receive_id = ?) ORDER BY id DESC");
    $stmt->bind_param("ii", $id,$id);
    $stmt->execute();
    $result = $stmt->get_result();

    $message = array();

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $message[] = array(
                "id" => $row['id'],
                "message" => $row['message'],
                "receiveid" => $row['receive_id'],
                "roleAs" => $row['role_as'],
            );
        }
    }

    echo json_encode($message);
?>