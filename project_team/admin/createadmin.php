<?php 
include('includes/header.php');
if(isset($_GET['id'])){
    $_SESSION['id'] = $_GET['id'];
    }
    if(isset($_SESSION['id'])){
        $user_id = $_SESSION['id'];
        $user_detail = getUser("id",$user_id);
    }

?>
    <div class = "h-full px-2 py-2 bg-blue-50">
    <div class = "w-full bg-[#ffffff] h-[100vh] rounded-md p-5">
            <div class = "w-full h-[8%] flex justify-between items-center">
                <div>
                    <h1 class = "font-medium">Create Admin</h1>
                </div>
                <div>
                    <a href = "useradmin.php" class = "bg-blue-500 text-[12px] text-white px-2 py-1 font-medium rounded-md"><i class="fa-solid fa-arrow-left pr-1"></i>Back</a>
                </div>
            </div>
            <div class="w-full h-[92%] mt-5">
            <?php
                if(mysqli_num_rows($user_detail) > 0){
                    foreach($user_detail as $user){
                        ?>
                        <form action="code.php" method = "post" class = "body-circle" enctype = "multipart/form-data">
                    <div class = "w-full md:flex ">
                    <div class  = "w-full md:w-[50%]">
                    <div class = "w-full">
                        <input type="hidden" name = "userid" value = "<?= $user['id']?>" readonly>
                        <input type="hidden" name="page_id" >
                        <label for="username" class = "block py-1 text-[15px]">Username</label>
                        <input type="text" name = "username" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" id = "username" placeholder = "Username">
                    </div>
                    <div class = "w-full">
                        <label for="email" class = "block py-1 text-[15px]">Email</label>
                        <input type="email" name = "email" id = "email"  class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" placeholder = "Email">
                    </div>
                    <div class = "w-full">
                        <label for="password" class = "block py-1 text-[15px]">Password</label>
                        <input type="password" name = "new_password" id = "password" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" placeholder = "Password">
                    </div>
                    <div class = "w-full">
                        <label for="con_password" class = "block py-1 text-[15px]">Confirm Password</label>
                        <input type="password" name = "con_password"  id = "con_password" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" placeholder = "Confirmed password">
                    </div>
                    </div>
                    <div class = "w-full md:w-[50%] h-[180px]">
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
                            " id = "showImage" class = "w-full h-full object-contain" alt="">
                            <input type="hidden" name="old_image" value = "<?= $user['image'] ?>" >
                        </div>
                    </div> 
                    <div class = "w-[50%] flex justify-center items-center relative">
                    <div class="w-[80%] border-dotted p-4 border-[2px] border-blue-900 h-[100%] rounded-md">
                        <input type="file" name = "image" id = "profile_image" accept="image/*" class = "w-full h-full hidden" required>
                    </div>
                    <label for="profile_image" class = "absolute text-sm ">Select Image <i class="fa-solid fa-image"></i></label>
                    </div>
                    </div>
                    <div class="w-full mt-3 flex justify-end items-center pr-5">
                    <button type = "submit" name = "create_admin" class = "bg-blue-500 text-white px-2 py-1 font-medium rounded-md">Submit</button>
                    </div>
                    </div>
                    </div>
                    </div>
                    </form>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
        <!-- for image -->
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