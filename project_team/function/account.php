<?php
    include('myfunction.php');
    if (isset($_POST['login_btn'])) {
        $conn = new mysqli("localhost", "root", "", "ecommerce_data");
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
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
    }else if(isset($_POST['btn_register'])){
        $conn = new mysqli("localhost","root","","ecommerce_data");
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $email_double = "SELECT * FROM users WHERE email = '$email'";
        $email_double_run = mysqli_query($conn,$email_double);
        if(mysqli_num_rows($email_double_run) > 0){

            redirect1("../register.php","We got the same email!");

        }else{

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $register = "INSERT INTO users (id,name,email,password) VALUES(null,'$username','$email','$hashedPassword')";
        $register_run = mysqli_query($conn,$register);

        if($register_run){

            redirect("../login.php","Register successfully!");

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