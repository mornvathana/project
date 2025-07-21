<?php 
include('includes/header.php');
include('../middleware/adminAccess.php');
include('middleware/category.php');
include("lang.php");
?>
        <div class = "h-[1200px] px-2 py-2 overflow-hidden">
                <div class = "w-full bg-[#f3f5f7] h-[100%] rounded-md p-5">
                <div class = "w-full h-[5%] flex justify-between items-center">
                    <div>
                        <h1 class = "font-medium"><?php echo $text['edit']?></h1>
                    </div>
                    <div>
                        <a href = "category1.php" class = "bg-blue-500 text-[12px] text-white px-2 py-1 font-medium rounded-md"><i class="fa-solid fa-arrow-left pr-1"></i><?php echo $text['back']?></a>
                    </div>
                </div>
                <div class="w-full h-[92%] mt-5 bg-[#ffffff] p-4 rounded-md">
                    <?php
                        if(isset($_GET['id'])){
                            $id = $_GET['id'];
                            $product  = getProduct($id);
                            if($product->num_rows > 0){
                                foreach($product as $item){
                                ?>
                                <form action="code.php" method = "post" class = "body-circle w-full h-full " enctype = "multipart/form-data">
                                    <div class = "w-full grid grid-cols-1 md:grid-cols-2 gap-5">
                                        <div class = " w-full h-full">
                                        <div class  = "w-full">
                                        <div class = "w-full">
                                            <input type="hidden" name = "id" id = "pdid" value = "<?= $item['id']?>">
                                            <label for="barcode" class = "block py-1 text-[13px]"><?php echo $text['barcode']?></label>
                                            <input type="text" name = "barcode" value = "<?= $item['barcode'] ?>" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" id = "name" placeholder = "Barcode">
                                        </div>
                                        <div class = "w-full">
                                        <label for="name" class = "block py-1 text-[13px]"><?php echo $text['name']?></label>
                                        <input type="text" name = "pdname"  value = "<?= $item['name'] ?>" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" placeholder = "Name">
                                        </div>
                                        <div class = "w-full">
                                            <label for="price" class = "block py-1 text-[13px] w-full"><?php echo $text['originalprice']?></label>
                                            <input type="text" name = "original_price" value = "<?= $item['original_price'] ?>" id = "price" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" placeholder = "Original price">
                                        </div>
                                        <div class = "w-full">
                                            <label for="sell_price" class = "block py-1 text-[13px] w-full"><?php echo $text['sellprice']?></label>
                                            <input type="text" name = "sell_price" id = "sell_price" value = "<?= $item['sell_price'] ?>" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" placeholder = "Original price">
                                        </div>
                                        <div class = "w-full">
                                            <p class = "py-1 text-[13px] pl-0"><?php echo $text['specification']?></p>
                                        </div>
                                        <div class = "w-full h-full flex ">
                                        <textarea name="specification" id="editor1" class = "w-full h-[50px] border border-gray-300 outline-none rounded-md text-[12px] pl-2"  ><?= $item['specification'] ?></textarea>
                                        </div>
                                        <div class = "w-full">
                                            <p class = "py-1 text-[13px] pl-0"><?php echo $text['description']?></p>
                                        </div>
                                        <div class = "w-full h-full flex ">
                                        <textarea name="description" id="editor" class = "w-full h-[50px] border border-gray-300 outline-none rounded-md text-[12px] pl-2"  ><?= $item['description'] ?></textarea>
                                        </div>
                                        </div>
                                        </div>
                                        <div class = "w-full h-full">
                                        <div class = "w-full">
                                            <label for="brand" class = "block py-1 text-[13px]"><?php echo $text['brand']?></label>
                                            <select id = "brand" name = "brand" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md">
                                            <?php
                                                $brand = getAll('brands');
                                                if($brand->num_rows > 0){
                                                foreach($brand as $item1){
                                                ?>
                                                <option value="<?= $item1['id']?>" <?= $item1['id'] == $item['brand_id'] ? 'selected' : ''?>><?= $item1['name'] ?></option>
                                                <?php
                                                }
                                                }
                                            ?>
                                            </select>
                                        </div>
                                        <div class = "w-full">
                                            <label for="slug" class = "block py-1 text-[13px]">Slug</label>
                                            <select id = "slug" name = "slug" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md">
                                            <?php
                                                $slug = getAll('product');
                                                if($slug->num_rows > 0){
                                                foreach($slug as $item1){
                                                ?>
                                                <option value="<?= $item1['name']?>" <?= $item['slug'] == $item1['name'] ? 'selected' : '' ?>><?= $item1['name'] ?></option>
                                                <?php
                                                }
                                                }
                                            ?>
                                            </select>
                                        </div>
                                        <!--  -->
                                        <div class = "w-full my-2">
                                        <label for="" class = "block py-1 text-[13px] font-medium font-medium w-full"><?php echo $text['productchoise']?></label>
                                        <div class = "flex justify-between items-center grid grid-cols-3">
                                        <input type="hidden" id = "userId" value = "<?= $user_id?>">
                                            <?php
                                                $data = whereOrders("product_option","product_id",$item['id']);
                                                if($data->num_rows > 0){
                                                    foreach($data as $num){
                                                    ?>
                                                    <div>
                                                        <input type="checkbox" name = "option[]" value = "popular" <?= $num['popular_pd'] == 1 ? 'checked' : ''?>  id = "popular" >
                                                        <label for="" class = "py-1 text-[13px]"><?php echo $text['popular']?></label>
                                                    </div>
                                                    <?php
                                                    }
                                                }
                                            ?>
                                            <?php
                                                $data = whereOrders("product_option","product_id",$item['id']);
                                                if($data->num_rows > 0){
                                                    foreach($data as $num){
                                                    ?>
                                                    <div>
                                                        <input type="checkbox" name = "option[]" <?= $num['used_pd'] == 1 ? 'checked' : ''?> value = "used"  id = "used" >
                                                        <label for="" class = "py-1 text-[13px]"><?php echo $text['usedproduct']?></label>
                                                    </div>
                                                    <?php
                                                    }
                                                }
                                            ?>
                                            <?php
                                                $data = whereOrders("product_option","product_id",$item['id']);
                                                if($data->num_rows > 0){
                                                    foreach($data as $num){
                                                    ?>
                                                    <div id = "newoption">
                                                        <input type="checkbox" name = "option[]" value = "new" <?= $num['new_pd'] == 1 ? 'checked' : ''?>   id = "new" >
                                                        <label for="" class = "py-1 text-[13px]"><?php echo $text['newproduct']?></label>
                                                    </div>
                                                    <?php
                                                    }
                                                }
                                            ?>
                                        </div>
                                        <!--  -->
                                        <div class = "w-full bg-white mt-2">
                                        <div class = "w-full">
                                        <div class = "w-full">
                                            <p class = "py-1 text-[13px] pl-3"><?php echo $text['uploads']?></p>
                                        </div>
                                        <div class = "w-full h-[170px] flex">
                                        <div class = "w-[50%] flex justify-center items-center none">
                                            <div class="w-[90%] border border-[1px] border-dashed border-blue-900 h-[100%] rounded-md">
                                            <?php $imagePath = !empty($item['image']) ? '../uploads/category/' . $item['image'] : '../uploads/default/default.jpg'; ?>
                                            <img src="<?php echo $imagePath; ?>" alt="Image" id = "showImage" class = "w-full h-full object-contain" alt="">
                                            <input type="hidden" name="old_image" value = "<?= $item['image'] ?>" >
                                            </div>
                                        </div> 
                                        <div class = "w-[50%] flex justify-center items-center relative">
                                        <div class="w-[80%] border-dotted p-4 border-[2px] border-blue-900 h-[100%] rounded-md">
                                            <input type="file" name = "image"  id = "profile_image" accept="image/*" class = "w-full h-full hidden">
                                        </div>
                                        <label for="profile_image" class = "absolute text-sm w-full left-[40%] "><?php echo $text['selectimage']?> <i class="fa-solid fa-image"></i></label>
                                        </div> 
                                        </div>
                                        </div>
                                        </div>
                                        <div class = "w-full">
                                        <div class = "w-full">
                                            <p class = "py-1 text-[13px] pl-3"><?php echo $text['demoimage']?></p>
                                        </div>
                                        <div class = "w-full h-[150px] flex">
                                        <div class = "w-[50%] flex justify-center items-center none">
                                            <div class="w-[90%] gap-2 grid grid-cols-3 h-[100%] rounded-md">
                                                <?php
                                                    $image_string = $item['demo_image'];
                                                    ?>
                                                    <input type = "hidden" name = "old_demo_image" value = "<?= $image_string?>">
                                                    <?php
                                                    $image_array = explode(',', $image_string);
                                                    foreach($image_array as $img){
                                                    ?>
                                                     <div class = " h-[50%]">
                                                        <img src="
                                                        <?php
                                                            if(!empty($img)){
                                                                echo '../uploads/category/' . $img;
                                                            }else{
                                                                echo '../uploads/default/default.jpg';
                                                            }
                                                        ?>
                                                        " id = "showImage1" class = "w-full h-full object-contain" alt="">
                                                        <input type="checkbox" name="" value = "<?= $img ?>" id="checked">
                                                        </div>
                                                    <?php
                                                    }
                                                ?>
                                            </div>
                                        </div> 
                                        <div class = "w-[50%] flex justify-center items-center relative">
                                        <div class="w-[80%] border-dotted p-4 border-[2px] border-blue-900 h-[100%] rounded-md">
                                            <input type="file" name = "demo_image[]" id = "profile_image1"  multiple accept="image/*" class = "w-full h-full hidden">
                                        </div>
                                        <label for="profile_image1" class = "absolute text-sm left-[40%] w-full "><?php echo $text['selectimage']?> <i class="fa-solid fa-image"></i></label>
                                        </div> 
                                        </div>
                                        </div>
                                        <div class="w-full mt-3 flex justify-end items-center pr-5">
                                        <button type = "submit" class = "bg-blue-500 text-white px-2 py-1 font-medium rounded-md" name = "category_update"><?php echo $text['submit']?></button>
                                        </div>
                                        </div>
                                        </div>
                                        <!--  -->
                                        </div>
                                    </div>
                                </form>
                                <?php
                                }
                            }
                        }
                    ?>
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
             $("#slug").change(function(){
                let value = $(this).val();
                if(value == '2nd Hand'){
                    $("#newoption").addClass("hidden");
                }else{
                    $("#newoption").removeClass("hidden");
                }
            });
            // checked image 
            $("#checked").click(function(){
                const id = $("#pdid").val();
                const img = $(this).val();
                $.ajax({
                    method: "POST",
                    url: "deleteProduct.php",
                    data: {
                        "id" : id,
                        "img" : img,
                        "scrope": "deleteDimg"
                    },
                    dataType: "json",
                    success: function (response) {
                        if(response == 200){
                            location.reload();
                        }else if(response == 404){
                            alert("fails");
                        }
                    }
                });
            });
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