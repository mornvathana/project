<?php
    session_start();
    include('../config/dbcon.php');

    $code = $_POST['code'];
    $status = 1;

    $stmt = $conn->prepare("SELECT * FROM discount WHERE dis_code = ? AND status = ?");
    $stmt->bind_param('si',$code,$status);

    $data = array();    

    if($stmt->execute()){
        $result = $stmt->get_result();
        
        while($row = $result->fetch_assoc()){
            $data[] = array(
                "id" => $row['id'],
                "code" => $row['dis_code'],
                "discode" => $row['dis_per'],
            );
        }
        echo json_encode($data);

    }else{
        echo 404;
    }


?>