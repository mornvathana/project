<?php 
include('includes/header.php');
include('../middleware/adminAccess.php');
include("lang.php");
if(isset($_GET['id'])){
    $user_id = $_GET['id'];
    $user_detail = getUser("id",$user_id);
}
$permission = permission($user_id);

?>
        <!-- end header -->
        <div class = "h-full px-2 py-2 bg-[#f3f5f7] overflow-hidden">
        <div class = "w-full h-[100vh] rounded-md p-5">
                <div class = "w-full h-[8%] flex justify-between items-center">
                    <div>
                        <h1 class = "font-medium"><?php echo $text['changeinformation']?></h1>
                    </div>
                    <div>
                        <a href = "useradmin.php" class = "bg-blue-500 text-[12px] text-white px-2 py-1 font-medium rounded-md"><i class="fa-solid fa-arrow-left pr-1"></i><?php echo $text['back']?></a>
                    </div>
                </div>
                <div class="w-full h-[100%] mt-5 bg-[#ffffff] p-4 rounded-md">
                    <?php
                        if(mysqli_num_rows($user_detail) > 0){
                            foreach($user_detail as $user){
                            ?>
                            <form action="code.php" method = "post" class = "body-circle" enctype = "multipart/form-data">
                                <div class = "w-full md:flex gap-5 ">
                                <div class  = "w-full md:w-[50%]">
                                <div class = "w-full">
                                    <input type="hidden" name = "userid" value = "<?= $user['id']?>" readonly>
                                    <input type="hidden" name="page_id" value = "<?= $user_id ?>">
                                    <label for="username" class = "block py-1 text-[13px]"><?php echo $text['name']?></label>
                                    <input type="text" name = "username" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" id = "username" value = "<?= $user['name']?>" placeholder = "<?php echo $text['name']?>">
                                </div>
                                <div class = "w-full">
                                    <label for="email" class = "block py-1 text-[13px]"><?php echo $text['email']?></label>
                                    <input type="email" name = "email" id = "email"  value = "<?= $user['email']?>" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" placeholder = "<?php echo $text['email']?>">
                                </div>
                                <div class = "w-full">
                                    <label for="password" class = "block py-1 text-[13px]"><?php echo $text['password']?></label>
                                    <input type="password" name = "new_password" id = "password" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" placeholder = "<?php echo $text['password']?>">
                                </div>
                                <div class = "w-full">
                                    <label for="con_password" class = "block py-1 text-[13px] w-full"><?php echo $text['conpassword']?></label>
                                    <input type="password" name = "con_password"  id = "con_password" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" placeholder = "<?php echo $text['conpassword']?>">
                                </div>
                                </div>
                                <div class = "w-full md:w-[50%] h-[170px]">
                                <div class = "w-full">
                                    <p class = "py-1 text-[15px] pl-3"><?php echo $text['uploads']?></p>
                                </div>
                                <div class = "w-full h-full flex">
                                <div class = "w-full md:w-[50%] flex justify-center items-center none">
                                    <div class="w-[90%] border border-[1px] border-dashed border-blue-900 h-[70%] lg:h-[100%] rounded-md">
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
                                <div class = "w-full md:w-[50%] flex justify-center items-center relative">
                                <div class="w-[80%] border-dotted p-4 border-[2px] border-blue-900 h-[70%] lg:h-[100%] rounded-md">
                                    <input type="file" name = "image" id = "profile_image" accept="image/*" class = "w-full h-full hidden" required>
                                </div>
                                <label for="profile_image" class = "absolute text-sm left-[40%] w-full  "><?php echo $text['selectimage']?> <i class="fa-solid fa-image"></i></label>
                                </div>
                                </div> 
                                <div class="w-full lg:mt-5 flex justify-end items-center pr-5">
                                <button type = "submit" name = "change_password" class = "bg-blue-500 text-white px-2 py-1 font-medium rounded-md"><?php echo $text['submit']?></button>
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