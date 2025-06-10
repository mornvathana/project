<?php
    include('myfunction.php');

    require '../vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    // 
    if (isset($_POST['login_btn'])) {
        $conn = new mysqli("localhost", "root", "", "ecommerce_data");
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $checkemail = $conn->query("SELECT * FROM users WHERE email = '$email'");

        if($checkemail->num_rows > 0){
        $emailverify = "SELECT * FROM users WHERE email = '$email' AND email_verify IS NOT NULL";

        $dataverify = $conn->query($emailverify);

        if($dataverify->num_rows > 0){

        $login_query = "SELECT * FROM users WHERE email = '$email' AND status = 1";
        $login_query_run = mysqli_query($conn, $login_query);
    
        if (mysqli_num_rows($login_query_run) > 0) {
            $userdata = mysqli_fetch_array($login_query_run);
            $hashedPasswordFromDB = $userdata['password'];
            if (password_verify($password, $hashedPasswordFromDB)) {
            $_SESSION['auth'] = true;
            $userid = $userdata['id'];
            $username = $userdata['name'];
            $useremail = $userdata['email'];
            $role_as = $userdata['role_as'];

            $_SESSION['auth_user'] = [
                'user_id' => $userid,
                'user_name' => $username,
                'user_email' => $useremail,
            ];
            $_SESSION['id'] = $userid;
            $_SESSION['role_as'] = $role_as;

            if ($role_as == 1) {
                redirect("../admin/index.php", "Welcome to Dashboard");
            } else {
                redirect("../index.php", "You have logged in successfully");
            }
            } else {
                redirect1("../login.php", "Invalid password!");
            }
        } else {
            redirect1("../login.php", "Invalid email!");
        }
        }else{
            redirect1("../login.php", "Please verify email!");
        }
        }else{
            redirect1("../login.php","Email not found!");
        }


    }else if(isset($_POST['btn_register'])){
        $conn = new mysqli("localhost","root","","ecommerce_data");
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $email_double = "SELECT * FROM users WHERE email = '$email'";
        $email_double_run = mysqli_query($conn,$email_double);

        if(mysqli_num_rows($email_double_run) > 0){

            redirect1("../login.php","We got the same email!");

        }else{

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $register = "INSERT INTO users (id,name,email,password) VALUES(null,'$username','$email','$hashedPassword')";
        $register_run = mysqli_query($conn,$register);

        if($register_run){
            
        $email_id = $conn->insert_id;

        $base_url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/";
        $verification_link = $base_url . "verify_email.php?email_id=" . $email_id;

        $content .= "<br><br>Click <a href='" . $verification_link . "'>here</a> to verify your email.";


        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'mornsovathana@gmail.com'; 
            $mail->Password = 'adjujoekjgqfxeqg';  
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('mornsovathana@gmail.com', 'Morn sovathana');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Email Verification';
            $mail->Body = $content;

            $mail->send();
            echo "Verification email sent to $email.";
        } catch (Exception $e) {
            echo "Email could not be sent. Error: {$mail->ErrorInfo}";
        }

        redirect("../verifypage.php","please verify email!");

        }else{
            
            redirect1("register.php","Something went wrong!");
        }
        } 
    }else if(isset($_POST['check_opt'])){
        $opt = $_POST['otp'];
        $opt_check = "SELECT opt FROM users WHERE opt = $opt";
        $opt_check_run = $conn->query($opt_check);
        if(!$opt_check_run->num_rows < 0){
            redirect1("enterOTP.php","Your Opt Code is not correct!");
        }
    }else if(isset($_POST['btn_password'])){
        $conn = new mysqli("localhost","root","","ecommerce_data");
        $newPassword = $_POST['new_password'];
        $conPassword = $_POST['con_password'];
        $otp = $_POST['otp'];
        if($newPassword != $conPassword){
            redirect1("../reset.password.php","Your Password is not match!");
        }else{
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $update_pass = "UPDATE users SET password = '$hashedPassword' WHERE otp = '$otp'";
            $update_pass_run = $conn->query($update_pass);
            if($update_pass_run){
                redirect("../login.php","Update password sucessfully!");
            }else{
                redirect1("../reset.password.php","Something went wrong!");
            }
        }
    }
?>