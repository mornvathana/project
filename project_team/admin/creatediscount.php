<?php 
include('includes/header.php');
include('../middleware/adminAccess.php');
include('middleware/discount.php');
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
                        <h1 class = "font-medium"><?php echo $text['createpromotion']?></h1>
                    </div>
                    <div>
                        <a href = "discount.php" class = "bg-blue-500 text-[12px] text-white px-2 py-1 font-medium rounded-md"><i class="fa-solid fa-arrow-left pr-1"></i><?php echo $text['back']?></a>
                    </div>
                </div>
                <div class="w-full h-[85%] mt-5 bg-[#ffffff] p-4 rounded-md">
                    <form action="code.php" method = "post" enctype = "multipart/form-data">
                        <div class = "w-full grid grid-cols-1 md:grid-cols-2 gap-5 ">
                        <div class = "">
                            <input type="hidden" name="userId" value = "<?= $userId?>">
                            <label for="discount" class = "block py-1 text-[13px] w-full"><?php echo $text['promotionCode']?></label>
                            <input type="text" name = "discount" id = "discount" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" placeholder = "" required>
                            <label for="percent" class = "block py-1 text-[13px] w-full"><?php echo $text['percent']?></label>
                            <input type="text" name = "percent" id = "percent" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" placeholder = "" required>
                        </div>
                        <div class = " h-[180px] flex">
                        <label for="name" class = "block py-1 text-[13px]"><?php echo $text['autocreatecode']?><span class = "text-red-500">*</span></label>
                           <div class = "w-[50%] flex justify-center items-center relative">
                                <div class = "w-[80%] border-dotted p-4 border-[2px] border-blue-900 h-[100%] rounded-md flex justify-center items-center">
                                    <span id = "display"></span>
                                </div>
                           </div> 
                            <div class = "w-[50%] flex justify-center items-center relative">
                                <div class = "w-[80%] getCode text-lg p-4 border-blue-900 h-[100%] rounded-md flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class = "w-[40px] h-[40px] cursor-pointer" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd" d="M4.755 10.059a7.5 7.5 0 0 1 12.548-3.364l1.903 1.903h-3.183a.75.75 0 1 0 0 1.5h4.992a.75.75 0 0 0 .75-.75V4.356a.75.75 0 0 0-1.5 0v3.18l-1.9-1.9A9 9 0 0 0 3.306 9.67a.75.75 0 1 0 1.45.388Zm15.408 3.352a.75.75 0 0 0-.919.53 7.5 7.5 0 0 1-12.548 3.364l-1.902-1.903h3.183a.75.75 0 0 0 0-1.5H2.984a.75.75 0 0 0-.75.75v4.992a.75.75 0 0 0 1.5 0v-3.18l1.9 1.9a9 9 0 0 0 15.059-4.035.75.75 0 0 0-.53-.918Z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                           </div> 
                        </div>
                        </div>
                        <div class="w-full mt-3 flex justify-end items-center pr-5">
                        <button type = "submit" class = "bg-blue-500 text-white px-2 py-1 font-medium rounded-md" name = "create_discount"><?php echo $text['submit']?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--  -->
    <script>
        $(document).ready(function(){

              $(document).on("click", ".getCode", function(){
                    const coupon = getCode("SAVE-", 8);
                    $("#display").html(coupon);
                });

                function getCode(prefix = 'SAVE-', length = 8){
                    const word = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                    let code = '';
                    for(let i = 0; i < length; i++){
                        const randomIndex = Math.floor(Math.random() * word.length);
                        code += word[randomIndex];
                    }
                    return prefix + code;
                }

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