<?php
    session_start();
    include('../../config/dbcon.php');
    // 
    $id = $_POST['id'];
    $title = $_POST['title'];
    $order1 = "SELECT * FROM orders WHERE id = $id";
    $order = $conn->query($order1);
    $Data = array();
    if ($order->num_rows > 0) {
        while($row = $order->fetch_array()){
            
            if(!empty($title)){
                $num = $row[2];
                $cart = explode(",",$num);
                $numid = array_map("intval",$cart);
                $final = implode(",",$numid);
                // 
                $user_id = $row[1];

                $sql1 = $conn->query("SELECT * FROM cart WHERE id IN ($final) AND status = 0 AND ( user_id = $user_id OR product_name = '$title' )");

                $productname1 = [];
                foreach($sql1 as $data1){
                    $productname1[] = $data1['product_name'];
                }
                
                $sql = $conn->query("SELECT * FROM cart WHERE status = 0 AND user_id = $user_id AND product_name = '$title'");

                foreach($sql as $data){
                    $image = $data['product_image'];
                    $barcode = $data['barcode'];
                    $productname = $data['product_name'];
                }
            $Data[] = array(
                "id" => $row[0],
                "barcode" => $barcode,
                "productname" => $productname,
                "productname1" => $productname1,
                "delivery" => $row[9],
                "user_id" => $row[1],
                "first" => $row[3],
                "last" => $row[4],
                "city" => $row[5],
                "province" => $row[6],
                "email" => $row[7],
                "phone_number" => $row[8],
                "totalprice" => $row[10],
                "image" => $image,
                "status" => $row[11],
                "created_at" => $row[12],
            );
            }else{
                $num = $row[2];
                $cart = explode(",",$num);
                $numid = array_map("intval",$cart);
                $final = implode(",",$numid);

                $user_id = $row[1];
                $sql = $conn->query("SELECT * FROM cart WHERE id IN ($final) AND status = 0 AND ( user_id = $user_id OR product_name = '$title' )");

                $productname = [];
                foreach($sql as $data){
                    $image = $data['product_image'];
                    $barcode = $data['barcode'];
                    $productname[] = $data['product_name'];
                }
            $Data[] = array(
                "id" => $row[0],
                "barcode" => $barcode,
                "productname" => $productname,
                "productname1" => $productname,
                "delivery" => $row[9],
                "user_id" => $row[1],
                "first" => $row[3],
                "last" => $row[4],
                "city" => $row[5],
                "province" => $row[6],
                "email" => $row[7],
                "phone_number" => $row[8],
                "totalprice" => $row[9],
                "image" => $image,
                "status" => $row[11],
                "created_at" => $row[12],
            );
            }
                

               
        }
        echo json_encode($Data);
    }
    
?>