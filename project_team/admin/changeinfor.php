<?php 
include('includes/header.php');

if(isset($_GET['id'])){
    $user_id = $_GET['id'];
    $user_detail = getUser("id",$user_id);
}

?>
        <!-- end header -->
        <div class = "h-full px-2 py-2 bg-blue-50">
            <div class = "box-circle">  
                <div class = "header-circle">
                    <p>Change Password</p>
                    <p class = 'bg-blue-500 text-white px-1 h-7 text-center cursor-pointer rounded-md'><a href="useradmin.php">Back</a> <i class="fa-solid fa-arrow-right-to-bracket"></i></p>
                </div>
                <!-- form -->
                <div class = "w-full">
                <?php
                if(mysqli_num_rows($user_detail) > 0){
                    foreach($user_detail as $user){
                        ?>
                        <form action="code.php" method = "post" class = "body-circle" enctype = "multipart/form-data">
                            <div class = "frm ">
                                <label for="">Name</label>
                                <input type="text" name = "cate_name" value = "<?= $user['name']?>" readonly>
                                <input type="hidden" name = "userid" value = "<?= $user['id']?>" readonly>
                                <input type="hidden" name="page_id" value = "<?= $user_id ?>">
                                <label for="">Email</label>
                                <input type="text" name = "cate_small_des" readonly value = "<?= $user['email']?>">
                                <label for="">New Password</label>
                                <input type="password" name = "new_password" required placeholder="Enter your new password...">
                                <label for="">Confirm Password</label>
                                <input type="password" name = "con_password" required placeholder="Enter your confirm password...">
                                <button type = "submiit" class = "px-3 py-1 rounded-sm shadow-sm text-md bg-blue-500 text-white mt-4" name = "change_password" >Submit</button>
                            </div>
                        </form>
                        <?php
                    }
                }
                ?>
                </div>
            </div>
        </div>
    <!--  -->
<?php include('includes/footer.php')?>