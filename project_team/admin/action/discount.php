<?php
    session_start();
    include('../../config/dbcon.php');
    // 
    $page = $_POST['page'];
    $limit = 10;
    $totalPage = ($page -1 ) * $limit; 

    // get total page 
    $sqlTotal = "SELECT COUNT(*) as Total FROM discount";
    $resTotal = $conn->query($sqlTotal);
    $rowTotal = $resTotal->fetch_array();
    $total = $rowTotal['0'];

    $stmt = $conn->prepare("SELECT * FROM discount LIMIT ?,?");
    $stmt->bind_param("ii", $totalPage, $limit);
    $data = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()){

            $id = $row['created_by'];

            $sql = $conn->query("SELECT * FROM users WHERE id = $id");

            if($sql->num_rows > 0){
                $row1 = $sql->fetch_assoc();
                $name = $row1['name'];
            }

            $data[] = array(
                "id" => $row['id'],
                "discount" => $row['dis_code'],
                "disper" => $row['dis_per'],
                "status" => $row['status'],
                "createdBy" => $name,
                "total" => $total,
            );
        }
        echo json_encode($data);
    }
?>