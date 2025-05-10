<?php
    session_start();
    include('../../config/dbcon.php');

        $name = $_POST['name'];
        $search = "%{$name}%";

        $stmt = $conn->prepare("SELECT * FROM users WHERE name LIKE ?");
        $stmt->bind_param("s",$search);
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
                );
            };

            echo json_encode($data);
        }
?>