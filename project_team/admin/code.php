<?php
    include('../config/dbcon.php');
    include('../function/myfunction.php');
    if(isset($_SESSION['auth_user'])){
        $user_id = $_SESSION['auth_user']['user_id'];
    }
    // handle ip
    $ip = getUserIP();

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
    }else if(isset($_POST['add_category'])){
        $barcode = $_POST['barcode'];
        $name = $_POST['name'];
        $original_price = $_POST['original_price'];
        $sell_price = $_POST['sell_price'];
        $specification = $_POST['specification'];
        $description = $_POST['description'];
        $brand = $_POST['brand'];
        $promotion = 1;

        $popular = in_array('popular',$_POST['option']) ? 1 : 0;
        $used = in_array('used',$_POST['option']) ? 1 : 0;
        $new = in_array('new',$_POST['option']) ? 1 : 0;

        $demo_image = ['demo_image']; 

        $size = $_FILES['image']['size'];
        $path = "../uploads/category"; 
        $image = $_FILES['image']['name']; 
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time() . '.' . $image_ext;


        $valid = true;
        $demo_images = [];

        foreach($_FILES['demo_image']['size'] as $key => $demo_size){
            if($demo_size > 1000 * 1024){
                $valid = false;
                break;
            }
        }

         if($size > 1000 * 1024 || !$valid){
            redirect1("category.php","Please upload new image!");
         }else{
            $category = "INSERT INTO product_detail (brand_id, promotion, barcode, name, original_price, sell_price) 
             VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($category);
            $stmt->bind_param("iiissi", $brand, $promotion, $barcode, $name, $original_price, $sell_price);
            $stmt->execute();
            
            if($stmt){
                $id = $conn->insert_id;
                // process demo image 
                foreach($_FILES['demo_image']['name'] as $key => $demo_name){
                    $demo_ext = pathinfo($demo_name, PATHINFO_EXTENSION);
                    $demo_filename = time() . '_' . $key . '.' . $demo_ext;
                    move_uploaded_file($_FILES['demo_image']['tmp_name'][$key], $path . '/' . $demo_filename);
                    $demo_images[] = $demo_filename;
                }
                $demo_images_string = implode(',',$demo_images);

                $category_image = "INSERT INTO product_image (product_id,specification,description,image,demo_image) VALUES(?,?,?,?,?)";
                $stmt1 = $conn->prepare($category_image);
                $stmt1->bind_param("issss",$id,$specification,$description,$filename,$demo_images_string);
                $stmt1->execute();
                
                if($stmt1){
                    // 
                    $id = $conn->insert_id;
                    $text = "Create category ID : ". $id;
                    activity_log($user_id,$text,$ip);

                    storeData($id,$popular,$used,$new,$user_id);

                    move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
                    redirect("category1.php","Data has created!");
                }else{
                    redirect1("category.php","Something went wrong!");
                }
            }

         }
        
       
    }else if(isset($_POST['category_update'])){
        $barcode = $_POST['barcode'];
        $id = $_POST['id'];
        $name = $_POST['name'];
        $original_price = $_POST['original_price'];
        $sell_price = $_POST['sell_price'];
        $specification = $_POST['specification'];
        $description = $_POST['description'];
        $brand = $_POST['brand'];
        $promotion = $_POST['promotion'];

        $popular = in_array('popular',$_POST['option']) ? 1 : 0;
        $used = in_array('used',$_POST['option']) ? 1 : 0;
        $new = in_array('new',$_POST['option']) ? 1 : 0;

        $old_image = $_POST['old_image'];
        $size = $_FILES['image']['size'];
        $image = $_FILES['image']['name'];

        $path = "../uploads/category";  
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);

        $demo_image = ['demo_image']; 
        $valid = true;
        $demo_images = [];

        foreach($_FILES['demo_image']['size'] as $key => $demo_size){
            if($demo_size > 100 * 1024){
                $valid = false;
                break;
            }
        }

         if($size > 100 * 1024 || !$valid){
            redirect1("category.php","Please upload new image!");
         }else{
            $stmt = $conn->prepare("UPDATE product_detail  SET brand_id = ?,  promotion = ?, barcode = ?,
            name = ?, original_price = ?, sell_price = ? WHERE id = ?");
            $stmt->bind_param("iiissii", $brand, $promotion, $barcode, $name, $original_price, $sell_price,$id);
            $stmt->execute();
            
            if($stmt){
                // process demo image 
                foreach($_FILES['demo_image']['name'] as $key => $demo_name){
                    $demo_ext = pathinfo($demo_name, PATHINFO_EXTENSION);
                    $demo_filename = time() . '_' . $key . '.' . $demo_ext;
                    move_uploaded_file($_FILES['demo_image']['tmp_name'][$key], $path . '/' . $demo_filename);
                    $demo_images[] = $demo_filename;
                }
                // check demo_image
                $demo_images_string = implode(',', $demo_images);            
                // delete old image 
                if(!empty($image)){
                    $img_data = "SELECT * FROM product_image WHERE id = $id";
                    $img_data_run = $conn->query($img_data);
                    if($img_data_run->num_rows > 0){
                        $img_query = $img_data_run->fetch_assoc()['image'];
                        $img_path = $path . '/' . $img_query;
                        // remove image from folder 
                        if( $img_query != "default.jpg" && file_exists($img_path)){
                            unlink($img_path);
                        }
                }
                }
                // end delete image
                if(!empty($image)){
                    $filename = time() . '.' . $image_ext;
                }else{
                    $filename = $old_image;
                }

                $stmt1 = $conn->prepare("UPDATE product_image SET specification = ?, 
                        description = ?, image = ?, demo_image = ? WHERE product_id = ?");
                $stmt1->bind_param("ssssi",$specification,$description,$filename,$demo_images_string,$id);
                $stmt1->execute();
                
                if($stmt1){
                    // 
                    $text = "Edit Category ID : ". $id;
                    activity_log($user_id,$text,$ip);

                    updatePdOption($popular,$used,$new,$id);

                    move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
                    redirect("category1.php","Data has updated!");
                }else{
                    redirect1("category.php","Something went wrong!");
                }
            }

         }
    }
    else if(isset($_POST['change_password'])){
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
                        // 
                        $text = "Update information Admin ID : ". $userId;
                        activity_log($user_id,$text,$ip);

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

        $size = $_FILES['image']['size'];
        $image = $_FILES['image']['name'];

        $path = "../uploads/admin";  
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);

        if($size > 100 * 1024){
            redirect1("createadmin.php?id=$pageId","Please input image less than 10KB");
        }else{
            if(strlen($newPassword) < 8){
                redirect1("createadmin.php?id=$pageId","password must be at least 8 characters long.");
            }else{
                if($newPassword != $conPassword){
                    redirect1("createadmin.php?id=$pageId","Your Password is not match!");
                }else{
    
                    $email_check = "SELECT * FROM users WHERE email = '$email' AND role_as = $role_as";
    
                    $email_check_run = $conn->query($email_check);
                    if($email_check_run->num_rows > 0){
                        redirect1("createadmin.php?id=$pageId","Please use another email");
                    }else{
                    $user_check = "SELECT * FROM users WHERE name = ?";
                    $stmt = $conn->prepare($user_check);
                    $stmt->bind_param("s",$username);
                    $stmt->execute();
                    $result = $stmt->get_result();
    
                    if($result->num_rows > 0){
                        redirect1("createadmin.php?id=$pageId","Please use another username");
                    }else{
                        
                        if(!empty($image)){
                            $filename = time() . '.' . $image_ext;
                        }else{
                            $filename = '../uploads/default/default.jpg';
                        }

                        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                        $stmt = $conn->prepare("INSERT INTO users (name, email,image, password, role_as) VALUES (?, ?,? , ?, ?)");
                        $stmt->bind_param("ssisi", $username, $email, $filename, $hashedPassword, $role_as);
                        $register_run = $stmt->execute();
                        if($register_run){
                            // 
                            $id = $conn->insert_id;
                            $text = "Create Admin ID : ". $id;
                            activity_log($user_id,$text,$ip);

                            move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
                            // update in permision user_Id 
                            redirect("useradmin.php","Register Successfully!");
                        }else{
                            redirect1("createadmin.php?id=$pageId","Something went wrong!");
                        }
                    }
                    }
                }
            }
        }
        
    }else if(isset($_POST['add_brand'])){
        $userId = $_POST['userId'];
        $name = $_POST['name'];
        $productId = $_POST['product'];
        $size = $_FILES['image']['size'];
        $image = $_FILES['image']['name'];

        $path = "../uploads/brand";  
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time() . '.' . $image_ext;

        if($size > 100 * 1204){
            redirect1("brand.php","Please upload new image!");
        }else{
            $brand = "INSERT INTO brands (user_id,product_id,name,image) VALUES($userId,$productId,'$name','$filename')";
            $brand_run = $conn->query($brand);
            if($brand_run){
                // 
                $id = $conn->insert_id;
                $text = "Create brand ID : ". $id;
                activity_log($user_id,$text,$ip);

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
            // 
            $text = "Delete product ID : ". $brand_id;
            activity_log($user_id,$text,$ip);

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
                // 
                $text = "Edit brand ID : ". $userId;
                activity_log($user_id,$text,$ip);

                move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
                redirect("branddisplay.php","Data edited successfully!");
            }else{
                redirect1("brandedit.php","Something went wrong!");
            }
        }
    }else if(isset($_POST['add_product'])){
        $userId = $_POST['userId'];
        $name = $_POST['name'];
        $size = $_FILES['image']['size'];
        $image = $_FILES['image']['name'];

        $path = "../uploads/product";  
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time() . '.' . $image_ext;

        if($size > 100 * 1204){
            redirect1("menu.php","Please upload new image!");
        }else{
            $brand = "INSERT INTO product (user_id,name,image) VALUES($userId,'$name','$filename')";
            $brand_run = $conn->query($brand);
            if($brand_run){
                // user activity log 
                $id = $conn->insert_id;
                $text = "Create product ID : ". $id;
                activity_log($user_id,$text,$ip);

                move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
                redirect("menu.php","Data added successfully!");
            }else{
                redirect1("createmenu.php","Something went wrong!");
            }
        }
    }else if(isset($_POST['btn_active1'])){
        $status = 0;
        $brand_id = $_POST['brand_id'];
        $status = "UPDATE product SET status = '$status' WHERE id = $brand_id";
        $status_run = $conn->query($status);

        if($status_run){
            redirect("menu.php","Status updated successfully!");
        }else{
            redirect1("menu.php","Something went wrong!");
        }
    }else if(isset($_POST['btn_disable1'])){
        $status = 1;
        $brand_id = $_POST['brand_id'];
        $status = "UPDATE product SET status = '$status' WHERE id = $brand_id";
        $status_run = $conn->query($status);

        if($status_run){
            redirect("menu.php","Status updated successfully!");
        }else{
            redirect1("menu.php","Something went wrong!");
        }
    }else if(isset($_POST['product_delete'])){
        $product_id = $_POST['product_id'];
        $product = "DELETE FROM product WHERE id = $product_id";
        $brand_run = $conn->query($product);
        // image
        $old_image = $_POST['image'];
        $path = '../uploads/product';
        $img_path = $path . '/' . $old_image;

        if($brand_run){
            // 
            $text = "Delete product ID : ". $product_id;
            activity_log($user_id,$text,$ip);

            unlink($img_path);
            redirect("menu.php","Product deleted successfully!");
        }else{
            redirect1("menu.php","Something went wrong!");
        }
    }else if(isset($_POST['edit_product'])){
        $userId = $_POST['userId'];
        $name = $_POST['name'];
        $old_image = $_POST['old_image'];
        $size = $_FILES['image']['size'];
        $image = $_FILES['image']['name'];

        $path = "../uploads/product";  
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $img_path = $path . '/' . $old_image;

        if($size > 100 * 1204){
            redirect1("menuedit.php?id=$userId","Please upload new image!");
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
            $stmt = $conn->prepare("UPDATE product SET name = ?, image = ? WHERE id = ?");
            $stmt->bind_param("ssi", $name, $filename, $userId);
            $brand_run = $stmt->execute();
            if($brand_run){
                // 
                $text = "Edit product ID : ". $userId;
                activity_log($user_id,$text,$ip);

                move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
                redirect("menu.php","Data edited successfully!");
            }else{
                redirect1("menuedit.php?id=$userId","Something went wrong!");
            }
        }
    }else if(isset($_POST['updateweb'])){
        $phonenumber = $_POST['phonenumber'];
        $telegram = $_POST['telegram'];
        $address = $_POST['address'];
        $id = 1;

        $old_image = $_POST['old_image'];
        $item_demo = $_POST['item_demo'];

        $size = $_FILES['image']['size'];
        $image = $_FILES['image']['name'];

        $path = "../uploads/webinfo";  
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);

        $demo_image = $_FILES['demo_image']; 
        $valid = true;
        $demo_images = [];

        foreach($_FILES['demo_image']['size'] as $key => $demo_size){
            if($demo_size > 100 * 1024){
                $valid = false;
                break;
            }
        }

         if($size > 100 * 1024 || !$valid){
            redirect1("webinfo.php","Please upload new image!");
         }else{
        // process demo image 
        foreach($_FILES['demo_image']['name'] as $key => $demo_name){
            $demo_ext = pathinfo($demo_name, PATHINFO_EXTENSION);
            $demo_filename = time() . '_' . $key . '.' . $demo_ext;
            move_uploaded_file($_FILES['demo_image']['tmp_name'][$key], $path . '/' . $demo_filename);
            $demo_images[] = $demo_filename;
        }
        $demo_images_string = implode(',', $demo_images);  
              
        // delete old image 
        if(!empty($image)){
            $img_data = "SELECT * FROM information_website WHERE id = $id";
            $img_data_run = $conn->query($img_data);
            if($img_data_run->num_rows > 0){
                $img_query = $img_data_run->fetch_assoc()['logo'];
                $img_path = $path . '/' . $img_query;
                // remove image from folder 
                if( $img_query != "default.jpg" && file_exists($img_path)){
                    unlink($img_path);
                }
            }
        }
        // end delete image
        if(!empty($image)){
            $filename = time() . '.' . $image_ext;
        }else{
            $filename = $old_image;
        }

        if(!empty($_FILES['demo_image']['name'][0])){

            $img_data = "SELECT * FROM information_website WHERE id = $id";
            $img_data_run = $conn->query($img_data);
            if($img_data_run->num_rows > 0){
                
                $image_string = $img_data_run->fetch_assoc()['slide_image'];
                $image_array = explode(",",$image_string);
                foreach($image_array as $img){
                    $img_path = $path . '/' . $img;

                    if( $img != "default.jpg" && file_exists($img_path)){
                    unlink($img_path);
                }
                }
            }
                
            $demo = $demo_images_string;
        }else{
            $demo = $item_demo;
        }    

        $stmt = $conn->prepare("UPDATE information_website  SET phone_number = ?, telegram_number = ?, logo = ?,
        slide_image = ?, address = ? WHERE id = ?");
        $stmt->bind_param("iisssi", $phonenumber, $telegram, $filename,$demo,$address,$id);
        $stmt->execute();
        
        if($stmt){
            // 
            $text = "Update information web";
            activity_log($user_id,$text,$ip);

            move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
            redirect("webinfo.php","Data has updated!");
        }else{
            redirect1("webinfo.php","Something went wrong!");
        }

        }
    }else if(isset($_POST['btn_active_user'])){
        $status = 0;
        $brand_id = $_POST['brand_id'];
        $status = "UPDATE users SET status = '$status' WHERE id = $brand_id";
        $status_run = $conn->query($status);

        if($status_run){
            $text = "Disable User ID : ". $brand_id;
            activity_log($user_id,$text,$ip);
            redirect("userclient.php","Status updated successfully!");
        }else{
            redirect1("userclient.php","Something went wrong!");
        }
    }else if(isset($_POST['btn_disable_user'])){
        $status = 1;
        $brand_id = $_POST['brand_id'];
        $status = "UPDATE users SET status = '$status' WHERE id = $brand_id";
        $status_run = $conn->query($status);

        if($status_run){
            $text = "Active User ID : ". $brand_id;
            activity_log($user_id,$text,$ip);

            redirect("userclient.php","Status updated successfully!");
        }else{
            redirect1("userclient.php","Something went wrong!");
        }
    }else if(isset($_POST['product_delete_user'])){
        $product_id = $_POST['product_id'];
        $product = "DELETE FROM users WHERE id = $product_id";
        $brand_run = $conn->query($product);

        if($brand_run){
            // 
            $text = "Delete product ID : ". $product_id;
            activity_log($user_id,$text,$ip);

            redirect("userclient.php","Users deleted successfully!");
        }else{
            redirect1("userclient.php","Something went wrong!");
        }
    }
?>