<?php
    session_start();
    include('../../config/dbcon.php');
    // 
    $page = $_POST['page'];
    $limit = $_POST['limit'];
    $totalPage = ($page -1 ) * $limit; 
    $filterData = $_POST['filterData'];
    $orderBy = '';

    if($filterData == 'asc'){
        $orderBy = "ORDER BY name ASC";
    }else if($filterData == 'desc'){
        $orderBy = "ORDER BY name DESC";
    }else{
        $orderBy = "ORDER BY id DESC";
    }

    // get total page 
    $sqlTotal = "SELECT COUNT(*) as Total FROM product";
    $resTotal = $conn->query($sqlTotal);
    $rowTotal = $resTotal->fetch_array();
    $total = $rowTotal['0'];

    $stmt = $conn->prepare("SELECT * FROM product $orderBy LIMIT ?,? ");
    $stmt->bind_param("ii", $totalPage, $limit);
    $data = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        while($row = $result->fetch_array()){
            $data[] = array(
                "id" => $row['0'],
                "name" => $row['2'],
                "image" => $row['3'],
                "status" => $row['4'],
                "total" => $total,
            );
        }
        echo json_encode($data);
    }
?>