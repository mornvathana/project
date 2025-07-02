<?php
    session_start();
    include('../config/dbcon.php');


    $status = 1;
    $userId = $_POST['userid'];

    $count = $conn->prepare("SELECT COUNT(id) as Total FROM discount WHERE status = ? AND user_redeem = ?");
    $count->bind_param("ii",$status,$userId);
    $count->execute();
    $data = $count->get_result();
    $totalCount = $data->fetch_assoc()['Total'];


    $stmt = $conn->prepare("SELECT * FROM discount WHERE status = ? AND user_redeem = ?");
    $stmt->bind_param("ii",$status,$userId);
    $stmt->execute();
    $result = $stmt->get_result();

    $data = array();

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $data[] = array(
                "id" => $row['id'],
                "discode" => $row['dis_code'],
                "disper" => $row['dis_per'],
                "totalcount" => $totalCount
            );
        }
    }  

     echo json_encode($data);
?>