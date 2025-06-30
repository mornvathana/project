<?php

    include('config/dbcon.php');

    header('Content-Type: application/json');

    $input_data = json_decode(file_get_contents("php://input"), true);

    $user_id = mysqli_real_escape_string($conn, $input_data['userid']);
    $cart_id = mysqli_real_escape_string($conn, $input_data['cartid']);
    $first_name = mysqli_real_escape_string($conn, $input_data['first_name']);
    $last_name = mysqli_real_escape_string($conn, $input_data['last_name']);
    $email = mysqli_real_escape_string($conn, $input_data['email']);
    $city = mysqli_real_escape_string($conn, $input_data['city']);
    $province = mysqli_real_escape_string($conn, $input_data['province']);
    $phone_number = mysqli_real_escape_string($conn, $input_data['phone_number']);
    $shipping = mysqli_real_escape_string($conn, $input_data['shipping']);
    $total_price = mysqli_real_escape_string($conn,$input_data['totalPrice']);
    $scorecus = mysqli_real_escape_string($conn, $input_data['scorecus']);
    $discountcode = mysqli_real_escape_string($conn, $input_data['discount']);



    $sql = "INSERT INTO orders (user_id, cart_id, first_name, last_name, city, province, email, phone_number,delivery_option , total_price) 
            VALUES ('$user_id', '$cart_id', '$first_name', '$last_name', '$city', '$province', '$email', '$phone_number','$shipping', '$total_price')";

    if (mysqli_query($conn, $sql)) {


        $findUserScore = $conn->query("SELECT * FROM score_customer WHERE user_id = '$user_id'");

        if($findUserScore->num_rows > 0){

            $row = $findUserScore->fetch_assoc();

            $defaultScore = $row['score'];

            $totalScoreUser = $defaultScore + $scorecus;


            $score_cus = $conn->query("UPDATE score_customer SET score = '$totalScoreUser' WHERE user_id = '$user_id'");
            
            $update = $conn->query("UPDATE cart SET status = 0 WHERE id = '$cart_id' AND user_id = '$user_id'");

            if($update){

                if($score_cus){

                    $updateStatus = $conn->query("UPDATE discount SET status = 0 WHERE dis_code = '$discountcode'");
                    
                    if($updateStatus){
                        echo json_encode(['status' => 'success', 'message' => 'Order saved successfully']);
                    }
                }

            }

            

        }else{

            $score_cus = $conn->query("INSERT INTO score_customer (user_id,score) VALUES ('$user_id','$scorecus')");
            
            $update = $conn->query("UPDATE cart SET status = 0 WHERE id = '$cart_id' AND user_id = '$user_id'");

            if($update){

                if($score_cus){

                    $updateStatus = $conn->query("UPDATE discount SET status = 0 WHERE dis_code = '$discountcode'");
                    
                    if($updateStatus){
                        echo json_encode(['status' => 'success', 'message' => 'Order saved successfully']);
                    }
                }

            }

        }

       

    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to save order: ' . mysqli_error($conn)]);
    }

?>
