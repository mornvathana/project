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
                        <h1 class = "font-medium">Inventory</h1>
                    </div>
                    <div>
                    </div>
                </div>
                <div class="w-full h-[70%] mt-5 overflow-x-auto">
                <div class = "w-full h-[40px] flex justify-between items-center mb-2">
                <div>
                    <ul class = "flex">
                        <li class = "mx-1">
                            <a href="" class = "text-[12px] px-2 py-1 border border-gray-200 rounded-md">Orders</a>
                        </li>
                        <li class = "mx-1">
                            <a href="" class = "text-[12px] px-2 py-1 border border-gray-200 rounded-md">Payments</a>
                        </li>
                        <li class = "mx-1">
                            <a href="" class = "text-[12px] px-2 py-1 border border-gray-200 rounded-md">Product</a>
                        </li>
                    </ul>
                </div>
                <div>
                <ul class = "flex">
                        <li class = "mx-1">
                            <a href="" class = "text-[12px] px-2 py-1 border border-gray-200 rounded-md">EXCEL</a>
                        </li>
                        <li class = "mx-1">
                            <a href="" class = "text-[12px] px-2 py-1 border border-gray-200 rounded-md">PDF</a>
                        </li>
                        <li class = "mx-1">
                            <a href="" class = "text-[12px] px-2 py-1 border border-gray-200 rounded-md">PRINT</a>
                        </li>
                    </ul>
                </div>
                </div>
                <table class = "text-center w-full table-auto">
                    <thead class = "border-b border-gray-200">
                        <tr>
                            <th width = "30" class = "py-1 text-[11px] md:text-[13px] font-medium">Order #</th>
                            <th width = "30" class = "py-1 text-[11px] md:text-[13px] font-medium">Customer</th>
                            <th width = "100" class = "py-1 text-[11px] md:text-[13px] font-medium">Date</th>
                            <th width = "100" class = "py-1 text-[11px] md:text-[13px] font-medium">Total</th>
                            <th width = "60" class = "py-1 text-[11px] md:text-[13px] font-medium">Status</th>
                            <th width = "60" class = "py-1 text-[11px] md:text-[13px] font-medium">Updated</th>
                            <th width = "60" class = "py-1 text-[11px] md:text-[13px] font-medium">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         $brand_title = allProduct();
                         if(mysqli_num_rows($brand_title)){
                            foreach($brand_title as $brand){
                                ?>
                            <tr id = "brand-<?= $brand['id']?>" class = "border-b border-gray-200">
                            <td class = "text-[11px] md:text-[13px] py-1"><?= $brand['id']?></td>
                            <td id = "brandName" class = "text-[11px] md:text-[13px] py-1 flex justify-center items-center">
                            124
                            </td>
                            <td id = "brandName" class = "text-[11px] md:text-[13px] py-1"><?= $brand['name']?></td>
                            <td id = "brandName" class = "text-[11px] md:text-[13px] py-1"><?= $brand['name']?></td>
                            <td class =  "text-[11px] md:text-[13px] py-1">
                                Paid
                            </td>
                            <td class =  "text-[11px] md:text-[13px] py-1">
                                Paid
                            </td>
                            <td class =  "text-[11px] md:text-[13px] py-1 flex justify-center items-center gap-5">
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