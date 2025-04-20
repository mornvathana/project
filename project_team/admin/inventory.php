<?php 
include('includes/header.php');
$barcodeData = "123456789"; // Your barcode value
$barcodeType = "Code128"; // Barcode type (Code128, EAN13, UPC, etc.)
$barcodeURL = "https://barcode.tec-it.com/barcode.ashx?data=$barcodeData&code=$barcodeType&dpi=96";
?>

<div class="h-full px-2 py-2 bg-blue-50">
    <div class="w-full bg-[#ffffff] h-[100vh] rounded-md p-5">
        <div class="w-full h-[10%] flex justify-between items-center">
            <div>
                <h1 class="font-medium">Inventory</h1>
            </div>
            <div></div>
        </div>

        <div class="w-full h-[70%] mt-5 overflow-x-auto">
            <div class="w-full h-[40px] flex justify-between items-center mb-2">
                <div>
                    <ul class="flex">
                        <li class="mx-1" id="orders">
                            <a class="text-[12px] px-2 py-1 border border-gray-500 rounded-md cursor-pointer">Orders</a>
                        </li>
                        <li class="mx-1" id="payments">
                            <a class="text-[12px] px-2 py-1 border border-gray-500 rounded-md cursor-pointer">Payments</a>
                        </li>
                        <li class="mx-1" id="products">
                            <a class="text-[12px] px-2 py-1 border border-gray-500 rounded-md cursor-pointer">Product</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="flex">
                        <li class="mx-1">
                            <a  class="text-[12px] px-2 py-1 border border-gray-500 rounded-md cursor-pointer"><button type = "button" id="exportExcelBtn" name = "button">EXCEL</button></a>
                        </li>
                        <li class="mx-1">
                            <a class="text-[12px] px-2 py-1 border border-gray-500 rounded-md cursor-pointer"><button type = "button" name = "button" id = "printBtn">PRINT</button></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div id = "printArea">
            <table class="text-center w-full table-auto">
                <thead class="border-b border-gray-200" id="displayHead"></thead>
                <tbody id="displayData"></tbody>
            </table>
            </div>
        </div>
    </div>
    <!-- excel js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.2/xlsx.full.min.js"></script>
    <!-- jquery code -->
    <script>
        $(document).ready(function () {
           $("#printBtn").click(function () {
                const printContents = document.getElementById("printArea").innerHTML;
                const printWindow = window.open('', '', 'height=600,width=900');

                printWindow.document.write('<html><head><title>Report Information</title>');
                printWindow.document.write('<style>table { width: 100%; border-collapse: collapse; } th, td { border: 1px solid #ccc; padding: 5px; font-size: 12px;text-align: center; }</style>');
                printWindow.document.write('</head><body>');
                printWindow.document.write(printContents);
                printWindow.document.write('</body></html>');
                printWindow.document.close(); // Close the document stream

                // Introduce a small delay to ensure content is rendered
                setTimeout(function () {
                    printWindow.focus();
                    printWindow.print();
                    printWindow.close();
                }, 250); // Adjust the delay (in milliseconds) as needed
            });

            $("#exportExcelBtn").click(function(){
                const table = $("table");
                const workbook = XLSX.utils.table_to_book(table[0], { sheet: "Sheet 1" });
                XLSX.writeFile(workbook, "table_export.xlsx");
            });
            // excel export 
            $("#orders").click(function () {
                const display = $("#displayData");
                const head = `<tr>
                    <th width="30" class="py-1 text-[11px] md:text-[13px] font-medium">Order #</th>
                    <th width="30" class="py-1 text-[11px] md:text-[13px] font-medium">Customer</th>
                    <th width="100" class="py-1 text-[11px] md:text-[13px] font-medium">Date</th>
                    <th width="100" class="py-1 text-[11px] md:text-[13px] font-medium">Total</th>
                    <th width="60" class="py-1 text-[11px] md:text-[13px] font-medium">Status</th>
                    <th width="60" class="py-1 text-[11px] md:text-[13px] font-medium">Updated</th>
                </tr>`;

                $.ajax({
                    method: "GET",
                    url: "action/getData.php",
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: "json",
                    success: function (data) {
                        if (data) {
                            let txt = "";
                            data.forEach(item => {
                                txt += `<tr class="border-b border-gray-200">
                                    <td class="text-[11px] md:text-[13px] py-1">${item.id}</td>
                                    <td class="text-[11px] md:text-[13px] py-1 flex justify-center items-center">${item.firstName} ${item.lastName}</td>
                                    <td class="text-[11px] md:text-[13px] py-1">${item.date}</td>
                                    <td class="text-[11px] md:text-[13px] py-1">${item.total}</td>
                                    <td class="text-[11px] md:text-[13px] py-1">
                                        ${item.status == 1 ? '<span class="text-red-500">Pedding</span>' : item.status == 0 ? '<span class="text-green-500">Success</span>' : '<span class="text-gray-500">Unknown</span>'}
                                    </td>
                                    <td class="text-[11px] md:text-[13px] py-1"><span class = 'text-blue-500'>${item.user_id}</span></td>
                                </tr>`;
                            });
                            display.html(head + txt);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error("Error fetching orders:", error);
                    }
                });
            });

            $("#payments").click(function () {
                const display = $("#displayData");
                const head = `<tr>
                    <th width="30" class="py-1 text-[11px] md:text-[13px] font-medium">Order #</th>
                    <th width="30" class="py-1 text-[11px] md:text-[13px] font-medium">Customer</th>
                    <th width="100" class="py-1 text-[11px] md:text-[13px] font-medium">Cash</th>
                    <th width="60" class="py-1 text-[11px] md:text-[13px] font-medium">Status</th>
                    <th width="60" class="py-1 text-[11px] md:text-[13px] font-medium">Updated</th>
                    <th width="60" class="py-1 text-[11px] md:text-[13px] font-medium">Action</th>
                </tr>`;

                $.ajax({
                    method: "GET",
                    url: "action/getPayment.php",
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: "json",
                    success: function (data) {
                        if (data) {
                            let txt = "";
                            data.forEach(item => {
                                txt += `<tr class="border-b border-gray-200">
                                    <td class="text-[11px] md:text-[13px] py-1">${item.id}</td>
                                    <td class="text-[11px] md:text-[13px] py-1 flex justify-center items-center">${item.firstName} ${item.lastName}</td>
                                    <td class="text-[11px] md:text-[13px] py-1">${item.total}</td>
                                    <td class="text-[11px] md:text-[13px] py-1">
                                        ${item.status == 1 ? '<span class="text-red-500">Pedding</span>' : item.status == 0 ? '<span class="text-green-500">Success</span>' : '<span class="text-gray-500">Unknown</span>'}
                                    </td>
                                    <td class="text-[11px] md:text-[13px] py-1"><span class = 'text-blue-500'>${item.user_id}</span></td>
                                    <td class="text-[11px] md:text-[13px] py-1 flex justify-center items-center gap-5">
                                        <button type="submit" name="btn_delete" class="bg-blue-500 text-white px-2 py-[1px] text-[11px] md:text-[13px] rounded-md"><i class="fas fa-edit"></i></button>
                                    </td>
                                </tr>`;
                            });
                            display.html(head + txt);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error("Error fetching orders:", error);
                    }
                });
            });

            $("#products").click(function () {
                const display = $("#displayData");
                const head = `<tr>
                    <th width="30" class="py-1 text-[11px] md:text-[13px] font-medium">ID #</th>
                    <th width="30" class="py-1 text-[11px] md:text-[13px] font-medium">Barcode</th>
                    <th width="100" class="py-1 text-[11px] md:text-[13px] font-medium">Name</th>
                    <th width="60" class="py-1 text-[11px] md:text-[13px] font-medium">Created_at</th>
                    <th width="60" class="py-1 text-[11px] md:text-[13px] font-medium">Action</th>
                </tr>`;

                $.ajax({
                    method: "GET",
                    url: "action/getProducts.php",
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: "json",
                    success: function (data) {
                        if (data) {
                            let txt = "";
                            data.forEach(item => {
                                txt += `<tr class="border-b border-gray-200">
                                    <td class="text-[11px] md:text-[13px] py-1">${item.id}</td>
                                    <td class="text-[11px] md:text-[13px] py-1 flex justify-center items-center">${item.barcode}</td>
                                    <td class="text-[11px] md:text-[13px] py-1">${item.name}</td>
                                    <td class="text-[11px] md:text-[13px] py-1">${item.created}</td>
                                    <td class="text-[11px] md:text-[13px] py-1 flex justify-center items-center gap-5">
                                        <form method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="brand_id" value="">
                                            <button type="submit" name="btn_delete" class="bg-blue-500 text-white px-2 py-[1px] text-[11px] md:text-[13px] rounded-md"><i class="fas fa-edit"></i></button>
                                        </form>
                                        <form action="code.php" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="brand_id" value="">
                                            <input type="hidden" name="image">
                                            <button type="submit" name="btn_delete" class="bg-red-500 text-white px-2 py-[1px] text-[11px] md:text-[13px] rounded-md"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>`;
                            });
                            display.html(head + txt);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error("Error fetching products:", error);
                    }
                });
            });
        });
    </script>

<?php include('includes/footer.php') ?>
