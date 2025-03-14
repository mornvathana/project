<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
require './settings.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = $host;
    $mail->SMTPAuth = true;
    $mail->Username = $username;
    $mail->Password = $hostPassword;

    // Secure connection
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use SSL encryption
    $mail->Port = 465; // Port for SSL (or 587 for TLS)

    // Enable debug output
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;

} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}
?>
