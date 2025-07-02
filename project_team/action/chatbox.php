<?php
    session_start();
    include('../config/dbcon.php');

    $message = $_POST['message'];
    $id = $_POST['userid'];

    $role = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $role->bind_param("i",$id);
    $role->execute();
    $data = $role->get_result();

    if($data->num_rows > 0){
        $row = $data->fetch_assoc();
        $roleAs = $row['role_as'];
    }

    $stmt = $conn->prepare("INSERT INTO chatbox (user_id, message,role_as) VALUES (?, ?,?)");
    $stmt->bind_param("isi", $id, $message,$roleAs);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "202";
    } else {  
        echo "404";
    }
?>
