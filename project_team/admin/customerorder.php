<?php 
include('includes/header.php');
include('../middleware/adminAccess.php');
include('middleware/orders.php');
?>
<link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
<div class="h-full px-4 py-4 min-h-screen bg-[#f3f5f7]">
    <div class="w-full bg-white h-full rounded-xl p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold text-gray-700">📊 Report Overview</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Summary Cards -->
            <div class="grid gap-4 grid-cols-1 sm:grid-cols-3">
                <div class="bg-gray-800 text-white rounded-xl p-4 shadow hover:shadow-lg transition">
                    <p class="text-sm">Finished</p>
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
                    <p class="text-sm">Processing</p>
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
                    <p class="text-sm">Pending</p>
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
                <option selected>Status</option>
                <option value="1">Pedding</option>
                <option value="2">Processing</option>
                <option value="3">Completed</option>
            </select>
            </form>
            <!--  -->
            <form class="max-w-sm w-[70px] mx-2">
            <select id="page_num" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-7 px-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value = "10" selected>Page</option>
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
                    Previous
                </a>
                <a href="#" class="flex items-center justify-center px-3 h-8 me-3 text-sm font-medium text-gray-500 rounded-lg  dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                    </svg>
                    <span id = "startPage"></span> / <span id = "totalPage">10</span>
                </a>
                <a href="#" class="flex items-center justify-center px-2 h-7 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" id = "next_btn">
                    Next
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
                </div>
            </div>
        </div>
        <!-- Orders List -->
        <div class="mt-8 grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5" id = "displayDataStatus">
            <?php
            $order = getAllStatus('orders','1');
            if ($order->num_rows > 0) {
                foreach ($order as $item) {
            ?>
                <div class="bg-blue-100 border border-blue-200 rounded-xl shadow hover:shadow-lg p-4 space-y-2 transition"  id = "order-<?= $item['id']?>">
                    <div class="flex justify-between items-center">
                        <h4 class="font-semibold text-gray-700 text-sm"><?= $item['first_name'] ?> <?= $item['last_name'] ?></h4>
                        <?php if ($item['status'] == 1) { ?>
                            <span class="text-red-500 text-xs"><i class="fa-solid fa-circle"></i></span>
                        <?php } else if($item['status'] == 2) { ?>
                            <span class="text-blue-500 text-xs"><i class="fa-solid fa-circle"></i></span>
                        <?php }else{
                            ?>
                            <span class="text-green-500 text-xs"><i class="fa-solid fa-circle"></i></span>
                            <?php
                        } ?>
                    </div>
                    <hr>
                    <div class="flex justify-between text-xs text-gray-600">
                        <span>ID</span><span><?= $item['id'] ?></span>
                    </div>
                    <div class="flex justify-between text-xs text-gray-600">
                        <span><i class="fa-regular fa-clock"></i></span>
                        <span><?= $item['created_at'] ?></span>
                    </div>
                    <div class="flex justify-between mt-2 gap-1">
                    <?php
                    $status = $item['status'];
                    if ($status == 1) {
                        $btnClass = 'bg-red-500';
                    } elseif ($status == 2) {
                        $btnClass = 'bg-blue-500';
                    } else if ($status == 3) {
                        $btnClass = 'bg-green-500'; 
                    }
                    ?>
                        <button class="<?= $btnClass ?> hover:bg-green-700 text-white text-xs px-2 py-1 rounded" type="button" id = "btn_verify" data-id = "<?= $item['id'] ?>"  data-modal-target="crud-modal" data-modal-toggle="crud-modal">
                            <?php
                                if($item['status'] == 1){
                                    echo 'Verify';
                                }else if($item['status'] == 2){
                                    echo 'Processing';
                                }else if($item['status'] == 3){
                                    echo 'Completed';
                                }
                            ?>
                        </button>
                        <button class="bg-red-100 text-red-500 border-[1px] border-red-500 text-xs px-2 py-1 rounded" id = "btn_delete" data-id = "<?= $item['id'] ?>">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </div>
                </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<div id = "display1">

</div>

<!-- script -->
<script src = "assets/js/customerorder.js"></script>
<script src="assets/js/flowbite.min.js"></script>
<?php include('includes/footer.php') ?>
