<?php
    session_start();
    include('userfunction.php');
    $conn = new mysqli("localhost","root","","ecommerce_data");
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
                    $check_exising_cart = "SELECT * FROM cart WHERE category_id = '$prod_id' AND user_id = '$user_id'";
                    $check_exising_cart_run = $conn->query($check_exising_cart);
                    if($check_exising_cart_run->num_rows > 0){
                        echo 400;
                    }else{
                        $insert_product = "INSERT INTO cart (category_id, user_id, product_name, product_price, product_image, product_qty) 
                        VALUES ('$prod_id', '$user_id', '$prod_name', '$prod_price', '$prod_image', '$prod_qty')";
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
                default:
                echo "Invailed Scrope";
            }
        }
    }

?>
