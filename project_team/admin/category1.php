<?php 

include('includes/header.php');
include('../middleware/adminAccess.php');
include('middleware/category.php');
include("lang.php");
?>
<!-- start  -->
<div class = "h-full px-2 py-5 bg-[#f3f5f7]">
    <div class = "w-full bg-[#ffffff] h-[100vh] rounded-md p-5">
        <div class = "w-full flex justify-between grid grid-cols-1 md:grid-cols-[1fr_400px] items-center">
            <div class="flex justify-between items-center w-[100%] md:w-full gap-2 grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4">
                <div class = "w-[100%] md:w-[35px] py-1 md:py-2 rounded-sm">
                    <label  class = "text-[13px] font-medium text-[#515151]"><?php echo $text['product']?></label>
                    <select name="product_item" id="product_item" class = "text-[13px] mt-1 border border-gray-400 rounded-md w-full md:w-[100px] xl:w-[120px] py-1 font-medium text-[#515151] outline-none">
                    <option value = "" selected class = "text-[13px]"><?php echo $text['select']?></option>
                    <?php
                    $product = getAll("product_detail");
                    if(mysqli_num_rows($product) > 0){
                        foreach($product as $productItem){
                            ?>
                            <option value="<?= $productItem['name']?>" class = "text-[14px]"><?= $productItem['name']?></option>
                            <?php
                            }
                        }
                    ?>
                    </select>
                </div>
                <div class = "w-[100%] md:w-[35px] py-1 md:py-2 rounded-sm">
                    <label  class = "text-[13px] font-medium text-[#515151]"><?php echo $text['brand']?></label>
                    <select name="product_item" id="product_item" class = "text-[13px] mt-1 border border-gray-400 rounded-md w-full md:w-[100px] xl:w-[120px] py-1 font-medium text-[#515151] outline-none">
                    <option value = "" selected class = "text-[13px]"><?php echo $text['select']?></option>
                    <?php
                    $product = getAll("brands");
                    if(mysqli_num_rows($product) > 0){
                        foreach($product as $productItem){
                            ?>
                            <option value="<?= $productItem['name']?>" class = "text-[14px]"><?= $productItem['name']?></option>
                            <?php
                            }
                        }
                    ?>
                    </select>
                </div>
                <div class = "w-[100%] md:w-[35px] py-1 md:py-2 rounded-sm">
                    <label  class = "text-[13px] font-medium text-[#515151]"><?php echo $text['product']?></label>
                    <select name="product_item" id="product_item" class = "text-[13px] mt-1 border border-gray-400 rounded-md w-full md:w-[100px] xl:w-[120px] py-1 font-medium text-[#515151] outline-none">
                    <option value = "" selected class = "text-[13px]"><?php echo $text['select']?></option>
                    <?php
                    $product = getAll("product");
                    if(mysqli_num_rows($product) > 0){
                        foreach($product as $productItem){
                            ?>
                            <option value="<?= $productItem['name']?>" class = "text-[14px]"><?= $productItem['name']?></option>
                            <?php
                            }
                        }
                    ?>
                    </select>
                </div>
                <div class = "md:mt-6 py-2 rounded-sm">
                <a href = "category.php" class = "bg-blue-500 text-white px-2 py-1 font-medium text-sm rounded-md"><i class="fa-solid fa-filter"></i> <?php echo $text['addcategory']?></a>
                </div>
            </div>  
            <div class="flex items-start md:justify-end gap-2">
                <form class="max-w-sm">
                    <select id="page_num" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 h-7 px-2">
                        <option value="10" selected><?php echo $text['page']?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </form>

                <!-- Pagination Buttons -->
                <a href="#" class="flex items-center justify-center px-2 h-7 me-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700" id="back_btn">
                    <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                    </svg>
                    <?php echo $text['previous']?>
                </a>

                <a href="#" class="flex items-center justify-center px-3 h-8 me-3 text-sm font-medium text-gray-500 rounded-lg">
                    <span id="startPage">1</span> / <span id="totalPage">10</span>
                </a>

                <a href="#" class="flex items-center justify-center px-2 h-7 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700" id="next_btn">
                    <?php echo $text['next']?>
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>

        </div>
        <div class = "w-full h-full mt-5">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-2" id = "displayData">
                
            </div>
        </div>
    </div>
</div>
<!--  end  -->
<script src = "assets/js/category1.js"></script>
<?php include('includes/footer.php')?>