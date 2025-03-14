<?php
include('function/myfunction.php');
$conn = new mysqli("localhost", "root", "", "ecommerce_data");
$email = $_POST['email'];
$otp = rand(100000, 999999); // Generate a 6-digit OTP

// Check email
$sql = "SELECT * FROM users WHERE email = '$email'";
$count = $conn->query($sql);

if ($count->num_rows > 0) {
    // Correct the query to use the actual OTP value
    $email_found = "UPDATE users SET otp = '$otp' WHERE email = '$email'";
    $email_found_run = $conn->query($email_found);

    try {
        require 'emailAPI.php';

        // Properly set up email
        $mail->setFrom($email, 'OTP Sender');
        $mail->addAddress($email, 'Syntax Flow');
        $mail->addReplyTo($email, 'OTP Sender');

        // Correct interpolation of OTP
        $mail->isHTML(true);
        $mail->Subject = "Request Email - OTP";
        $mail->Body = "Hi, here is your OTP: $otp";

        $mail->send();
        echo "Hi, your OTP has been sent, check your mail";
        redirect("enterOTP.php","We have sent OTP");
    } catch (Exception $e) {
        redirect1("requestOTP.php","Something went wrong!");
    }
} else {
    redirect1("requestOTP.php","Please enter correct Email!");
}
?>
