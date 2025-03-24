<?php 
include('includes/header.php');
$barcodeData = "123456789"; // Your barcode value
$barcodeType = "Code128"; // Barcode type (Code128, EAN13, UPC, etc.)
$barcodeURL = "https://barcode.tec-it.com/barcode.ashx?data=$barcodeData&code=$barcodeType&dpi=96";
?>
<div class = "h-full px-2 py-2 bg-blue-50">
            <div class = "w-full bg-[#ffffff] h-[100vh] rounded-md p-5">
                <div class = "w-full h-[10%] flex justify-between items-center">
                    <div>
                        <h1 class = "font-medium">Product List</h1>
                    </div>
                    <div>
                        <a href = "brand.php" class = "bg-blue-500 text-[12px] text-white px-2 py-1 font-medium rounded-md">Create Brand<i class="fa-solid fa-plus pl-1"></i></a>
                    </div>
                </div>
                <div class="w-full h-[70%] mt-5 overflow-x-auto">
                <table class = "text-center w-full table-auto">
                    <thead>
                        <tr>
                            <th width = "30" class = "py-2 text-[11px] md:text-[13px] border border-gray-200 font-medium">ID</th>
                            <th width = "30" class = "py-2 text-[11px] md:text-[13px] border border-gray-200 font-medium">Barcode</th>
                            <th width = "100" class = "py-2 text-[11px] md:text-[13px] border border-gray-200 font-medium">Name</th>
                            <th width = "100" class = "py-2 text-[11px] md:text-[13px] border border-gray-200 font-medium">Brand</th>
                            <th width = "60" class = "py-2 text-[11px] md:text-[13px] border border-gray-200 font-medium">Status</th>
                            <th width = "60" class = "py-2 text-[11px] md:text-[13px] border border-gray-200 font-medium">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         $brand_title = getAll("brands");
                         if(mysqli_num_rows($brand_title)){
                            foreach($brand_title as $brand){
                                ?>
                            <tr id = "brand-<?= $brand['id']?>">
                            <td class = "text-[11px] md:text-[13px] py-2 border border-gray-200"><?= $brand['id']?></td>
                            <td id = "brandName" class = "text-[11px] md:text-[13px] py-2 border border-gray-200 flex justify-center items-center">
                            <img src="<?php echo $barcodeURL; ?>" class = "w-[100px] h-[40px]" alt="Barcode">
                            </td>
                            <td id = "brandName" class = "text-[11px] md:text-[13px] py-2 border border-gray-200"><?= $brand['name']?></td>
                            <td id = "brandName" class = "text-[11px] md:text-[13px] py-2 border border-gray-200"><?= $brand['name']?></td>
                            <td class = "border border-gray-200 text-[11px] md:text-[13px] py-2">
                                <?php
                                    if($brand['status'] == 1){
                                    ?>
                                    <form action = "code.php" method = "post" enctype = "multipart/form-data">
                                        <input type="hidden" name="brand_id" value = "<?= $brand['id']?>">
                                        <button type = "submit" name = "btn_active" class = "bg-green-500 text-white px-2 py-[1px] text-[11px] md:text-[13px]  rounded-md">Active</button>
                                    </form>
                                    <?php
                                    }else{
                                    ?>
                                    <form action = "code.php" method = "post" enctype = "multipart/form-data">
                                        <input type="hidden" name="brand_id" value = "<?= $brand['id']?>">
                                        <button type = "submit" name = "btn_disable" class = "bg-red-500 text-white px-2 py-[1px] text-[11px] md:text-[13px]  rounded-md">Disable</button>
                                    </form>
                                    <?php
                                    }
                                ?>
                            </td>
                            <td class = "border border-gray-200 text-[11px] md:text-[13px] py-2 flex justify-center items-center gap-5">
                                <form action = "brandedit.php?id=<?= $brand['id'] ?>" method = "post" enctype = "multipart/form-data">
                                    <input type="hidden" name="brand_id" value = "<?= $brand['id']?>">
                                    <button type = "submit" name = "btn_delete" class = "bg-blue-500 text-white px-2 py-[1px] text-[11px] md:text-[13px]  rounded-md"><i class="fas fa-edit"></i></button>
                                </form>
                                <form action = "code.php" method = "post" enctype = "multipart/form-data">
                                    <input type="hidden" name="brand_id" value = "<?= $brand['id']?>">
                                    <input type="hidden" name="image" value = "<?= $brand['image']?>">
                                    <button type = "submit" name = "btn_delete" class = "bg-red-500 text-white px-2 py-[1px] text-[11px] md:text-[13px]  rounded-md"><i class="fas fa-trash"></i></button>
                                </form>
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
<?php include('includes/footer.php')?>