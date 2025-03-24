<?php include('includes/header.php')?>
        <div class = "h-[1200px] px-2 py-2 bg-blue-50">
                <div class = "w-full bg-[#ffffff] h-[100%] rounded-md p-5">
                <div class = "w-full h-[5%] flex justify-between items-center">
                    <div>
                        <h1 class = "font-medium">Add Category</h1>
                    </div>
                    <div>
                        <a href = "category1.php" class = "bg-blue-500 text-[12px] text-white px-2 py-1 font-medium rounded-md"><i class="fa-solid fa-arrow-left pr-1"></i>Back</a>
                    </div>
                </div>
                <div class="w-full h-[92%] mt-5">
                <form action="code.php" method = "post" class = "body-circle w-full h-full " enctype = "multipart/form-data">
                    <div class = "w-full grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class = " w-full h-full">
                        <div class  = "w-full">
                        <div class = "w-full">
                            <input type="hidden" name = "userid" value = "<?= $user['id']?>" readonly>
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
                        <textarea name="" id="editor1" class = "w-full h-[50px] border border-gray-300 outline-none rounded-md text-[12px] pl-2"  ></textarea>
                        </div>
                        <div class = "w-full">
                            <p class = "py-1 text-[13px] pl-0">Description</p>
                        </div>
                        <div class = "w-full h-full flex ">
                        <textarea name="" id="editor" class = "w-full h-[50px] border border-gray-300 outline-none rounded-md text-[12px] pl-2"  ></textarea>
                        </div>
                        </div>
                        </div>
                        <div class = "w-full h-full">
                        <div class = "w-full">
                            <label for="brand" class = "block py-1 text-[13px]">Brand</label>
                            <select id = "brand" name = "brand" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md">
                                <option value="">1</option>
                            </select>
                        </div>
                        <div class = "w-full">
                            <label for="brand" class = "block py-1 text-[13px]">Promotion</label>
                            <select id = "brand" name = "brand" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md">
                                <option value="">1</option>
                            </select>
                        </div>
                        <div class = "w-full bg-white mt-2">
                        <div class = "w-full">
                        <div class = "w-full">
                            <p class = "py-1 text-[13px] pl-3">Upload Image</p>
                        </div>
                        <div class = "w-full h-[170px] flex">
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
                                <img src="
                                <?php
                                    if(!empty($user['image'])){
                                        echo '../uploads/admin/' . $user['image'];
                                    }else{
                                        echo '../uploads/default/default.jpg';
                                    }
                                ?>
                                " id = "showImage1" class = "w-full h-full object-contain" alt="">
                                <input type="checkbox" name="" id="">
                                <input type="hidden" name="old_image" value = "<?= $user['image'] ?>" >
                                </div>
                                <div class = " h-[50%]">
                                <img src="
                                <?php
                                    if(!empty($user['image'])){
                                        echo '../uploads/admin/' . $user['image'];
                                    }else{
                                        echo '../uploads/default/default.jpg';
                                    }
                                ?>
                                " id = "showImage1" class = "w-full h-full object-contain" alt="">
                                <input type="checkbox" name="" id="">
                                <input type="hidden" name="old_image" value = "<?= $user['image'] ?>" >
                                </div>
                                <div class = " h-[50%]">
                                <img src="
                                <?php
                                    if(!empty($user['image'])){
                                        echo '../uploads/admin/' . $user['image'];
                                    }else{
                                        echo '../uploads/default/default.jpg';
                                    }
                                ?>
                                " id = "showImage1" class = "w-full h-full object-contain" alt="">
                                <input type="checkbox" name="" id="">
                                <input type="hidden" name="old_image" value = "<?= $user['image'] ?>" >
                                </div>
                                <div class = " h-[50%]">
                                <img src="
                                <?php
                                    if(!empty($user['image'])){
                                        echo '../uploads/admin/' . $user['image'];
                                    }else{
                                        echo '../uploads/default/default.jpg';
                                    }
                                ?>
                                " id = "showImage1" class = "w-full h-full object-contain" alt="">
                                <input type="checkbox" name="" id="">
                                <input type="hidden" name="old_image" value = "<?= $user['image'] ?>" >
                                </div>
                                <div class = " h-[50%]">
                                <img src="
                                <?php
                                    if(!empty($user['image'])){
                                        echo '../uploads/admin/' . $user['image'];
                                    }else{
                                        echo '../uploads/default/default.jpg';
                                    }
                                ?>
                                " id = "showImage1" class = "w-full h-full object-contain" alt="">
                                <input type="checkbox" name="" id="">
                                <input type="hidden" name="old_image" value = "<?= $user['image'] ?>" >
                                </div>
                            </div>
                        </div> 
                        <div class = "w-[50%] flex justify-center items-center relative">
                        <div class="w-[80%] border-dotted p-4 border-[2px] border-blue-900 h-[100%] rounded-md">
                            <input type="file" name = "image" id = "profile_image1" multiple accept="image/*" class = "w-full h-full hidden" required>
                        </div>
                        <label for="profile_image1" class = "absolute text-sm ">Demo Image <i class="fa-solid fa-image"></i></label>
                        </div> 
                        </div>
                        </div>
                        <div class="w-full mt-3 flex justify-end items-center pr-5">
                        <button type = "submit" class = "bg-blue-500 text-white px-2 py-1 font-medium rounded-md" name = "add_brand">Submit</button>
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
        <!-- end header -->
        <!-- <div class = "h-full px-2 py-2 bg-blue-50">
            <div class = "box-circle">  
                <div class = "header-circle">
                    <p>Add Category</p>
                    <p class = 'bg-blue-500 text-white px-1 h-7 text-center cursor-pointer rounded-md'><a href="category1.php">Back</a> <i class="fa-solid fa-arrow-right-to-bracket"></i></p>
                </div>
                <form action="code.php" method = "post" class = "body-circle" enctype = "multipart/form-data">
                    <div class = "frm">
                        <label for="">Name</label>
                        <input type="text" name = "cate_name" placeholder="Enter your name...">
                        <label for="">Small Description</label>
                        <input type="text" name = "cate_small_des" placeholder="Enter your small description...">
                    </div>
                    <div class = "frm">
                        <label for="">Select Category</label>
                        <select name="product_id" id="">
                        <?php
                        $selectName = selectProduct("product_name","product_database");
                        $store_old_name = [];
                        if(mysqli_num_rows($selectName) > 0){
                            foreach($selectName as $name){
                                if(in_array($name['product_name'],$store_old_name)){
                                   
                                }else{
                                    $store_old_name[] = $name['product_name'];
                                ?>
                                <option value="<?= $name['product_name']?>"><?= $name['product_name']?></option>
                                <?php
                                }
                                
                            }
                        }
                     ?>
                        </select>
                        <label for="">Ram</label>
                        <input type="text" name = "cate_ram" placeholder="Enter your Ram...">
                    </div>
                    <div class = "frm">
                        <label for="">Sell Price</label>
                        <input type="text" name = "cate_sell_price" placeholder="Sell Price...">
                        <label for="">Original Price</label>
                        <input type="text" name = "cate_original_price" placeholder="Original Price...">
                    </div>
                    <div class = "frm">
                        <label for="">Promotion</label>
                        <input type="text" name = "cate_promotion" placeholder="Promotion...">
                        <label for="">Warranty</label>
                        <input type="text" name = "cate_warrenty" placeholder="Warranty...">
                    </div>
                    <div class = "frm">
                        <label for="">Color</label>
                        <input type="text" name = "cate_color" placeholder="Color Phone...">
                        <label for="">Memory</label>
                        <input type="text" name = "cate_memory" placeholder="Memory...">
                    </div>
                    <div class = "frm">
                        <label for="">Image</label>
                        <input type="file" name = "cate_image" >
                        <label for="">Demo_Image</label>
                        <input type="file" name = "cate_de_image" class = "cate_de_image" >
                    </div>
                    <div class = "frm">
                        <p>LAUNCH</p>
                        <label for="">Announced</label>
                        <input type="text" name = "cate_announed" placeholder="Announced...">
                        <label for="">Status</label>
                        <input type="text" name = "cate_status" placeholder="Status Announced...">
                    </div>
                    
                    <div class = "frm">
                        <p>MEMORY</p>
                        <label for="">Card slot</label>
                        <input type="text" name = "cate_slot" placeholder="Card slot...">
                        <label for="">Internal</label>
                        <input type="text" name = "cate_internal" placeholder="Internal...">
                    </div>
                    <div class = "frm">
                        <p>NETWORK</p>
                        <label for="">Technology</label>
                        <input type="text" name = "cate_techno" placeholder="Technology...">
                        <label for="">3G bands</label>
                        <input type="text" name = "cate_3G" placeholder="Discription 3G...">
                        <label for="">4G bands</label>
                        <input type="text" name = "cate_4G" placeholder="Discription 4G...">
                        <label for="">Speed</label>
                        <input type="text" name = "cate_speed" placeholder="Speed...">
                    </div>
                    <div class = "frm">
                        <p>BODY</p>
                        <label for="">Dimensions</label>
                        <input type="text" name = "cate_dimensions" placeholder="Dimensions...">
                        <label for="">Weight</label>
                        <input type="text" name = "cate_weight" placeholder="Weight...">
                        <label for="">SIM</label>
                        <input type="text" name = "cate_sim" placeholder="SIM...">
                    </div>
                    <div class = "frm">
                        <p>MAIN CAMERA</p>
                        <label for="">Dual</label>
                        <input type="text" name = "cate_dual" placeholder="Dual Camera...">
                        <label for="">Features</label>
                        <input type="text" name = "cate_feature" placeholder="Features...">
                        <label for="">Video</label>
                        <input type="text" name = "cate_video_cam" placeholder="Video Camera...">
                    </div>
                    <div class = "frm">
                        <p>SELFIE CAMERA</p>
                        <label for="">Single</label>
                        <input type="text" name = "cate_single_selfie" placeholder="Single selfie...">
                        <label for="">Video</label>
                        <input type="text" name = "cate_video_selfie" placeholder="Video selfie...">
                    </div>
                    <div class = "frm">
                        <p>BATTERY</p>
                        <label for="">Type</label>
                        <input type="text" name = "cate_battery_type" placeholder="Battery Type...">
                        <label for="">Charging</label>
                        <input type="text" name = "cate_battery_charging" placeholder="Battery Charging...">
                    </div>
                    <div class = "frm">
                        <p>MISC</p>
                        <label for="">Colors</label>
                        <input type="text" name = "cate_color_phone" placeholder="Color MISC...">
                        <label for="">Models</label>
                        <input type="text" name = "cate_model" placeholder="Models...">
                    </div>
                    <input type="submit" value = "save" name = "category_save" class = "bg-blue-500 font-bold px-5 text-white rounded-md">
                </form>
            </div>
        </div> -->
    <!--  -->
<?php include('includes/footer.php')?>