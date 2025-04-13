<?php include('includes/header.php');?>
    <!-- start -->
    <div class = "h-full px-2 py-2 bg-blue-50">
        <div class = "w-full h-[100vh] bg-[#ffffff] rounded-md p-5">
            <div class = "w-full h-[140px] md:h-[70px] grid grid-cols-2 sm:grid-cols-5 sm:h-[70px] md:grid-cols-6 gap-5 ">
                <div class = "bg-gray-800 h-full flex  justify-center items-center flex-col text-white rounded-md sm:text-[11px] text-[10px]">
                <p>Total Brand</p>
                <?php
                $count = countTable("brands");
                ?>
                <p><?= $count ?></p>
                <?php
                ?>
                </div>  
                <div class = "bg-gray-800 h-full flex  justify-center items-center flex-col text-white rounded-md sm:text-[11px] text-[10px]">
                <p>Total Sub Category</p>
                <?php
                $count = countTable("product_detail");
                ?>
                <p><?= $count ?></p>
                <?php
                ?>
                </div>  
                <!-- <div class = "bg-gray-800 h-full flex  justify-center items-center flex-col text-white rounded-md sm:text-[11px] text-[10px]">
                <p>Brands</p>
                <?php
                $count = countTable("brands");
                ?>
                <p><?= $count ?></p>
                <?php
                ?>
                </div>  -->
            </div>
            <div class = "w-full h-full mt-5 overflow-x-auto">
            <table class = "text-center w-full table-auto">
                    <thead>
                        <tr>
                            <th width = "30" class = "py-1 text-[11px] md:text-[13px] border border-gray-200 font-medium">ID</th>
                            <th width = "50" class = "py-1 text-[11px] md:text-[13px] border border-gray-200 font-medium">Name</th>
                            <th width = "300" class = "py-1 text-[11px] md:text-[13px] border border-gray-200 font-medium">Total Category</th>
                            <th width = "160" class = "py-1 text-[11px] md:text-[13px] border border-gray-200 font-medium">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         $product_title = getAll('brands');
                         if(mysqli_num_rows($product_title)){
                            foreach($product_title as $product){
                                ?>
                            <tr id = "product-<?= $product['id']?>">
                            <td class = "text-[11px] md:text-[13px] py-1 border border-gray-200"><?= $product['id']?></td>
                            <td id = "productName" class = "text-[11px] md:text-[13px] py-1 border border-gray-200"><?= $product['name']?></td>
                            <td class = "text-[11px] md:text-[13px] py-1 border border-gray-200"><span id = "circle" class = "text-[11px] md:text-[13px] py-1 border border-gray-200">
                                <?php
                                $count = countCategoryItem("product_detail",$product['id']);
                                ?>
                                <?= $count?>
                                <?php
                                ?>
                            </span></td>
                            <td class = "border border-gray-200 text-[11px] md:text-[13px] py-1">
                                <button class = "bg-blue-500 text-white px-2 py-[1px] text-[11px] md:text-[13px]  rounded-md" id = "productEdit" data-id = "<?= $product['id']?>"><i class="fas fa-edit"></i></button>
                                <button class = "bg-red-500 text-white px-2 py-[1px] text-[11px] md:text-[13px]  rounded-md" id = "btn-delete" data-id = "<?= $product['id']?>"><i class="fas fa-trash"></i></button>
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