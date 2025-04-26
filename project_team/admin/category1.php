<?php include('includes/header.php')?>
<!-- start  -->
<div class = "h-full px-2 py-5 bg-blue-50">
    <div class = "w-full bg-[#ffffff] rounded-md p-5">
        <div class = "w-full flex justify-between items-center">
            <div class="flex justify-between items-center w-[50%] ">
                <div class = "w-[35px] py-2 rounded-sm">
                    <label  class = "text-[13px] font-medium text-[#515151]">Category</label>
                    <select name="product_item" id="product_item" class = "text-[13px] mt-1 border border-gray-400 rounded-md w-[200px] py-1 font-medium text-[#515151] outline-none">
                    <option value = "" selected class = "text-[13px]">Select</option>
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
                <div class = "w-[35px] py-2 rounded-sm">
                    <label  class = "text-[13px] font-medium text-[#515151]">Brand</label>
                    <select name="product_item" id="product_item" class = "text-[13px] mt-1 border border-gray-400 rounded-md w-[200px] py-1 font-medium text-[#515151] outline-none">
                    <option value = "" selected class = "text-[13px]">Select</option>
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
                <div class = "mt-6 py-2 rounded-sm">
                <a class = "bg-blue-500 text-white px-2 py-1 font-medium text-sm rounded-md" id = "filterData"><i class="fa-solid fa-filter"></i> Filter</a>
                <a href = "category.php" class = "bg-blue-500 text-white px-2 py-1 font-medium text-sm rounded-md"><i class="fa-solid fa-filter"></i> Add Category</a>
                </div>
            </div>  
            <div class="flex items-center gap-2">
                <form class="max-w-sm">
                    <select id="page_num" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 h-7 px-2">
                        <option value="10" selected>Page</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="50">50</option>
                    </select>
                </form>

                <!-- Pagination Buttons -->
                <a href="#" class="flex items-center justify-center px-2 h-7 me-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700" id="back_btn">
                    <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                    </svg>
                    Previous
                </a>

                <a href="#" class="flex items-center justify-center px-3 h-8 me-3 text-sm font-medium text-gray-500 rounded-lg">
                    <span id="startPage">1</span> / <span id="totalPage">10</span>
                </a>

                <a href="#" class="flex items-center justify-center px-2 h-7 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700" id="next_btn">
                    Next
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>

        </div>
        <div class = "w-full h-full mt-5">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-2">
                <?php
                    $item = allProduct();
                    if($item->num_rows > 0){
                        foreach($item as $category){
                        ?>
                        <div class = "h-[250px] border shadow-md border-gray-100 rounded-sm p-2">
                    <div class = "w-full h-[60%]">
                        <img src = "../uploads/category/<?= $category['image']?>" alt = "" class = "w-full h-full object-contain" />
                    </div>
                    <div class = "w-full h-[40%]">
                        <div class = "w-full h-[70%]">
                        <div class=" w-full h-[50%] justify-between items-center flex">
                            <p class = "text-[12px] text-[#515151]">
                                <?php
                                    $name = whereProduct1($category['brand_id']);
                                    if($name->num_rows > 0){
                                        foreach($name as $name1){
                                            ?>
                                            <?= $name1['name'] ?>
                                            <?php
                                        }
                                    }
                                ?>
                            </p>
                            <p class = "text-[12px] text-[#515151]">$<?= $category['sell_price']?></p>
                        </div>
                        <div class=" w-full h-[50%] justify-center items-center flex">
                            <p class = "text-[12px] text-[#515151]"><?= implode(' ', array_slice(explode(' ', $category['name']), 0, 5)) ?></p>
                        </div>
                        </div>
                        <div class = " w-full h-[30%] flex justify-end items-center gap-2 text-sm">
                        <i class="fa-solid fa-trash-can" id = "delete_category" data-category = "<?= $category['id']?>"></i>
                        <a href="categoryEdit.php?id=<?= $category['id']?>"><i class="fa-solid fa-pen-to-square btn-edit" ></i></a>
                        </div>
                        </div>
                        </div>
                        <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<!--  end  -->
<?php include('includes/footer.php')?>