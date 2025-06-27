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
            while($row = $result->fetch_assoc()){
                $data[] = array(
                "id" => $row['id'],
                "name" => $row['name'],
                "email" => $row['email'],
                "emailverify" => $row['email_verify'],
                "status" => $row['status'],
                "created" => $row['created_at'],
                );
            };

            echo json_encode($data);
        }
?>