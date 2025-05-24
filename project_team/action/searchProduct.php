<?php
    session_start();
    $conn = new mysqli("localhost","root","","ecommerce_data");

    if(isset($_POST['name'])){

        $name = $_POST['name'];
        $search = "%{$name}%";

        $stmt = $conn->prepare("SELECT d.id,d.brand_id,d.promotion,d.barcode,d.name,d.original_price,d.sell_price 
                    , i.specification,i.description,i.image,i.demo_image
                     FROM product_detail d JOIN product_image i on d.id = i.product_id
                      where d.name LIKE ?");
        $stmt->bind_param("s",$search);
        $data = array();

        if($stmt->execute()){
            
            $result = $stmt->get_result();
            while($row = $result->fetch_array()){
                $data[] = array(
                    "id" => $row[1],
                    "name" => $row[4],
                    "image" => $row[9],
                    "sell_price" => $row[6],
                );
            };

            echo json_encode($data);
        }
    }
?>