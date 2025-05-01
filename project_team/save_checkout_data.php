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
    $total_price = mysqli_real_escape_string($conn,$input_data['totalPrice']);


    $sql = "INSERT INTO orders (user_id, cart_id, first_name, last_name, city, province, email, phone_number, total_price) 
            VALUES ('$user_id', '$cart_id', '$first_name', '$last_name', '$city', '$province', '$email', '$phone_number', '$total_price')";

    if (mysqli_query($conn, $sql)) {
        
        $delete = $conn->query("DELETE FROM cart WHERE id = '$cart_id' AND user_id = '$user_id'");

        if($delete){

            echo json_encode(['status' => 'success', 'message' => 'Order saved successfully']);

        }

    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to save order: ' . mysqli_error($conn)]);
    }

?>
