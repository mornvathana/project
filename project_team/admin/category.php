<?php 
include('includes/header.php');
include('../middleware/adminAccess.php');
include('middleware/category.php');
?>
        <div class = " px-2 py-2 ">
                <div class = "w-full bg-[#f3f5f7] rounded-md p-5">
                <div class = "w-full h-[5%] flex justify-between items-center">
                    <div>
                        <h1 class = "font-medium">Add Category</h1>
                    </div>
                    <div>
                        <a href = "category1.php" class = "bg-blue-500 text-[12px] text-white px-2 py-1 font-medium rounded-md"><i class="fa-solid fa-arrow-left pr-1"></i>Back</a>
                    </div>
                </div>
                <div class="w-full h-[92%] mt-5 bg-[#ffffff] p-4 rounded-md">
                <form action="code.php" method = "post" class = "body-circle w-full h-full " enctype = "multipart/form-data">
                    <div class = "w-full grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class = " w-full h-full">
                        <div class  = "w-full">
                        <div class = "w-full">
                            <input type="hidden" name="page_id" value = "<?= $user_id ?>">
                            <label for="barcode" class = "block py-1 text-[13px]">Barcode</label>
                            <input type="text" name = "barcode" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" id = "name" placeholder = "Barcode">
                        </div>
                        <div class = "w-full">
                        <label for="name" class = "block py-1 text-[13px]">Name</label>
                        <input type="text" name = "name" id = "name" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" placeholder = "Name">
                        </div>
                        <div class = "w-full">
                            <label for="price" class = "block py-1 text-[13px]">Original Price</label>
                            <input type="text" name = "original_price" id = "price" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" placeholder = "Original price">
                        </div>
                        <div class = "w-full">
                            <label for="sell_price" class = "block py-1 text-[13px]">Sell Price</label>
                            <input type="text" name = "sell_price" id = "sell_price" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" placeholder = "Original price">
                        </div>
                        <div class = "w-full">
                            <p class = "py-1 text-[13px] pl-0">Specification</p>
                        </div>
                        <div class = "w-full h-full flex ">
                        <textarea name="specification" id="editor1" class = "w-full h-[50px] border border-gray-300 outline-none rounded-md text-[12px] pl-2"  ></textarea>
                        </div>
                        <div class = "w-full">
                            <p class = "py-1 text-[13px] pl-0">Description</p>
                        </div>
                        <div class = "w-full h-full flex ">
                        <textarea name="description" id="editor" class = "w-full h-[50px] border border-gray-300 outline-none rounded-md text-[12px] pl-2"  ></textarea>
                        </div>
                        </div>
                        </div>
                        <div class = "w-full h-full">
                        <div class = "w-full">
                            <label for="brand" class = "block py-1 text-[13px]">Brand</label>
                            <select id = "brand" name = "brand" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md">
                            <?php
                                $brand = getAll('brands');
                                if($brand->num_rows > 0){
                                foreach($brand as $item){
                                ?>
                                <option value="<?= $item['id']?>"><?= $item['name'] ?></option>
                                <?php
                                }
                                }
                            ?>
                            </select>
                        </div>
                        <div class = "w-full">
                            <label for="promotion" class = "block py-1 text-[13px]">Promotion</label>
                            <select id = "promotion" name = "promotion" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md">
                                <option value="1">1</option>
                            </select>
                        </div>
                        <!--  -->
                        <div class = "w-full my-2">
                        <label for="" class = "block py-1 text-[13px] font-medium font-medium">Product Choise</label>
                        <div class = "flex justify-between items-center grid grid-cols-3">
                        <input type="hidden" id = "userId" value = "<?= $user_id?>">
                            <div>
                                <input type="checkbox" name = "option[]" value = "popular"   id = "popular" >
                                <label for="" class = "py-1 text-[13px]">Popular</label>
                            </div>
                            <div>
                                <input type="checkbox" name = "option[]" value = "used"   id = "used" >
                                <label for="" class = "py-1 text-[13px]">Used Product</label>
                            </div>
                            <div>
                                <input type="checkbox" name = "option[]" value = "new"   id = "new" >
                                <label for="" class = "py-1 text-[13px]">New product</label>
                            </div>
                        </div>
                        <!--  -->
                        <div class = "w-full bg-white mt-2">
                        <div class = "w-full">
                        <div class = "w-full">
                            <p class = "py-1 text-[13px] pl-3">Upload Image</p>
                        </div>
                        <div class = "w-full h-[170px] flex">
                        <div class = "w-[50%] flex justify-center items-center none">
                            <div class="w-[90%] border border-[1px] border-dashed border-blue-900 h-[100%] rounded-md">
                                <img src="../uploads/default/default.jpg" id = "showImage" class = "w-full h-full object-contain" alt="">
                                <input type="hidden" name="old_image"  >
                            </div>
                        </div> 
                        <div class = "w-[50%] flex justify-center items-center relative">
                        <div class="w-[80%] border-dotted p-4 border-[2px] border-blue-900 h-[100%] rounded-md">
                            <input type="file" name = "image" id = "profile_image" accept="image/*" class = "w-full h-full hidden" required>
                        </div>
                        <label for="profile_image" class = "absolute text-sm ">Select Image <i class="fa-solid fa-image"></i></label>
                        </div> 
                        </div>
                        </div>
                        </div>
                        <div class = "w-full">
                        <div class = "w-full">
                            <p class = "py-1 text-[13px] pl-3">Demo Image</p>
                        </div>
                        <div class = "w-full h-[150px] flex">
                        <div class = "w-[50%] flex justify-center items-center none">
                            <div class="w-[90%] gap-2 grid grid-cols-3 h-[100%] rounded-md">
                                <div class = " h-[50%]">
                                <img src="../uploads/default/default.jpg" id = "showImage1" class = "w-full h-full object-contain" alt="">
                                <input type="checkbox" name="" id="">
                                <input type="hidden" name="old_image" >
                                </div>
                                <div class = " h-[50%]">
                                <img src="../uploads/default/default.jpg" id = "showImage1" class = "w-full h-full object-contain" alt="">
                                <input type="checkbox" name="" id="">
                                <input type="hidden" name="old_image" >
                                </div>
                                <div class = " h-[50%]">
                                <img src="../uploads/default/default.jpg" id = "showImage1" class = "w-full h-full object-contain" alt="">
                                <input type="checkbox" name="" id="">
                                <input type="hidden" name="old_image" >
                                </div>
                                <div class = " h-[50%]">
                                <img src="../uploads/default/default.jpg" id = "showImage1" class = "w-full h-full object-contain" alt="">
                                <input type="checkbox" name="" id="">
                                <input type="hidden" name="old_image" >
                                </div>
                                <div class = " h-[50%]">
                                <img src="../uploads/default/default.jpg" id = "showImage1" class = "w-full h-full object-contain" alt="">
                                <input type="checkbox" name="" id="">
                                <input type="hidden" name="old_image" >
                                </div>
                            </div>
                        </div> 
                        <div class = "w-[50%] flex justify-center items-center relative">
                        <div class="w-[80%] border-dotted p-4 border-[2px] border-blue-900 h-[100%] rounded-md">
                            <input type="file" name = "demo_image[]" id = "profile_image1" multiple accept="image/*" class = "w-full h-full hidden">
                        </div>
                        <label for="profile_image1" class = "absolute text-sm ">Demo Image <i class="fa-solid fa-image"></i></label>
                        </div> 
                        </div>
                        </div>
                        <div class="w-full mt-3 flex justify-end items-center pr-5">
                        <button type = "submit" class = "bg-blue-500 text-white px-2 py-1 font-medium rounded-md" name = "add_category">Submit</button>
                        </div>
                        </div>
                        </div>
                        <!--  -->
                        </div>
                    </div>
                </form>
                </div>
            </div>
        <!-- ckeditor -->
        <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
        <script>
        CKEDITOR.replace('editor',{
            height: 130,
        });
        </script>
        <script>
        CKEDITOR.replace('editor1',{
            height: 130,
        });
        </script>
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
        <script>
        $(document).ready(function(){
            $("#profile_image1").change(function(e){
                var readerView = new FileReader();
                readerView.onload = function(event){
                    $("#showImage1").attr("src", event.target.result);
                }
                readerView.readAsDataURL(e.target.files[0]);
            });
        });
        </script>
    <!--  -->
<?php include('includes/footer.php')?>