<?php
    session_start();
    include('../../config/dbcon.php');
    // 
    $page = $_POST['page'];
    $limit = 10;
    $totalPage = ($page -1 ) * $limit; 

    // get total page 
    $sqlTotal = "SELECT COUNT(*) as Total FROM admin_logs";
    $resTotal = $conn->query($sqlTotal);
    $rowTotal = $resTotal->fetch_array();
    $total = $rowTotal['0'];

    $stmt = $conn->prepare("SELECT * FROM admin_logs ORDER BY id DESC LIMIT ?,? ");
    $stmt->bind_param("ii", $totalPage, $limit);
    $data = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        while($row = $result->fetch_array()){
            $id = $row[1];
            $name = $conn->query("SELECT * FROM users WHERE id = $id");
            foreach($name as $item){
                $userName = $item['name'];
            }
            $data[] = array(
                "id" => $row['0'],
                "name" => $userName,
                "action" => $row['2'],
                "ipaddress" => $row['3'],
                "created" => $row['4'],
                "total" => $total,
            );
        }
        echo json_encode($data);
    }
?>