<?php 
include('includes/header.php');
include('../middleware/adminAccess.php');
include('middleware/orders.php');
include("lang.php");
?>
<link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
<div class="h-full px-4 py-4 min-h-screen bg-[#f3f5f7]">
    <div class="w-full bg-white h-full rounded-xl p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold text-gray-700">📊 <?php echo $text['report']?></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Summary Cards -->
            <div class="grid gap-4 grid-cols-1 sm:grid-cols-3">
                <div class="bg-gray-800 text-white rounded-xl p-4 shadow hover:shadow-lg transition">
                    <p class="text-sm"><?php echo $text['finish']?></p>
                    <p class="text-2xl font-bold mt-1">
                    <?php
                    $number = countStatus("orders","3");
                    ?>
                    <?= $number?>
                    <?php
                    ?>
                    </p>
                </div>
                <div class="bg-gray-800 text-white rounded-xl p-4 shadow hover:shadow-lg transition">
                    <p class="text-sm"><?php echo $text['processing']?></p>
                    <p class="text-2xl font-bold mt-1">
                    <?php
                    $number = countStatus("orders","2");
                    ?>
                    <?= $number?>
                    <?php
                    ?>
                    </p>
                </div>
                <div class="bg-gray-800 text-white rounded-xl p-4 shadow hover:shadow-lg transition">
                    <p class="text-sm"><?php echo $text['pedding']?></p>
                    <p class="text-2xl font-bold mt-1">
                    <?php
                    $number = countStatus("orders","1");
                    ?>
                    <?= $number?>
                    <?php
                    ?>
                    </p>
                </div>
            </div>

            <!-- Date Filter -->
            <div class = "flex justify-end items-center">
            <form class="max-w-sm w-[110px] mx-2">
            <select id="category_status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-7 px-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value = "" selected><?php echo $text['status']?></option>
                <option value="1"><?php echo $text['pedding']?></option>
                <option value="2"><?php echo $text['processing']?></option>
                <option value="3"><?php echo $text['finish']?></option>
            </select>
            </form>
            <!--  -->
            <form class="max-w-sm w-[70px] mx-2">
            <select id="page_num" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-7 px-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected><?php echo $text['page']?></option>
                <option value="1">20</option>
                <option value="2">30</option>
                <option value="50">50</option>
            </select>
            </form>
            <!--  -->
            <div class="flex">
                <!-- Previous Button -->
                <a href="#" class="flex items-center justify-center px-2 h-7 me-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" id = "back_btn">
                    <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                    </svg>
                    <?php echo $text['previous']?>
                </a>
                <a href="#" class="flex items-center justify-center px-3 h-8 me-3 text-sm font-medium text-gray-500 rounded-lg  dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                    </svg>
                    <span id = "startPage"></span> / <span id = "totalPage">10</span>
                </a>
                <a href="#" class="flex items-center justify-center px-2 h-7 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" id = "next_btn">
                    <?php echo $text['back']?>
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
                </div>
            </div>
        </div>
        <!-- Orders List -->
        <div class="mt-8 grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-6 relative" id = "displayDataStatus">
            
        </div>
    </div>
</div>
<div id = "display1">

</div>

<!-- script -->
<script src = "assets/js/customerorder.js"></script>
<script src="assets/js/flowbite.min.js"></script>
<?php include('includes/footer.php') ?>
