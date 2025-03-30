<?php include('includes/header.php')?>
<!-- start  -->
<div class = "h-full px-2 py-5 bg-blue-50">
    <div class = "w-full bg-[#ffffff] rounded-md p-5">
        <div class = "w-full flex justify-between items-center">
            <div class="flex justify-between items-center w-[70%] ">
                <div class = "w-[35px] py-2 rounded-sm">
                    <label  class = "text-[13px] font-medium text-[#515151]">Product</label>
                    <select name="product_item" id="product_item" class = "text-[13px] mt-1 border border-gray-400 rounded-md w-[200px] py-1 font-medium text-[#515151] outline-none">
                    <option value = "" selected class = "text-[13px]">Select</option>
                    <?php
                        $product = getAll("product_database");
                        if(mysqli_num_rows($product) > 0){
                            foreach($product as $productItem){
                                ?>
                                <option value="<?= $productItem['product_name']?>" class = "text-[14px]"><?= $productItem['product_name']?></option>
                                <?php
                            }
                        }
                    ?>
                    </select>
                </div>
                <div class = "w-[35px] py-2 rounded-sm">
                    <label  class = "text-[13px] font-medium text-[#515151]">Category</label>
                    <select name="product_item" id="product_item" class = "text-[13px] mt-1 border border-gray-400 rounded-md w-[200px] py-1 font-medium text-[#515151] outline-none">
                    <option value = "" selected class = "text-[13px]">Select</option>
                    <?php
                    $product = getAll("category_db");
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
                    $product = getAll("product_database");
                    if(mysqli_num_rows($product) > 0){
                        foreach($product as $productItem){
                            ?>
                            <option value="<?= $productItem['product_name']?>" class = "text-[14px]"><?= $productItem['product_name']?></option>
                            <?php
                            }
                        }
                    ?>
                    </select>
                </div>
                <div class = "mt-6 py-2 rounded-sm">
                <a class = "bg-blue-500 text-white px-2 py-1 font-medium text-sm rounded-md" id = "filterData"><i class="fa-solid fa-filter"></i> Filter</a>
                </div>
            </div>  
            <div class=" w-[20%] h-full flex justify-end items-center mt-6">
            <a href = "category.php" class = "bg-blue-500 text-white absolute px-2 py-1 font-medium text-sm rounded-md"><i class="fa-solid fa-filter"></i> Add Category</a>
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