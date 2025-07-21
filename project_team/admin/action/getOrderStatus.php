    <?php
        session_start();
        include('../../config/dbcon.php');
        // 

        $id = $_POST['status'];
        $page = $_POST['page'];
        $limit = 10;
        $offset = ($page - 1) * $limit;
        if ($offset < 0) {
            $offset = 0;
        }

        $sqlTotal = "SELECT COUNT(*) as Total FROM orders ";
        $resTotal = $conn->query($sqlTotal);    
        $rowTotal = $resTotal->fetch_array();
        $total = $rowTotal['0'];


        $order1 = "SELECT * FROM orders WHERE status = $id LIMIT $offset,$limit";
        $order = $conn->query($order1);
        $Data = array();
        if ($order->num_rows > 0) {
            while($row = $order->fetch_array()){
                $Data[] = array(
                    "id" => $row[0],
                    "user_id" => $row[1],
                    "first" => $row[3],
                    "last" => $row[4],
                    "city" => $row[5],
                    "province" => $row[6],
                    "email" => $row[7],
                    "phone_number" => $row[8],
                    "total_price" => $row[10],
                    "status" => $row[11],
                    "created_at" => $row[12],
                    "total" => $total
                );
            }
            echo json_encode($Data);
        } else {
            echo 404;
        }
    ?>