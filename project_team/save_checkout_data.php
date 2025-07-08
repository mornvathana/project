<?php

    include('config/dbcon.php');

    header('Content-Type: application/json');

    $input_data = json_decode(file_get_contents("php://input"), true);

    $user_id = mysqli_real_escape_string($conn, $input_data['userid']);
    $cart_ids = $input_data['cartid'];
    $first_name = mysqli_real_escape_string($conn, $input_data['first_name']);
    $last_name = mysqli_real_escape_string($conn, $input_data['last_name']);
    $email = mysqli_real_escape_string($conn, $input_data['email']);
    $city = mysqli_real_escape_string($conn, $input_data['city']);
    $province = mysqli_real_escape_string($conn, $input_data['address']);
    $phone_number = mysqli_real_escape_string($conn, $input_data['phone_number']);
    $shipping = mysqli_real_escape_string($conn, $input_data['shipping']);
    $total_price = mysqli_real_escape_string($conn,$input_data['totalprice']);
    $scorecus = mysqli_real_escape_string($conn, $input_data['scorecus']);
    $discountcode = mysqli_real_escape_string($conn, $input_data['discount']);
    $score_id = 1;



    $cart_array_id = array_map(function ($id) use ($conn) {
        return mysqli_real_escape_string($conn,$id);
    },$cart_ids);

    $cart_single_id = implode(",",$cart_array_id);

    // table orders

    if(!empty($cart_single_id)){
        $insert = $conn->query( "INSERT INTO orders (user_id, cart_id,score_id, first_name, last_name, city, province, email, phone_number,delivery_option , total_price) 
        VALUES ('$user_id', '$cart_single_id','$score_id', '$first_name', '$last_name', '$city', '$province', '$email', '$phone_number','$shipping', '$total_price')");
        
        if(!$insert){
             echo json_encode(['status' => 'error', 'message' => 'Failed to save order: ' . mysqli_error($conn)]);
            exit();
        }
    }


    if(!empty($cart_single_id)){

        $findUserScore = $conn->query("SELECT * FROM score_customer WHERE user_id = '$user_id'");

        if($findUserScore->num_rows > 0){

            $row = $findUserScore->fetch_assoc();

            $defaultScore = $row['score'];

            $totalScoreUser = (int)$defaultScore + (int)$scorecus;


            $score_cus = $conn->query("UPDATE score_customer SET score = '$totalScoreUser' WHERE user_id = '$user_id'");

            if($score_cus){

                $updateStatus = $conn->query("UPDATE discount SET status = 0 WHERE dis_code = '$discountcode'");
                
            }

            $cartidstore = $cart_single_id;
            $cartiduse = explode(",",$cartidstore);

            foreach($cartiduse as $num){
                $conn->query("UPDATE cart SET status = 0 WHERE id = '$num' AND user_id = '$user_id'");
            }
            

            

        }else{

            $score_cus = $conn->query("INSERT INTO score_customer (user_id,score) VALUES ('$user_id','$scorecus')");

            if($score_cus){

                $updateStatus = $conn->query("UPDATE discount SET status = 0 WHERE dis_code = '$discountcode'");

            }

            $cartidstore = $cart_single_id;
            $cartiduse = explode(",",$cartidstore);

            foreach($cartiduse as $num){
                $conn->query("UPDATE cart SET status = 0 WHERE id = '$num' AND user_id = '$user_id'");
            }

        }
    }

    // for cart id 
    if(!empty($cart_single_id)){
        echo json_encode(['status' => 'success', 'order_id' => $cart_single_id]);
    }

   

?>
