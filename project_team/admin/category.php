<?php include('includes/header.php')?>
        <!-- end header -->
        <div class = "h-full px-2 py-2 bg-blue-50">
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
        </div>
    <!--  -->
<?php include('includes/footer.php')?>