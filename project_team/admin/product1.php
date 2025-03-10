<?php include('includes/header.php');?>
    <!-- start -->
    <div class = "h-full px-2 py-2 bg-blue-50">
        <div class = "w-full h-[100vh] bg-[#ffffff] rounded-md p-5">
            <div class = "w-full h-[80px] grid grid-cols-2 md:grid-cols-4 gap-5 ">
                <div class = "bg-gray-800 h-full flex  justify-center items-center flex-col text-white rounded-md text-[15px]">
                <p>Total Main Product</p>
                <?php
                $count = countTable("product_database");
                ?>
                <p><?= $count ?></p>
                <?php
                ?>
                </div>  
                <div class = "bg-gray-800 h-full flex  justify-center items-center flex-col text-white rounded-md text-[15px]">
                <p>Total Sub Category</p>
                <?php
                $count = countTable("category_db");
                ?>
                <p><?= $count ?></p>
                <?php
                ?>
                </div>  
                <div class = "bg-gray-800 h-full flex  justify-center items-center flex-col text-white rounded-md text-[15px]">
                <p>Brands</p>
                <?php
                $count = countTable("category_db");
                ?>
                <p><?= $count ?></p>
                <?php
                ?>
                </div> 
            </div>
            <div class = "w-full h-full mt-5">
            <table class = "text-center w-full">
                    <thead>
                        <tr>
                            <th class = "text-sm py-1 border border-gray-200 font-medium">ID</th>
                            <th class = "text-sm py-1 border border-gray-200 font-medium">Product Name</th>
                            <th width = "400" class = "text-sm py-1 border border-gray-200 font-medium">Total Sub Category</th>
                            <th width = "160" class = "text-sm py-1 border border-gray-200 font-medium">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         $product_title = getAll("product_database");
                         if(mysqli_num_rows($product_title)){
                            foreach($product_title as $product){
                                ?>
                            <tr id = "product-<?= $product['id']?>">
                            <td class = "text-sm py-1 border border-gray-200"><?= $product['id']?></td>
                            <td id = "productName" class = "text-sm py-1 border border-gray-200"><?= $product['product_name']?></td>
                            <td class = "text-sm py-1 border border-gray-200"><span id = "circle" class = "text-sm py-1 border border-gray-200">
                                <?php
                                    $count = countCategoryItem("category_db",$product['product_name']);
                                    ?>
                                    <?= $count?>
                                    <?php
                                ?>
                            </span></td>
                            <td class = "border border-gray-200 text-sm py-1">
                                <button class = "bg-blue-500 text-white px-2 py-[1px] text-sm  rounded-md" id = "productEdit" data-id = "<?= $product['id']?>"><i class="fas fa-edit"></i></button>
                                <button class = "bg-red-500 text-white px-2 py-[1px] text-sm  rounded-md" id = "btn-delete" data-id = "<?= $product['id']?>"><i class="fas fa-trash"></i></button>
                            </td>
                            </tr>
                            <?php
                            }
                         }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
<!-- end start -->
<?php include('includes/footer.php')?>