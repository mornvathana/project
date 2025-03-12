<?php 
include('includes/header.php');

if(isset($_GET['id'])){
    $user_id = $_GET['id'];
    $user_detail = getUser("id",$user_id);
}

?>
        <!-- end header -->
        <div class = "h-full px-2 py-2 bg-blue-50">
        <div class = "w-full bg-[#ffffff] rounded-md p-5">
                <div class = "w-full h-[30%] flex justify-between items-center">
                    <div>
                        <h1 class = "font-medium">Change Informatoin</h1>
                    </div>
                    <div>
                        <a href = "useradmin.php" class = "bg-blue-500 text-white px-2 py-1 font-medium rounded-md">Back</a>
                    </div>
                </div>
                <div class="w-full h-[70%] mt-5">
                    <?php
                        if(mysqli_num_rows($user_detail) > 0){
                            foreach($user_detail as $user){
                            ?>
                            <form action="code.php" method = "post" class = "body-circle" enctype = "multipart/form-data">
                                <div class = "w-full flex ">
                                <div class  = "w-[50%]">
                                <div class = "w-full">
                                    <input type="hidden" name = "userid" value = "<?= $user['id']?>" readonly>
                                    <input type="hidden" name="page_id" value = "<?= $user_id ?>">
                                    <label for="username" class = "block py-1 text-[15px]">Username</label>
                                    <input type="text" name = "username" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" id = "username" value = "<?= $user['name']?>" placeholder = "Enter your username">
                                </div>
                                <div class = "w-full">
                                    <label for="email" class = "block py-1 text-[15px]">Email</label>
                                    <input type="email" name = "email" id = "email"  value = "<?= $user['email']?>" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" placeholder = "Enter your email">
                                </div>
                                <div class = "w-full">
                                    <label for="password" class = "block py-1 text-[15px]">Password</label>
                                    <input type="password" name = "new_password" id = "password" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" placeholder = "Enter your name">
                                </div>
                                <div class = "w-full">
                                    <label for="con_password" class = "block py-1 text-[15px]">Confirm Password</label>
                                    <input type="password" name = "con_password"  id = "con_password" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" placeholder = "Enter your name">
                                </div>
                                </div>
                                <div class = "w-[50%] h-[180px]">
                                <div class = "w-full">
                                    <p class = "py-1 text-[15px] pl-3">Upload Image</p>
                                </div>
                                <div class = "w-full h-full flex">
                                <div class = "w-[50%] flex justify-center items-center none">
                                    <div class="w-[90%] border border-[1px] border-dashed border-blue-900 h-[100%] rounded-md">
                                        <img src="
                                        <?php
                                            if(!empty($user['image'])){
                                                echo '../uploads/admin/' . $user['image'];
                                            }else{
                                                echo '../uploads/default/default.jpg';
                                            }
                                        ?>
                                        " id = "showImage" name = "old_image" class = "w-full h-full object-contain" alt="">
                                    </div>
                                </div> 
                                <div class = "w-[50%] flex justify-center items-center relative">
                                    <div class="w-[80%] border border-[1px] border-dashed border-blue-900 h-[100%] rounded-md">
                                        <input type="file" name = "image" value = "<?= $user['image'] ?>" id = "profile_image"  accept="image/*" class = "w-[100%] h-[100%] hidden ">
                                    </div>
                                    <label for="profile_image" class = "absolute text-sm ">Select Image</label>
                                </div> 
                                </div>
                                </div>
                                </div>
                                <div class="w-full mt-3 flex justify-end items-center pr-5">
                                <button type = "submit" name = "change_password" class = "bg-blue-500 text-white px-2 py-1 font-medium rounded-md">Submit</button>
                                </div>
                                </form>
                            <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <!-- <div class = "box-circle">  
                <div class = "header-circle">
                    <p>Change Password</p>
                    <p class = 'bg-blue-500 text-white px-1 h-7 text-center cursor-pointer rounded-md'><a href="useradmin.php">Back</a> <i class="fa-solid fa-arrow-right-to-bracket"></i></p>
                </div>
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
                                <button type = "submit" class = "px-3 py-1 rounded-sm shadow-sm text-md bg-blue-500 text-white mt-4" name = "change_password" >Submit</button>
                            </div>
                        </form>
                        <?php
                    }
                }
                ?>
                </div>
            </div> -->
        </div>
    <!--  -->
    <script>
        $(document).ready(function(){
            $("#profile_image").change(function(e){
                var readerView = new FileReader();
                readerView.onload = function(event){
                    $("#showImage").attr("src", event.target.result);
                }
                readerView.readAsDataURL(e.target.files[0]);
            });
        });
    </script>
<?php include('includes/footer.php')?>