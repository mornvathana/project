<?php 
include('includes/header.php');
 if($_SESSION['auth_user']){
    $userId = $_SESSION['auth_user']['user_id'];
 }
 if($_GET['id']){
    $brand_id = $_GET['id'];
    $brand_data = getById("product",$brand_id);
 }
?>
        <!-- end header -->
        <div class = "h-full px-2 py-2 bg-blue-50">
            <div class = "w-full bg-[#ffffff] h-[100vh] rounded-md p-5">
                <div class = "w-full h-[10%] flex justify-between items-center">
                    <div>
                        <h1 class = "font-medium">Edit Product</h1>
                    </div>
                    <div>
                        <a href = "menu.php" class = "bg-blue-500 text-[12px] text-white px-2 py-1 font-medium rounded-md"><i class="fa-solid fa-arrow-left pr-1"></i>Back</a>
                    </div>
                </div>
                <div class="w-full h-[70%] mt-5">
                   <?php
                    foreach($brand_data as $brand_item){
                    ?>
                    <form action="code.php" method = "post" enctype = "multipart/form-data">
                        <div class = "w-full grid grid-cols-1 md:grid-cols-2 gap-5 ">
                        <div class = "">
                            <input type="hidden" name="userId" value = "<?= $brand_item['id']?>">
                            <label for="name" class = "block py-1 text-[13px]">Name</label>
                            <input type="text" name = "name" value = "<?= $brand_item['name']?>" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" placeholder = "Enter your name" required>
                        </div>
                        <div class = " h-[180px] flex">
                        <label for="name" class = "block py-1 text-[13px]">Uploads<span class = "text-red-500">*</span></label>
                           <div class = "w-[60%] flex justify-center items-center">
                                <div class="w-[60%] border-dotted border-[2px] p-1 border-blue-900 h-[100%] rounded-md" >
                                <img src="
                                        <?php
                                            if(!empty($brand_item['image'])){
                                                echo '../uploads/product/' . $brand_item['image'];
                                            }else{
                                                echo '../uploads/default/default.png';
                                            }
                                        ?>   
                                         " id = "showImage" class = "w-full h-full object-contain" alt="">
                                <input type="hidden" name="old_image" value = "<?= $brand_item['image'] ?>">
                                </div>
                           </div> 
                           <div class = "w-[50%] flex justify-center items-center relative">
                                <div class="w-[80%] border-dotted p-4 border-[2px] border-blue-900 h-[100%] rounded-md">
                                    <input type="file" name = "image" id = "profile_image" accept="image/*" class = "w-full h-full hidden">
                                </div>
                                <label for="profile_image" class = "absolute text-sm ">Select Image <i class="fa-solid fa-image"></i></label>
                           </div> 
                        </div>
                        </div>
                        <div class="w-full mt-3 flex justify-end items-center pr-5">
                        <button type = "submit" class = "bg-blue-500 text-white px-2 py-1 font-medium rounded-md" name = "edit_product">Submit</button>
                        </div>
                    </form>
                    <?php
                    }
                   ?>
                </div>
            </div>
        </div>
    <!--  -->
    <scrpt src = "assets/js/menuedit.js"></scrpt>
<?php include('includes/footer.php')?>