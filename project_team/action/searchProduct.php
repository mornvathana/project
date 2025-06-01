<?php
    session_start();
    $conn = new mysqli("localhost","root","","ecommerce_data");

    if(isset($_POST['name'])){

        $name = $_POST['name'];
        $search = "%{$name}%";

        $stmt = $conn->prepare("SELECT d.id,d.brand_id,d.slug,d.barcode,d.name,d.original_price,d.sell_price 
                    , i.specification,i.description,i.image,i.demo_image
                     FROM product_detail d JOIN product_image i on d.id = i.product_id
                      where d.name LIKE ?");
        $stmt->bind_param("s",$search);
        $data = array();

        if($stmt->execute()){
            
            $result = $stmt->get_result();

            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }

            echo json_encode($data);
        }
    }
?>