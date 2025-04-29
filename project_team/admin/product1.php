<?php include('includes/header.php'); ?>
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

        <div class="w-full h-full mt-5 overflow-x-auto">
            <table class="min-w-full border-collapse rounded-md overflow-hidden shadow-sm bg-white">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="py-3 px-4 text-xs md:text-sm border-b border-gray-200 font-semibold text-left">ID</th>
                        <th class="py-3 px-4 text-xs md:text-sm border-b border-gray-200 font-semibold text-left">Name</th>
                        <th class="py-3 px-4 text-xs md:text-sm border-b border-gray-200 font-semibold text-left">Total Category</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
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
