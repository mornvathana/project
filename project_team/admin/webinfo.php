<?php 
include('includes/header.php');
include('../middleware/adminAccess.php');
?>
        <!-- end header -->
        <div class = "h-full px-2 py-2 bg-[#f3f5f7]">
        <div class = "w-full h-[100vh] rounded-md p-5">
                <div class = "w-full h-[8%] flex justify-between items-center">
                    <div>
                        <h1 class = "font-medium">Web information</h1>
                    </div>
                </div>
                <div class="w-full h-[100%] mt-5 bg-[#ffffff] p-4 rounded-md">
                    <?php
                        $item = getAll("information_website");
                        if($item->num_rows > 0){
                            foreach($item as $data){
                            ?>
                                <form action="code.php" method = "post" class = "body-circle" enctype = "multipart/form-data">
                                    <div class = "w-full md:flex gap-5 ">
                                    <div class  = "w-full md:w-[50%]">
                                    <div class = "w-full">
                                        <label for = "phonenumber" class = "block py-1 text-[13px]">Phone number</label>
                                        <input type="text" name = "phonenumber" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" id = "phonenumber" value = "<?= $data['phone_number'] ?>" placeholder = "Phone number">
                                    </div>
                                    <div class = "w-full">
                                        <label for="telegram" class = "block py-1 text-[13px]">Telegram</label>
                                        <input type="text" name = "telegram" id = "telegram"  value = "<?= $data['telegram_number']?>" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" placeholder = "telegram">
                                    </div>
                                    <div class = "w-full">
                                        <label for="email" class = "block py-1 text-[13px]">Email</label>
                                        <input type="text" name = "email" id = "email"  value = "<?= $data['email']?>" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" placeholder = "email">
                                    </div>
                                    <div class = "w-full">
                                        <label for="address" class = "block py-1 text-[13px]">address</label>
                                        <input type="text" name = "address" id = "address" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" value = "<?= $data['address']?>" placeholder = "address">
                                    </div>
                                    </div>
                                    <div class = "w-full md:w-[50%] h-[170px]">
                                    <div class = "w-full">
                                        <p class = "py-1 text-[15px] pl-3">Logo</p>
                                    </div>
                                    <div class = "w-full h-full flex">
                                    <div class = "w-full md:w-[50%] flex justify-center items-center none">
                                        <div class="w-[90%] border border-[1px] border-dashed border-blue-900 h-[70%] lg:h-[100%] rounded-md">
                                            <img src="<?= !empty($data['logo']) ? '../uploads/webinfo/' . $data['logo'] : '../uploads/default/default.jpg'?>" id = "showImage" class = "w-full h-full object-contain" alt="">
                                            <input type="hidden" name="old_image" value = "<?= $data['logo']?>" >
                                        </div>
                                    </div> 
                                    <div class = "w-full md:w-[50%] flex justify-center items-center relative">
                                    <div class="w-[80%] border-dotted p-4 border-[2px] border-blue-900 h-[70%] lg:h-[100%] rounded-md">
                                        <input type="file" name = "image" id = "profile_image" accept="image/*" class = "w-full h-full hidden">
                                    </div>
                                    <label for="profile_image" class = "absolute text-sm ">Select Image <i class="fa-solid fa-image"></i></label>
                                    </div>
                                    </div> 
                                    <div class = "w-full h-full">
                                        <div class = "w-full">
                                <p class = "py-1 text-[13px] pl-3">Demo Image</p>
                            </div>
                            <div class = "w-full h-[150px] flex">
                            <div class = "w-[50%] flex justify-center items-center none">
                                <div class="w-[90%] gap-2 grid grid-cols-3 h-[100%] rounded-md">
                                    <input type = "hidden" name = "item_demo" value = "<?= $data['slide_image']?>">
                                    <?php
                                    $image = $data['slide_image'];
                                    $image_array = explode(',', $image);
                                    foreach($image_array as $img){
                                    ?>
                                    <div class = " h-[50%]">
                                        <img src="
                                            <?php
                                                if(!empty($img)){
                                                    echo "../uploads/webinfo/" . $img;
                                                }else{
                                                    echo "../uploads/default/default.jpg";
                                                }
                                            ?>
                                                 " id = "showImage1" class = "w-full h-full object-contain" alt="">
                                        <input type="checkbox" name="" id="checked" value = "<?= $img ?>">
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    
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
                            <div class="w-full lg:mt-5 flex justify-end items-center pr-5">
                            <button type = "submit" name = "updateweb" class = "bg-blue-500 text-white px-2 py-1 font-medium rounded-md">Update</button>
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
            $("#profile_image1").change(function(e){
                var readerView = new FileReader();
                readerView.onload = function(event){
                    $("#showImage1").attr("src", event.target.result);
                }
                readerView.readAsDataURL(e.target.files[0]);
            });
            // 
            $(document).on("click","#checked",function(){
                const img = $(this).val();
                $.ajax({
                    method: "POST",
                    url: "deleteProduct.php",
                    data: {
                        "img" : img,
                        "scrope": "deleteDimgInfo"
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
        });
    </script>
<?php include('includes/footer.php')?>