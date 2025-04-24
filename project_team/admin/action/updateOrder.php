<?php
    session_start();
    include('../../config/dbcon.php');

    $id = $_POST['id'];
    $status = $_POST['status'];
    // 
    $stmt = $conn->prepare("UPDATE orders SET status = ? WHERE id = ?");
    $stmt->bind_param('ii',$status,$id);

    if($stmt->execute()){
        echo 202;
    }else{
        echo 404;
    }
?>