<?php 
include('includes/header.php');
include('../middleware/adminAccess.php');
include('middleware/inventory.php');
$barcodeData = "123456789"; // Your barcode value
$barcodeType = "Code128"; // Barcode type (Code128, EAN13, UPC, etc.)
$barcodeURL = "https://barcode.tec-it.com/barcode.ashx?data=$barcodeData&code=$barcodeType&dpi=96";
?>

<div class="h-full px-2 py-2 bg-[#f3f5f7]">
    <div class="w-full bg-[#ffffff] h-[100vh] rounded-md p-5">
        <div class="w-full h-[10%] flex justify-between items-center ">
            <div>
                <h1 class="font-medium">Inventory</h1>
            </div>
            <div>
                <div>
                    <ul class="flex">
                        <li id="orders">
                            <a class="w-[100px] cursor-pointer font-medium text-[#646a7a] pl-2 pr-5 py-2 text-[10px] md:text-[12px] lg:text-[14px] border-b-[2px] border-blue-500"><span class = "text-blue-500">Orders</span> <span id = "totalOrders">1</span></a>
                        </li>
                        <li id="payments">
                            <a class="w-[100px] cursor-pointer font-medium text-[#646a7a] pl-2 pr-5 py-2 text-[10px] md:text-[12px] lg:text-[14px]"><span>Payments</span> <span id = "totalPayments"></span></a>
                        </li>
                        <li id="products">
                            <a class="w-[100px] cursor-pointer font-medium text-[#646a7a] pl-2 pr-5 py-2 text-[10px] md:text-[12px] lg:text-[14px]"><span>Product</span> <span id = "totalProduct"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="w-full h-[70%] mt-5 overflow-x-auto">
            <div class="w-full h-[40px] grid grid-cols-2 flex justify-between items-center mb-2">
                <div>
                <ul class = "flex">
                    <li class = "mx-1">
                        <a  class="bg-white text-[12px] border-[1px] border-gray-500 text-white px-1 py-1 lg:px-2 lg:py-2 font-medium rounded-md"><button type = "button" class = "text-[#646a7a]" id="exportExcelBtn" name = "button"><span><i class="fas fa-download"></i></span> <span>Excel</span></button></a>
                    </li>
                    <li class = "mx-1">
                        <a class="bg-white text-[12px] border-[1px] border-gray-500 text-white px-1 py-1 md:px-2 md:py-2 font-medium rounded-md"><button type = "button" name = "button" class = "text-[#646a7a]" id = "printBtn"><span><i class="fas fa-print"></i></span> <span>Print</span></button></a>
                    </li>
                </ul>
                </div>
                <div class = "flex justify-end items-start">
                    <ul class="flex">
                        <li class = "">
                        <div class="flex items-center gap-2">
                            <form class="max-w-sm hidden md:block">
                                <select id="page_num" class="bg-gray-50 border border-gray-300 text-gray-900 text-[10px] md:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 h-7 px-2">
                                    <option value="10" selected>Page</option>
                                    <option value="2">20</option>
                                    <option value="30">30</option>
                                    <option value="50">50</option>
                                </select>
                                </form>

                                        <!-- Pagination Buttons -->
                                        <a href="#" class="flex items-center justify-center px-2 h-7 me-3 text-[10px] md:text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700" id="back_btn">
                                            <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                                            </svg>
                                            Previous
                                        </a>

                                        <a href="#" class="flex items-center justify-center px-3 h-8 me-3 text-[10px] md:text-sm font-medium text-gray-500 rounded-lg">
                                            <span id="startPage">1</span> / <span id="totalPage">10</span>
                                        </a>

                                        <a href="#" class="flex items-center justify-center px-2 h-7 text-[10px] md:text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700" id="next_btn">
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

            <div id = "printArea" class = "shadow-md">
            <table class="text-center w-full table-auto">
                <thead id="displayHead"></thead>
                <tbody id="displayData"></tbody>
            </table>
            </div>
            <div>
            </div>
        </div>
    </div>
    <!-- excel js -->
    <script src="assets/js/excel.js"></script>
    <!-- jquery code -->
    <script src = "assets/js/inventory.js"></script>

<?php include('includes/footer.php') ?>
