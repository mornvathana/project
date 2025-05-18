<?php
    session_start();
    include('../../config/dbcon.php');
    // 
    $page = $_POST['page'];
    $userId = $_POST['userId'];
    $limit = $_POST['limit'];
    $num = 3;
    $totalPage = ($page - 1) * $num;

    // total row 
    $sql = "SELECT COUNT(*) as Total FROM orders WHERE user_id = $userId AND status = $limit";
    $sTotal = $conn->query($sql);
    $rTotal = $sTotal->fetch_array();
    $total = $rTotal['0'];

    // fetch data 
    $stmt = $conn->prepare("SELECT * FROM orders WHERE user_id = ? AND status = ? LIMIT ?,?");
    $stmt->bind_param("iiii",$userId,$limit,$totalPage,$num);

    $data = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        while($row = $result->fetch_array()){
            $id = $row['1'];
            $b = "SELECT name FROM users WHERE id = $id";
            $q = $conn->query($b);
            $r = $q->fetch_assoc();
            $name = $r['name'];
            $data[] = array(
                "id" => $row[0],
                "name" => $name,
                "product" => $row['4'],
                "price" => $row['9'],
                "created" => $row['1'],
                "cartId" => $row['2'],
                "total" => $total,
            );
        }
        echo json_encode($data);
    }

?>