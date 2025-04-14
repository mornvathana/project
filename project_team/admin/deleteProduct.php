<?php
    $conn = new mysqli("localhost","root","","ecommerce_data");
    if(isset($_POST['scrope'])){
        $scrope = $_POST['scrope'];
        switch($scrope){
            case "delete_pid":
                $pid = $_POST['pid'];
                $del_pd = "DELETE FROM product_database WHERE id = $pid";
                $del_pd_run = $conn->query($del_pd);
                if($del_pd_run){
                    echo "200";
                }else{
                    echo "400";
                }
            break;
            case "delete_category":
                $cid = $_POST['cid'];
                $del_cd = "DELETE FROM category_db WHERE id = $cid";
                $del_cd_run = $conn->query($del_cd);
                if($del_cd_run){
                    echo "150";
                }else{
                    echo "400";
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
            case "filterData";
                $product = $_POST['product_item'] ?? null;
                $category = $_POST['category_item'] ?? null;
                $brand = $_POST['brand_item'] ?? null;
                //
                $where = [];

                if (!empty($product)) {
                    $where[] = "product_id = '$product'";
                }
                if (!empty($category)) {  
                    $where[] = "name = '$category'";
                }
                if (!empty($brand)) {  
                    $where[] = "name = '$brand'";
                }

                $condition = !empty($where) ? "WHERE " . implode(" AND ", $where) : "";
                $sql = "SELECT * FROM category_db $condition";
                $sql_filter = $conn->query($sql);


                if($sql_filter == false){
                    echo 505;
                }else{
                    $data = [];
                    if($sql_filter->num_rows > 0){
                      while($row = $sql_filter->fetch_assoc()){
                          $data[] = $row;
                      }
                      echo json_encode($data);
                    }else{
                        echo 404;
                    }
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
            default;
            echo "invalid scrope";
        }
    };
?>