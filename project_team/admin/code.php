<?php
    include('../config/dbcon.php');
    include('../function/myfunction.php');

    if(isset($_POST['product_add'])){
        $pd_name = $_POST['product_name'];
        $pd_title = $_POST['product_title'];
        $pd_price = $_POST['product_price'];
        $pd_status = isset($_POST['product_status']) ? '1' : '0';
        $image = $_FILES['product_image']['name'];
        // for upload image
        $path = "../upload";
        $image_ext = pathinfo($image,PATHINFO_EXTENSION);
        $filename = time().'.'.$image_ext;

        $pd_query = "INSERT INTO product_db (id, product_name, product_title, product_image, product_price, product_status) VALUES(null,'$pd_name','$pd_title','$filename','$pd_price','$pd_status')";
        $pd_query_run = mysqli_query($conn,$pd_query);
        if ($pd_query_run) {
            move_uploaded_file($_FILES['product_image']['tmp_name'], $path . '/' . $filename);
            redirect('product.php', 'We have added the product!');
        } else{
            redirect('product.php', 'Something went wrong!');
        } 
    }else if(isset($_POST['category_save'])){
        $cate_name = $_POST['cate_name'];
        $product_id = $_POST['product_id'];
        $cate_small_des = $_POST['cate_small_des'];
        $cate_sell_price = $_POST['cate_sell_price'];
        $cate_original_price = $_POST['cate_original_price'];
        $cate_promotion = $_POST['cate_promotion'];
        $cate_warrenty = $_POST['cate_warrenty'];
        $cate_color = $_POST['cate_color'];
        $cate_ram = $_POST['cate_ram'];
        $cate_memory = $_POST['cate_memory'];
        $cate_announed = $_POST['cate_announed'];
        $cate_status = $_POST['cate_status'];
        $cate_slot = $_POST['cate_slot'];
        $cate_internal = $_POST['cate_internal'];
        $cate_techno = $_POST['cate_techno'];
        $cate_3G = $_POST['cate_3G'];
        $cate_4G = $_POST['cate_4G'];
        $cate_speed = $_POST['cate_speed'];
        $cate_dimensions = $_POST['cate_dimensions'];
        $cate_weight = $_POST['cate_weight'];
        $cate_sim = $_POST['cate_sim'];
        $cate_dual = $_POST['cate_dual'];
        $cate_feature = $_POST['cate_feature'];
        $cate_video_cam = $_POST['cate_video_cam'];
        $cate_single_selfie = $_POST['cate_single_selfie'];
        $cate_video_selfie = $_POST['cate_video_selfie'];
        $cate_battery_type = $_POST['cate_battery_type'];
        $cate_battery_charging = $_POST['cate_battery_charging'];
        $cate_color_phone = $_POST['cate_color_phone'];
        $cate_model = $_POST['cate_model'];
        // handle image
        $cate_image = $_FILES['cate_image']['name'];
        $cate_de_image = $_FILES['cate_de_image']['name'];

        $path = "../uploads";  // Add semicolon here
        $image_ext = pathinfo($cate_image, PATHINFO_EXTENSION);
        $filename1 = time() . '.' . $image_ext;
        $image_ext = pathinfo($cate_de_image, PATHINFO_EXTENSION);
        $filename2 = time() . '.' . $image_ext;
        // end handle image
        $sql = "INSERT INTO category_db (product_id, name, small_des, ram, sell_price, original_price, promotion, warranty, color, image, demo_image, announced, Satus, card_slot, internal, technology, 3G, 4G, speed, dimensions, weight, sim, dual_camera, features, video_camera, single_selfie, video_selfie, battery_type, battery_charging, color_phone, model) 
        VALUES ('$product_id', '$cate_name', '$cate_small_des', '$cate_ram', '$cate_sell_price', '$cate_original_price', '$cate_promotion', '$cate_warrenty', '$cate_color', '$filename1', '$filename2', '$cate_announed', '$cate_status', '$cate_slot', '$cate_internal', '$cate_techno', '$cate_3G', '$cate_4G', '$cate_speed', '$cate_dimensions', '$cate_weight', '$cate_sim', '$cate_dual', '$cate_feature', '$cate_video_cam', '$cate_single_selfie', '$cate_video_selfie', '$cate_battery_type', '$cate_battery_charging', '$cate_color_phone', '$cate_model')";
        $sql_run = mysqli_query($conn,$sql);
        if($sql_run){
            move_uploaded_file($_FILES['cate_image']['tmp_name'], $path.'/'.$filename1);
            move_uploaded_file($_FILES['cate_de_image']['tmp_name'], $path.'/'.$filename2);
            redirect('category.php', 'We have added category!');
        }else{
            redirect('category.php', 'Something went wrong!');
        }
    }else if(isset($_POST['category_update'])){
        $cate_name = $_POST['cate_name'];
        $product_id = $_POST['product_id'];
        $cate_small_des = $_POST['cate_small_des'];
        $cate_sell_price = $_POST['cate_sell_price'];
        $cate_original_price = $_POST['cate_original_price'];
        $cate_promotion = $_POST['cate_promotion'];
        $cate_warrenty = $_POST['cate_warrenty'];
        $cate_color = $_POST['cate_color'];
        $cate_ram = $_POST['cate_ram'];
        $cate_memory = $_POST['cate_memory'];
        $cate_announed = $_POST['cate_announed'];
        $cate_status = $_POST['cate_status'];
        $cate_slot = $_POST['cate_slot'];
        $cate_internal = $_POST['cate_internal'];
        $cate_techno = $_POST['cate_techno'];
        $cate_3G = $_POST['cate_3G'];
        $cate_4G = $_POST['cate_4G'];
        $cate_speed = $_POST['cate_speed'];
        $cate_dimensions = $_POST['cate_dimensions'];
        $cate_weight = $_POST['cate_weight'];
        $cate_sim = $_POST['cate_sim'];
        $cate_dual = $_POST['cate_dual'];
        $cate_feature = $_POST['cate_feature'];
        $cate_video_cam = $_POST['cate_video_cam'];
        $cate_single_selfie = $_POST['cate_single_selfie'];
        $cate_video_selfie = $_POST['cate_video_selfie'];
        $cate_battery_type = $_POST['cate_battery_type'];
        $cate_battery_charging = $_POST['cate_battery_charging'];
        $cate_color_phone = $_POST['cate_color_phone'];
        $cate_model = $_POST['cate_model'];
        // handle image
        $cate_image = $_FILES['cate_image']['name'];
        $cate_de_image = $_FILES['cate_de_image']['name'];

        $path = "../uploads";  // Add semicolon here
        $image_ext = pathinfo($cate_image, PATHINFO_EXTENSION);
        $filename1 = time() . '.' . $image_ext;
        $image_ext = pathinfo($cate_de_image, PATHINFO_EXTENSION);
        $filename2 = time() . '.' . $image_ext;
        // end handle image
        $sql = "INSERT INTO category_db (product_id, name, small_des, ram, sell_price, original_price, promotion, warranty, color, image, demo_image, announced, Satus, card_slot, internal, technology, 3G, 4G, speed, dimensions, weight, sim, dual_camera, features, video_camera, single_selfie, video_selfie, battery_type, battery_charging, color_phone, model) 
        VALUES ('$product_id', '$cate_name', '$cate_small_des', '$cate_ram', '$cate_sell_price', '$cate_original_price', '$cate_promotion', '$cate_warrenty', '$cate_color', '$filename1', '$filename2', '$cate_announed', '$cate_status', '$cate_slot', '$cate_internal', '$cate_techno', '$cate_3G', '$cate_4G', '$cate_speed', '$cate_dimensions', '$cate_weight', '$cate_sim', '$cate_dual', '$cate_feature', '$cate_video_cam', '$cate_single_selfie', '$cate_video_selfie', '$cate_battery_type', '$cate_battery_charging', '$cate_color_phone', '$cate_model')";
        $sql_run = mysqli_query($conn,$sql);
        if($sql_run){
            move_uploaded_file($_FILES['cate_image']['tmp_name'], $path.'/'.$filename1);
            move_uploaded_file($_FILES['cate_de_image']['tmp_name'], $path.'/'.$filename2);
            redirect('category.php', 'We have added category!');
        }else{
            redirect('category.php', 'Something went wrong!');
        }
    }
    else if(isset($_POST['change_password'])){
        $conn = new mysqli("localhost","root","","ecommerce_data");
        $pageId = $_POST['page_id'];
        $userId = $_POST['userid'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $newPassword = $_POST['new_password'];
        $conPassword = $_POST['con_password'];
        $old_image = $_POST['old_image'];
        $size = $_FILES['image']['size'];
        $image = $_FILES['image']['name'];

        $path = "../uploads/admin";  
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);

        if($size > 100 * 1024){

            redirect1("changeinfor.php?id=$pageId","Please upload new image!");

        }else{

            if(!empty($newPassword) && strlen($newPassword) < 8){

                redirect1("changeinfor.php?id=$pageId","Your new password must be at least 8 characters long.");

            }else{

            $check_pass = "SELECT * FROM users WHERE password = '$newPassword' ";
            $check_pass_run = $conn->query($check_pass);

            if($check_pass_run->num_rows > 0){

                redirect1("changeinfor.php?id=$pageId","it's the same as your old password!");

            }else{

                if( !empty($newPassword) && $newPassword != $conPassword){
                    redirect1("changeinfor.php?id=$pageId","Your Password is not match!");
                }else{
                    // delete old image 
                    if(!empty($image)){
                        $img_data = "SELECT image FROM users WHERE id = $userId";
                        $img_data_run = $conn->query($img_data);
                        if($img_data_run->num_rows > 0){
                            $img_query = $img_data_run->fetch_assoc()['image'];
                            $img_path = $path . '/' . $img_query;
                            // remove image from folder 
                            if($img_query != $old_image && $img_query != "default.jpg" && file_exists($img_path)){
                                unlink($img_path);
                            }
                    }
                    }
                    // end delete image
                    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                    // for image if we got old image or not
                    if(!empty($image)){
                        $filename = time() . '.' . $image_ext;
                    }else{
                        $filename = $old_image;
                    }
                    $update_pass = "UPDATE users SET name = '$username',email = '$email', image = '$filename', password = '$hashedPassword'  WHERE id = $userId";
                    $update_pass_run = $conn->query($update_pass);
                    if($update_pass_run){
                        move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
                        redirect("useradmin.php","Update password sucessfully!");
                    }else{
                        redirect1("changeinfor.php?id=$pageId","Something went wrong!");
                    }
                }
            }
            }
        }

    }else if(isset($_POST['create_admin'])){
        $role_as = 1;
        $pageId = $_POST['userid'];
        $newPassword = $_POST['new_password'];
        $conPassword = $_POST['con_password'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        if(strlen($newPassword) < 8){
            redirect1("createadmin.php?id=$pageId","password must be at least 8 characters long.");
        }else{
            if($newPassword != $conPassword){
                redirect1("createadmin.php?id=$pageId","Your Password is not match!");
            }else{

                $email_check = "SELECT * FROM users WHERE email = '$email' AND role_as = $role_as";

                $email_check_run = $conn->query($email_check);
                if($email_check_run->num_rows > 0){
                    redirect1("createadmin.php?id=$pageId","Please use another email!");
                }else{
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                
                $stmt = $conn->prepare("INSERT INTO users (name, email, password, role_as) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("sssi", $username, $email, $hashedPassword, $role_as);
                $register_run = $stmt->execute();
                
                if($register_run){
                    redirect("useradmin.php","Register Successfully!");
                }else{
                    redirect1("createadmin.php?id=$pageId","Something went wrong!");
                }
                }
            }
        }
    }else if(isset($_POST['add_brand'])){
        $userId = $_POST['userId'];
        $name = $_POST['name'];
        $size = $_FILES['image']['size'];
        $image = $_FILES['image']['name'];

        $path = "../uploads/brand";  
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time() . '.' . $image_ext;

        if($size > 100 * 1204){
            redirect1("brand.php","Please upload new image!");
        }else{
            $brand = "INSERT INTO brands (user_id,name,image) VALUES($userId,'$name','$filename')";
            $brand_run = $conn->query($brand);
            if($brand_run){
                move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
                redirect("branddisplay.php","Data added successfully!");
            }else{
                redirect1("brand.php","Something went wrong!");
            }
        }
    }else if(isset($_POST['btn_active'])){
        $status = 0;
        $brand_id = $_POST['brand_id'];
        $status = "UPDATE brands SET status = '$status' WHERE id = $brand_id";
        $status_run = $conn->query($status);

        if($status_run){
            redirect("branddisplay.php","Status updated successfully!");
        }else{
            redirect1("branddisplay.php","Something went wrong!");
        }
    }else if(isset($_POST['btn_disable'])){
        $status = 1;
        $brand_id = $_POST['brand_id'];
        $status = "UPDATE brands SET status = '$status' WHERE id = $brand_id";
        $status_run = $conn->query($status);

        if($status_run){
            redirect("branddisplay.php","Status updated successfully!");
        }else{
            redirect1("branddisplay.php","Something went wrong!");
        }
    }else if(isset($_POST['btn_delete'])){
        $brand_id = $_POST['brand_id'];
        $brand = "DELETE FROM brands WHERE id = $brand_id";
        $brand_run = $conn->query($brand);
        // image
        $old_image = $_POST['image'];
        $path = '../uploads/brand';
        $img_path = $path . '/' . $old_image;

        if($brand_run){
            unlink($img_path);
            redirect("branddisplay.php","Brand deleted successfully!");
        }else{
            redirect1("branddisplay.php","Something went wrong!");
        }
    }else if(isset($_POST['edit_brand'])){
        $userId = $_POST['userId'];
        $name = $_POST['name'];
        $old_image = $_POST['old_image'];
        $size = $_FILES['image']['size'];
        $image = $_FILES['image']['name'];

        $path = "../uploads/brand";  
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $img_path = $path . '/' . $old_image;

        if($size > 100 * 1204){
            redirect1("brandedit.php?id=$userId","Please upload new image!");
        }else{
            // delete old image 
            if(!empty($image)){
                unlink($img_path);
            }
            // for image if we got old image or not
            if(!empty($image)){
                $filename = time() . '.' . $image_ext;
            }else{
                $filename = $old_image;
            }
            $stmt = $conn->prepare("UPDATE brands SET name = ?, image = ? WHERE id = ?");
            $stmt->bind_param("ssi", $name, $filename, $userId);
            $brand_run = $stmt->execute();
            if($brand_run){
                move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
                redirect("branddisplay.php","Data edited successfully!");
            }else{
                redirect1("brandedit.php","Something went wrong!");
            }
        }
    }   
?>