<?php
    session_start();
    include('../../config/dbcon.php');
    // 
    $page = $_POST['page'];
    $limit = 10;
    $totalPage = ($page -1 ) * $limit; 

    // get total page 
    $sqlTotal = "SELECT COUNT(*) as Total FROM users";
    $resTotal = $conn->query($sqlTotal);
    $rowTotal = $resTotal->fetch_array();
    $total = $rowTotal['0'];

    $stmt = $conn->prepare("SELECT * FROM users ORDER BY id DESC LIMIT ?,? ");
    $stmt->bind_param("ii",$totalPage, $limit);
    $data = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        while($row = $result->fetch_array()){
            $data[] = array(
                "id" => $row['0'],
                "name" => $row['1'],
                "email" => $row['2'],
                "emailverify" => $row['8'],
                "status" => $row['7'],
                "created" => $row['10'],
                "total" => $total,
            );
        }
        echo json_encode($data);
    }
?>