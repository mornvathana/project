<?php
    include('../config/dbcon.php');
    include('../function/userfunction.php');
    if (isset($_GET['email_id'])) {

    $email_id = (int)$_GET['email_id'];
    
    $sql = "UPDATE users SET email_verify = NOW() WHERE id = $email_id";
    if ($conn->query($sql)) {
        redirect("../login.php","Emali has verify!");
    } else {
        redirect1("verifypage.php","Something went wrong!");
    }
} else {
    echo "Invalid verification link.";
}
?>