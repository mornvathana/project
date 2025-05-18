<?php 

include('includes/header.php');

include('middleware/total_product.php');

?>
<!-- start -->
<div class="h-full px-2 py-2 bg-blue-50">
    <div class="w-full h-[100vh] bg-[#ffffff] rounded-md p-5">
        <div class="w-full h-[140px] md:h-[70px] grid grid-cols-2 sm:grid-cols-5 sm:h-[70px] md:grid-cols-6 gap-5">
            <div class="bg-gray-800 h-full flex justify-center items-center flex-col text-white rounded-md sm:text-[11px] text-[10px]">
                <p>Total Brand</p>
                <?php
                $count = countTable("brands");
                ?>
                <p><?= $count ?></p>
            </div>
            <div class="bg-gray-800 h-full flex justify-center items-center flex-col text-white rounded-md sm:text-[11px] text-[10px]">
                <p>Total Sub Category</p>
                <?php
                $count = countTable("product_detail");
                ?>
                <p><?= $count ?></p>
            </div>
        </div>

        <div class="w-full h-[100vh] mt-5 overflow-x-auto rounded-md bg-[#ffffff] shadow-md">
            <table class="text-center w-full table-auto">
                <thead class = "bg-[#f6f8fa]">
                    <tr>
                        <th width="30" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">ID</th>
                        <th width="100" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Name</th>
                        <th width="100" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Total Category</th>
                    </tr>
                </thead>
                <tbody class = "relative">
                    <?php
                    $product_title = getAll('brands');
                    if (mysqli_num_rows($product_title)) {
                        foreach ($product_title as $product) {
                    ?>
                            <tr id="product-<?= $product['id'] ?>" class="hover:bg-blue-50 transition-all">
                                <td class="py-2 px-4 text-xs md:text-sm border-b border-gray-100"><?= $product['id'] ?></td>
                                <td id="productName" class="py-2 px-4 text-xs md:text-sm border-b border-gray-100"><?= $product['name'] ?></td>
                                <td class="py-2 px-4 text-xs md:text-sm border-b border-gray-100">
                                    <span id="circle">
                                        <?php
                                        $count = countCategoryItem("product_detail", $product['id']);
                                        ?>
                                        <?= $count ?>
                                    </span>
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
<?php include('includes/footer.php') ?>
