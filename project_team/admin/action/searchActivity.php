<?php
    session_start();
    include('../../config/dbcon.php');

        $name = $_POST['name'];
        $search = "%{$name}%";
        $num = $_POST['num'];

        $stmt = $conn->prepare("SELECT * FROM admin_logs WHERE admin_id = ? AND action LIKE ?");
        $stmt->bind_param("is",$num,$search);
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
                    "id" => $row[0],
                    "name" => $userName,
                    "action" => $row[2],
                    "ipaddress" => $row[3],
                    "created" => $row[4]
                );
            };

            echo json_encode($data);
        }
?>