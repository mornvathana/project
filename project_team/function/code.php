<?php
    session_start();
    include('userfunction.php');
    include('../config/dbcon.php');
    require '../vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if(isset($_SESSION['auth'])){
        if(isset($_POST['scrope'])){
            $scrope = $_POST['scrope'];
            $user_id = $_SESSION['auth_user']['user_id'];
            switch($scrope){
                case "add":
                    $prod_id = $_POST['prod_id'];
                    $prod_qty = $_POST['prod_qty'];
                    $prod_name = $_POST['prod_name'];
                    $prod_price = $_POST['prod_price'];
                    $prod_image = $_POST['prod_image'];
                    $prod_barcode = $_POST['prod_barcode'];

                    $check_exising_cart = "SELECT * FROM cart WHERE category_id = '$prod_id' AND user_id = '$user_id'";
                    $check_exising_cart_run = $conn->query($check_exising_cart);
                    if($check_exising_cart_run->num_rows > 0){
                        echo 400;
                    }else{
                        $insert_product = "INSERT INTO cart (category_id, user_id,shipping_id, barcode, product_name, product_price, specification , product_image, product_qty) 
                        VALUES ('$prod_id', '$user_id','0','$prod_barcode', '$prod_name', '$prod_price','', '$prod_image', '$prod_qty')";
                        $insert_product_run = $conn->query($insert_product);
                        if($insert_product_run){
                            echo 200;
                        }else{
                            echo 300;
                        }
                    }
                break;
                case "delete":
                    $prod_id = $_POST['prod_id'];
                    $delete_pd = "DELETE FROM cart WHERE id = $prod_id";
                    $delete_pd_run = $conn->query($delete_pd);
                    if($delete_pd_run){
                        echo 200;
                    }else{
                        echo 300;
                    } 
                break;
                case "updateQty":
                    $prod_qty = $_POST['prod_qty'];
                    $prod_id = $_POST['prod_id'];
                    $stmt = $conn->prepare("UPDATE cart SET product_qty = ? WHERE id = ?");
                    $stmt->bind_param('ii',$prod_qty,$prod_id);
                    $stmt->execute();
                break;
                case "updateShipping":
                    $prod_shipping = $_POST['shipping_id'];
                    $prod_id = $_POST['prod_id'];
                    $stmt = $conn->prepare("UPDATE cart SET shipping_id = ? WHERE id = ?");
                    $stmt->bind_param('ii',$prod_shipping,$prod_id);
                    $stmt->execute();
                break;
                case "updateProfile":
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phonenumber = $_POST['phonenumber'];
                    $address = $_POST['address'];
                    $image = "123.jpg";
                    $email_verify = null;

                    $stmt1 = $conn->prepare("SELECT * FROM users WHERE email = ?");
                    $stmt1->bind_param("s",$email);
                    $stmt1->execute();
                    $result = $stmt1->get_result();
                    if($result->num_rows > 0){
                        echo 100;
                    }else{
                        $stmt = $conn->prepare("UPDATE users SET name = ?,email = ?, image = ?,phonenumber = ? , address = ?, email_verify = ? WHERE id = ?");
                        $stmt->bind_param('sssissi',$name,$email,$image,$phonenumber,$address,$email_verify,$id);

                     if ($stmt->execute()) {

                        if ($stmt->affected_rows > 0) {

                            $base_url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/";
                            $verification_link = $base_url . "verify_email.php?email_id=" . $id;

                            $content = "Hi $name,";
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

                                $mail->setFrom('mornsovathana@gmail.com', 'Morn Sovathana');
                                $mail->addAddress($email);

                                $mail->isHTML(true);
                                $mail->Subject = 'Email Verification';
                                $mail->Body = $content;

                                $mail->send();
                                
                                session_unset(); 
                                session_destroy();

                            } catch (Exception $e) {
                                echo "Email could not be sent. Error: {$mail->ErrorInfo}";
                                exit(); 
                            }

                            }
                            
                            echo 202;
                            exit(); 
                        }else{
                            echo 404;
                        }
                    }
                break;
                case "updatePass":
                $id = $_POST['id'];
                $email = $_POST['email'];
                $oldPass = $_POST['oldPass'];
                $newPass = $_POST['newPass'];
                $conPass = $_POST['conPass'];
                $status = 1;

                if($newPass != $conPass){
                    echo 101;
                    exit();
                }else{
                    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND status = ?");
                    $stmt->bind_param("si",$email,$status);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if($result->num_rows > 0){

                        $data = mysqli_fetch_assoc($result);
                        $password = $data['password'];
                        
                        if(password_verify($oldPass,$password)){
                            $hashedPassword = password_hash($newPass, PASSWORD_DEFAULT);
                            $stmt1 = $conn->prepare("UPDATE users SET password = ? WHERE id = ? AND status = ?");
                            $stmt1->bind_param("sii",$hashedPassword,$id,$status);
                            $stmt1->execute();

                            if($stmt1->affected_rows > 0){
                                echo 202;
                            }

                        }else{
                            echo 102;
                        }   
                    }
                }

                
                break;
                default:
                echo "Invailed Scrope";
            }
        }
    }

?>
