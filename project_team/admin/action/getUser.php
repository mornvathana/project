<?php
    session_start();
    include('../../config/dbcon.php');
    // 
    $page = $_POST['page'];
    $roleas = 0;
    $limit = 10;
    $totalPage = ($page -1 ) * $limit; 

    // get total page 
    $sqlTotal = "SELECT COUNT(*) as Total FROM users";
    $resTotal = $conn->query($sqlTotal);
    $rowTotal = $resTotal->fetch_array();
    $total = $rowTotal['0'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE role_as = ? ORDER BY id DESC LIMIT ?,? ");
    $stmt->bind_param("iii",$roleas,$totalPage, $limit);
    $data = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()){
            $data[] = array(
                "id" => $row['id'],
                "name" => $row['name'],
                "email" => $row['email'],
                "emailverify" => $row['email_verify'],
                "status" => $row['status'],
                "created" => $row['created_at'],
                "total" => $total,
            );
        }
        echo json_encode($data);
    }
?>