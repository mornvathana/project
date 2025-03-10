<?php 
include('includes/header.php');
?>
<div class = "h-full px-2 py-5 bg-blue-50">
    <div class = "box-circle">
    <div class = "items-center justify-between inline w-full h-10 py-2 my-2 navbar-option">
        <div class = "box-option">
            <div class = "flex flex-col">
                <label for="">Product</label>
                <select name="" id="">
                    <?php
                        $selectName = selectProduct("product_name","product_db");
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
            </div>
            <div class = "flex flex-col">
                <label for="">Categories</label>
                <select name="" id="">
                    <option value="">1</option>
                    <option value="">1</option>
                    <option value="">1</option>
                </select>
            </div>
            <div class = "flex flex-col">
                <label for="">Brand</label>
                <select name="" id="">
                    <option value="">1</option>
                    <option value="">1</option>
                    <option value="">1</option>
                </select>
            </div>
            <div>
                <button class = "w-20 h-8 mr-2 text-sm text-white bg-blue-500 rounded-md shadow-sm"><i class="fa-solid fa-filter"></i> Filter</button>
            </div>
        </div>
        <div class = "box-button btn-edit" id = "btn-product">
            <button class = "w-20 h-8 mr-2 text-sm text-white bg-blue-500 rounded-md shadow-sm"><i class="fa-solid fa-plus"></i>Add</button>
        </div>
    </div>
    <!-- end filter -->
    <div class = "container w-full my-5">
        <?php
            $product = getAll('product_db');
            if(mysqli_num_rows($product) > 0){
                foreach($product as $item){
                    ?>
            <div class = "p-2 px-1 rounded-sm shadow-md box">
            <div class = "img">
                <img src="../upload/<?= $item['product_image']?>" alt="<?= $item['product_image']?>">
            </div>
            <div class = "text-sm title">
                <div class = "flex items-center justify-between py-1">
                    <p><?= $item['product_name']?></p>
                    <p><?= $item['product_price']?></p>
                </div>
                <p class = "text-center"><?= $item['product_title']?></p>
                <div class = "option">
                    <i class="fa-solid fa-trash-can"></i>
                    <i class="fa-solid fa-pen-to-square btn-edit" ></i>
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
<!-- start form -->
<div class = "popup">
            <div class = "frm">
                <div class = "flex items-center justify-between w-full h-8 px-5 text-sm frm-header ">  
                    <p>Product From</p>
                    <i class="fa-solid fa-xmark"  id = "close-product"></i>
                </div>
                <form action="code.php" class = 'frm-body' method = "post" enctype = "multipart/form-data">
                   <div class = "img">
                        <img src="assets/img/download.png" alt="">
                    </div>
                    <div class = "frm-input">
                        <label for="">Product Brand</label>
                        <input type="text" name = "product_name" placeholder = "Product Brand...">
                        <label for="">Product Title</label>
                        <input type="text" name = "product_title" placeholder="Product Title...">
                        <label for="">Product Price</label>
                        <input type="text" name = "product_price" placeholder="Product Price...">
                        <label for="">Product Image</label>
                        <input type="file" name = "product_image">
                        <input type="submit" name = "product_add" class = "w-full text-white bg-blue-500" value = "save">
                    </div>
                </form>
            </div>
        </div>
        <!-- end popup product -->
    </div>
<!-- end -->
<?php include('includes/footer.php')?>