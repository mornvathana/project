<?php 
include('includes/header.php');
include('../middleware/adminAccess.php');
include('middleware/brands.php');
include("lang.php");
 if($_SESSION['auth_user']){
    $userId = $_SESSION['auth_user']['user_id'];
 }
?>
        <!-- end header -->
        <div class = "h-full px-2 py-2">
            <div class = "w-full bg-[#f3f5f7] h-[100vh] rounded-md p-5">
                <div class = "w-full h-[10%] flex justify-between items-center">
                    <div>
                        <h1 class = "font-medium"><?php echo $text['createbrand']?></h1>
                    </div>
                    <div>
                        <a href = "branddisplay.php" class = "bg-blue-500 text-[12px] text-white px-2 py-1 font-medium rounded-md"><i class="fa-solid fa-arrow-left pr-1"></i><?php echo $text['back']?></a>
                    </div>
                </div>
                <div class="w-full h-[85%] mt-5 bg-[#ffffff] p-4 rounded-md">
                    <form action="code.php" method = "post" enctype = "multipart/form-data">
                        <div class = "w-full grid grid-cols-1 md:grid-cols-2 gap-5 ">
                        <div>
                        <div>
                            <input type="hidden" name="userId" value = "<?= $userId?>">
                            <label for="name" class = "block py-1 text-[13px]"><?php echo $text['name']?></label>
                            <input type="text" name = "name" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" placeholder = "Enter your name" required>
                        </div>
                        <div>
                        <label for="product" class = "block py-1 text-[13px]"><?php echo $text['product']?></label>
                            <select id = "product" name = "product" class = "border border-gray-300 bg-white py-2 pl-1 text-[14px] outline-none w-full rounded-md">
                            <?php
                                $product = getAll('product');
                                if($product->num_rows > 0){
                                foreach($product as $item){
                                ?>
                                <option value="<?= $item['id']?>" class = "bg-white"><?= $item['name'] ?></option>
                                <?php
                                }
                                }
                            ?>
                            </select>
                        </div>
                        </div>
                        <div class = " h-[180px] flex">
                        <label for="name" class = "block py-1 text-[13px]"><?php echo $text['uploads']?><span class = "text-red-500">*</span></label>
                           <div class = "w-[60%] flex justify-center items-center">
                                <div class="w-[60%] border-dotted border-[2px] p-1 border-blue-900 h-[100%] rounded-md" >
                                <img src="../uploads/default/default.png" id = "showImage" class = "w-full h-full object-contain" alt="">
                                </div>
                           </div> 
                           <div class = "w-[50%] flex justify-center items-center relative">
                                <div class="w-[80%] border-dotted p-4 border-[2px] border-blue-900 h-[100%] rounded-md">
                                    <input type="file" name = "image" id = "profile_image" accept="image/*" class = "w-full h-full hidden" required>
                                </div>
                                <label for="profile_image" class = "absolute text-sm "><?php echo $text['selectimage']?> <i class="fa-solid fa-image"></i></label>
                           </div> 
                        </div>
                        </div>
                        <div class="w-full mt-3 flex justify-end items-center pr-5">
                        <button type = "submit" class = "bg-blue-500 text-white px-2 py-1 font-medium rounded-md" name = "add_brand"><?php echo $text['submit']?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--  -->
    <script src = "assets/js/brandedit.js"></script>
<?php include('includes/footer.php')?>