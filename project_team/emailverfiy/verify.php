<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$conn = new mysqli("localhost", "root", "", "api_database");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = "Thank you for registering. Please verify your email.";
    
    $sql = "SELECT id FROM users ORDER BY id DESC LIMIT 1";
    if ($conn->query($sql)) {
        $email_id = $conn->insert_id;
        
        // Generate verification link
        $base_url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/";
        $verification_link = $base_url . "verify_email.php?email_id=" . $email_id;

        // Add verification link to email content
        $content .= "<br><br>Click <a href='" . $verification_link . "'>here</a> to verify your email.";

        // Send Email
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'mornsovathana@gmail.com'; // Replace with your email
            $mail->Password = 'adjujoekjgqfxeqg';       // Replace with your email password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('mornsovathana@gmail.com', 'Morn sovathana');
            $mail->addAddress($recipient);

            $mail->isHTML(true);
            $mail->Subject = 'Email Verification';
            $mail->Body = $content;

            $mail->send();
            echo "Verification email sent to $recipient.";
        } catch (Exception $e) {
            echo "Email could not be sent. Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Failed to register email.";
    }
}
?>