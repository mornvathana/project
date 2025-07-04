<?php
    include('../config/dbcon.php');
    include('../function/myfunction.php');
    if(isset($_SESSION['auth_user'])){
        $user_id = $_SESSION['auth_user']['user_id'];
    }
    // handle ip
    $ip = getUserIP();

    if(isset($_SESSION['auth_user'])){
        $user_id = $_SESSION['auth_user']['user_id'];
    } 

    if(isset($_POST['scrope'])){
        $scrope = $_POST['scrope'];
        switch($scrope){
            case "delete_pid":
                $pid = $_POST['pid'];
                $del_pd = "DELETE FROM brands WHERE id = $pid";
                $del_pd_run = $conn->query($del_pd);
                if($del_pd_run){
                    echo "200";
                }else{
                    echo "400";
                }
            break;
            case "delete_category":
                $cid = $_POST['cid'];
                $del_cd = "DELETE FROM product_detail WHERE id = $cid";
                $del_cd_run = $conn->query($del_cd);
                if($del_cd_run){
                    // 
                    $text = "Delete Category ID : ". $cid;
                    activity_log($user_id,$text,$ip);

                    echo 202;
                }else{
                    echo 400;
                }
            break;
            case "delete_user":
                $cid = $_POST['user_id'];
                $del_cd = "DELETE FROM users WHERE id = $cid";
                $del_cd_run = $conn->query($del_cd);
                if($del_cd_run){
                    echo "150";
                }else{
                    echo "400";
                }
            break;
            case "close_active":
            $status = $_POST['status'];
            $userid = $_POST['userid'];
            $update_status = "UPDATE users SET status = $status WHERE id = $userid AND role_as = 1";
            $update_run = $conn->query($update_status);
            if($update_run == false){
                echo 404;
            }else{
                echo 200;   
            }
            break;
            case "open_active":
            $status = $_POST['status'];
            $userid = $_POST['userid'];
            $update_status = "UPDATE users SET status = $status WHERE id = $userid AND role_as = 1";
            $update_run = $conn->query($update_status);
            if($update_run == false){
                echo 404;
            }else{
                echo 200;   
            }
            break;
            case "change_proudct_name":
            $productName = $_POST['productName'];
            $userid = $_POST['userid'];
            $update_name = "UPDATE product_database SET product_name = '$productName' WHERE id = $userid ";
            $update_run = $conn->query($update_name);
            if($update_run == false){
                echo 404;
            }else{
                echo 200;   
            }
            break;
            case "deleteDimg":
                $id = $_POST['id'];
                $img = $_POST['img'];
                $stmt = $conn->prepare("SELECT demo_image FROM product_image WHERE product_id = ?");
                $stmt->bind_param("i",$id);
                $stmt->execute();
                $result = $stmt->get_result()->fetch_assoc();

                $old_image = explode(",",$result['demo_image']);
                $update_img = array_diff($old_image,[$img]);
                $update_image = implode(',',$update_img);

                // update image to database 
                $update = $conn->prepare("UPDATE product_image SET demo_image = ? WHERE product_id = ? ");
                $update->bind_param("si",$update_image,$id);

                if($update->execute()){
                    $path = '../uploads/category/'.$img;
                    $full_path = realpath($path);
                    if(file_exists($full_path)){
                        unlink($full_path);
                        echo 200; // Success
                    }else{
                        echo 404; // File not found
                    }

                }
            break;    
            case "deleteDimgInfo":
                $id = 1;
                $img = $_POST['img'];
                $stmt = $conn->prepare("SELECT slide_image FROM information_website WHERE id = ?");
                $stmt->bind_param("i",$id);
                $stmt->execute();
                $result = $stmt->get_result()->fetch_assoc();

                $old_image = explode(",",$result['slide_image']);
                $update_img = array_diff($old_image,[$img]);
                $update_image = implode(',',$update_img);

                // update image to database 
                $update = $conn->prepare("UPDATE information_website SET slide_image = ? WHERE id = ? ");
                $update->bind_param("si",$update_image,$id);

                if($update->execute()){
                    $path = '../uploads/webinfo/'.$img;
                    $full_path = realpath($path);
                    if(file_exists($full_path)){
                        unlink($full_path);
                        echo 200; // Success
                    }else{
                        echo 404; // File not found
                    }

                }
            break;   
            case "deleteOrder":
                $id = $_POST['id'];
                $delete = $conn->prepare("DELETE FROM orders WHERE id = ?");
                $delete->bind_param('i',$id);
                if($delete->execute()){
                    echo 202;
                }else{
                    echo 404;
                }
                break;
            default;
            echo "invalid scrope";
        }
    };
?>