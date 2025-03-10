<?php
    $conn = new mysqli("localhost","root","","ecommerce_data");
    if(!$conn){
        die("Please check your database connectoin!". $conn->connect_error);
        echo "We have connection";
    }
?>

