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
                        <li class="mx-1">
                            <a  class="text-[12px] px-2 py-1 border border-gray-500 rounded-md cursor-pointer"><button type = "button" id="exportExcelBtn" name = "button">EXCEL</button></a>
                        </li>
                        <li class="mx-1">
                            <a class="text-[12px] px-2 py-1 border border-gray-500 rounded-md cursor-pointer"><button type = "button" name = "button" id = "printBtn">PRINT</button></a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="flex">
                        <li class = "mx-1">
                        <div class="flex items-center gap-2">
                            <form class="max-w-sm">
                                <select id="page_num" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 h-7 px-2">
                                    <option value="10" selected>Page</option>
                                    <option value="2">20</option>
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

        let currentPage = 1;
        let limit = 10;
        let startPage = $("#startPage");
        let totalPage = $("#totalPage");
        let activeSection = "orders";
        
        $("#page_num").change(function(){
            limit = parseInt($(this).val());
            currentPage = 1;
            startPage.text(currentPage);
            selectPage();
        });


        $("#next_btn").click(function(){
        const totalPageValue = parseInt(totalPage.text());
        if(currentPage < totalPageValue){
            currentPage += 1;
            startPage.text(currentPage);
            selectPage();
        }
            
        });

        $("#back_btn").click(function(){
            if(currentPage > 1){
                currentPage -= 1;
                startPage.text(currentPage);
                selectPage();
            }
            
        });
        // end back button
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
               activeSection = "orders";
               currentPage = 1;
               $("#startPage").text(currentPage);
               order(currentPage);
            });

            $("#payments").click(function () {
               activeSection = "payment";
               currentPage = 1;
               $("#startPage").text(currentPage);
               payment(currentPage);
            });

            $("#products").click(function () {
                activeSection = "product";
                currentPage = 1;
                $("#startPage").text(currentPage);
                product(currentPage);
            });

            function order(page){
                const display = $("#displayData");
                const head = `<tr>
                    <th width="30" class="py-1 text-[11px] md:text-[13px] font-medium">Order #</th>
                    <th width="30" class="py-1 text-[11px] md:text-[13px] font-medium">Customer</th>
                    <th width="100" class="py-1 text-[11px] md:text-[13px] font-medium">Date</th>
                    <th width="100" class="py-1 text-[11px] md:text-[13px] font-medium">Total</th>
                    <th width="60" class="py-1 text-[11px] md:text-[13px] font-medium">Status</th>
                    <th width="60" class="py-1 text-[11px] md:text-[13px] font-medium">Created By</th>
                </tr>`;

                $.ajax({
                    method: "POST",
                    url: "action/getData.php",
                    data: {
                        "page": page,
                        "limit" : limit,
                    },
                    dataType: "json",
                    success: function (data) {
                        if (data) {
                            let txt = "";
                            for(i in data){
                                let item = data[i];
                                txt += `<tr class="border-b border-gray-200">
                                    <td class="text-[11px] md:text-[13px] py-1">${item.id}</td>
                                    <td class="text-[11px] md:text-[13px] py-1 flex justify-center items-center">${item.firstName} ${item.lastName}</td>
                                    <td class="text-[11px] md:text-[13px] py-1">${item.date}</td>
                                    <td class="text-[11px] md:text-[13px] py-1">${item.total}</td>
                                    <td class="text-[11px] md:text-[13px] py-1">
                                        ${item.status == 1 ? '<span class="text-red-500">Pedding</span>' : item.status == 3 ? '<span class="text-green-500">Success</span>' : '<span class="text-blue-500">Pedding</span>'}
                                    </td>
                                    <td class="text-[11px] md:text-[13px] py-1"><span class = 'text-blue-500'>${item.user_id}</span></td>
                                </tr>`;
                            }
                            totalPage.text(Math.ceil( data[0]['total'] / limit));
                            display.html(head + txt);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error("Error fetching orders:", error);
                    }
                });
            }

            function payment(page){
                const display = $("#displayData");
                const head = `<tr>
                    <th width="30" class="py-1 text-[11px] md:text-[13px] font-medium">Order #</th>
                    <th width="30" class="py-1 text-[11px] md:text-[13px] font-medium">Customer</th>
                    <th width="100" class="py-1 text-[11px] md:text-[13px] font-medium">Cash</th>
                    <th width="60" class="py-1 text-[11px] md:text-[13px] font-medium">Status</th>
                    <th width="60" class="py-1 text-[11px] md:text-[13px] font-medium">Created By</th>
                </tr>`;

                $.ajax({
                    method: "POST",
                    url: "action/getPayment.php",
                    data: {
                        "page": page,
                        "limit" : limit,
                    },
                    dataType: "json",
                    success: function (data) {
                        if (data) {
                            let txt = "";
                            for(i in data){
                                let item = data[i];
                                txt += `<tr class="border-b border-gray-200">
                                    <td class="text-[11px] md:text-[13px] py-1">${item.id}</td>
                                    <td class="text-[11px] md:text-[13px] py-1 flex justify-center items-center">${item.firstName} ${item.lastName}</td>
                                    <td class="text-[11px] md:text-[13px] py-1">${item.total}</td>
                                    <td class="text-[11px] md:text-[13px] py-1">
                                        ${item.status == 1 ? '<span class="text-red-500">Pedding</span>' : item.status == 3 ? '<span class="text-green-500">Success</span>' : '<span class="text-blue-500">Pedding</span>'}
                                    </td>
                                    <td class="text-[11px] md:text-[13px] py-1"><span class = 'text-blue-500'>${item.user_id}</span></td>
                                </tr>`;
                            }
                            totalPage.text(Math.ceil( data[0]['total'] / limit));
                            display.html(head + txt);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error("Error fetching orders:", error);
                    }
                });
            }

            function product(page){
                const display = $("#displayData");
                const head = `<tr>
                    <th width="30" class="py-1 text-[11px] md:text-[13px] font-medium">ID #</th>
                    <th width="30" class="py-1 text-[11px] md:text-[13px] font-medium">Barcode</th>
                    <th width="100" class="py-1 text-[11px] md:text-[13px] font-medium">Name</th>
                    <th width="60" class="py-1 text-[11px] md:text-[13px] font-medium">Created By</th>
                </tr>`;

                $.ajax({
                    method: "POST",
                    url: "action/getProducts.php",
                    data: {
                        "page": page,
                        "limit": limit,
                    },
                    dataType: "json",
                    success: function (data) {
                        if (data) {
                            let txt = "";
                            for(i in data){
                                let item = data[i];
                                txt += `<tr class="border-b border-gray-200">
                                    <td class="text-[11px] md:text-[13px] py-1">${item.id}</td>
                                    <td class="text-[11px] md:text-[13px] py-1 flex justify-center items-center">${item.barcode}</td>
                                    <td class="text-[11px] md:text-[13px] py-1">${item.name}</td>
                                    <td class="text-[11px] md:text-[13px] py-1"><span class = 'text-blue-500'>${item.user_id}</span></td>
                                </tr>`;
                            }
                            totalPage.text(Math.ceil( data[0]['total'] / limit));
                            display.html(head + txt);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error("Error fetching products:", error);
                    }
                });
            }
            // handle page limit 
            function selectPage(){
            if(activeSection === "orders"){
                order(currentPage);
            }else if(activeSection === "payment"){
                payment(currentPage);
            }else if(activeSection === "product"){
                product(currentPage);
            }
            }
        });
    </script>

<?php include('includes/footer.php') ?>
