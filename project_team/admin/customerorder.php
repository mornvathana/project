<?php 
include('includes/header.php');
include('../middleware/adminAccess.php');
include('middleware/orders.php');
?>
<link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
<div class="h-full px-4 py-4 bg-blue-50 min-h-screen">
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
 <script>
    $(document).ready(function(){
        let currentPage = 2;
        let totalPage = 10;
        let startPage = $("#startPage");
        let selectPage = 0;

        startPage.text(currentPage);

        $("#next_btn").click(function(){
            if(currentPage < totalPage){
                currentPage++;
            }
            startPage.text(currentPage);
            // 
            let status = $("#category_status").val(); 
            reload(status)

        });

        $("#back_btn").click(function(){
            if(currentPage > 1){
                currentPage--;
            }
            startPage.text(currentPage);

            let status = $("#category_status").val(); 
            reload(status)
            
        })

        $(document).on("click","#btn_delete",function(){
            let id = $(this).data("id");
            Swal.fire({
                    icon: 'warning',
                    title: '<span class="text-gray-800 font-semibold text-lg">Are you sure you want to delete?</span>',
                    showCancelButton: true,
                    cancelButtonText: 'Cancel',
                    reverseButtons: true,
                    background: '#fff',
                    focusCancel: true,
                    buttonsStyling: false,
                    customClass: {
                        popup: 'rounded-xl shadow-md p-6',
                        confirmButton: 'bg-red-500 hover:bg-red-600 text-white font-medium px-4 py-2 rounded-md ml-2',
                        cancelButton: 'bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium px-4 py-2 rounded-md',
                    },
                    didOpen: () => {
                        document.querySelector('.swal2-popup').style.width = '400px';
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            method: "POST",
                            url: "deleteProduct.php",
                            data: {
                                "id": id,
                                "scrope": "deleteOrder",
                            },
                            success: function (response) {
                                if(response == 202){
                                    location.reload();
                                    $(`#order-${id}`).remove();
                                }else{
                                    Swal.fire({
                                    icon: 'warning',
                                    title: 'Oops...',
                                    text: 'Product already added!',
                                    confirmButtonText: 'OK',
                                    customClass: {
                                    popup: 'custom-popup', 
                                    }
                                    });
                                }
                            }
                        });
                        
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        console.log("Deletion cancelled.");
                    }
                });
           
        });
        //    
        $(document).on("click","#btn_verify", function(){
            let id = $(this).data("id");
            const display = $("#displayDataStatus");
            $.ajax({
                method: "GET",
                url: "action/orderGet.php",
                data: {
                    "id" : id, 
                },
                dataType: "json",
                success: function (data) {
                    if(data.length > 0){
                        let txt = "";
                        for(i in data){
                            let item = data[i];
                            txt += `<div id="crud-modal" tabindex="-1" aria-hidden="true" class="overflow-y-auto addClss overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-[#fff] rounded-lg shadow-lg dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                    Report 
                                                </h3>
                                                <button type="button" id = "closeX" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <form class="p-4 md:p-5" >
                                                <div class="grid gap-4 mb-4 grid-cols-2">
                                                    <div class="col-span-1">
                                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                                        <input type="hidden" name="id" id="id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value = "${item.id}" readonly>
                                                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value = "${item.first} ${item.last}" readonly>
                                                    </div>
                                                    <div class="col-span-1">
                                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Barcode</label>
                                                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value = "${item.first} ${item.last}" readonly>
                                                    </div>
                                                     <div class="col-span-1">
                                                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">email</label>
                                                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value = "${item.email}" readonly>
                                                    </div>
                                                    <div class="col-span-1">
                                                        <label for="total_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Price</label>
                                                        <input type="text" name="total_price" id="total_price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value = "${item.total_price}" readonly>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="Model" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Model</label>
                                                        <input type="text" name="Model" id="Model" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value = "${item.province}" readonly>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="method_payment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Method Payment</label>
                                                        <input type="text" name="method_payment" id="method_payment" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value = "${item.city}" readonly>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="province" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Province</label>
                                                        <input type="text" name="province" id="province" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value = "${item.province}" readonly>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                                                        <input type="text" name="city" id="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value = "${item.city}" readonly>
                                                    </div>
                                                     <div class="col-span-2 sm:col-span-1">
                                                        <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                                                        <input type="text" name="phone_number" id="phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value = "${item.phone_number}" readonly>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                            <option value="1" ${item.status == 1 ? 'selected' : ''} >Pedding</option>
                                                            <option value="2" ${item.status == 2 ? 'selected' : ''} >Processing</option>
                                                            <option value="3" ${item.status == 3 ? 'selected' : ''} >Completed</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <button id = "btn_save"  type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    Save
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div> `;
                        }
                       display.html(txt);
                    }
                }
            });
        });
        $(document).on("click","#closeX",function(){
            $(".addClss").addClass("hidden");
        });
        // btn_save
        $(document).on("click","#btn_save",function(){
            const status = $("#category").val();
            const id = $("#id").val();
            // 
            $.ajax({
                method: "POST",
                url: "action/updateOrder.php",
                data: {
                    "status" : status,
                    "id" : id,
                },
                dataType: "dataType",
                success: function (response) {
                    if(response == 202){
                        Swal.fire({
                        icon: 'success',
                        title: '<span class="text-gray-800 font-semibold text-lg">Successfully!</span>',
                        showCancelButton: false,  
                        showConfirmButton: false, 
                        timer: 1000,  
                        background: '#fff',
                        focusCancel: true,
                        buttonsStyling: false,
                        customClass: {
                            popup: 'rounded-xl shadow-md p-6',
                        },
                        didOpen: () => {
                            document.querySelector('.swal2-popup').style.width = '400px';
                        }
                        });
                    }
                }
            });
        });

        $(document).on("change","#category_status",function(){
            const status = $("#category_status").val();
            reload(status);
            pageNum(10);
        });

        $(document).on('click','#page_num',function(){
            let num = $(this).val();
            pageNum(num);
        });

        function pageNum(num){
            selectPage = num;
            // 
            let status = $("#category_status").val(); 
            reload(status)
        }

        function reload(status){
            const statusNum = status;
            const display = $("#displayDataStatus");
            const offset = (currentPage - 1) * totalPage;

            $.ajax({
                method: 'GET',
                url: "action/getOrderStatus.php",
                data: {
                    "status": statusNum,
                    "selectPage" : selectPage,
                    "currentPage" : offset,
                },
                dataType: "json",
                success: function (data) {
                    if(data){
                        let txt = "";
                        for(i in data){
                          let item = data[i];
                          let btnClass = "";
                            let btnText = "";
                            let statusIcon = "";

                            if (item.status == 1) {
                                btnClass = 'bg-red-500';
                                btnText = 'Verify';
                                statusIcon = `<span class="text-red-500 text-xs"><i class="fa-solid fa-circle"></i></span>`;
                            } else if (item.status == 2) {
                                btnClass = 'bg-blue-500';
                                btnText = 'Processing';
                                statusIcon = `<span class="text-blue-500 text-xs"><i class="fa-solid fa-circle"></i></span>`;
                            } else {
                                btnClass = 'bg-green-500';
                                btnText = 'Completed';
                                statusIcon = `<span class="text-green-500 text-xs"><i class="fa-solid fa-circle"></i></span>`;
                            }

                            txt += `
                    <div class="bg-blue-100 border border-blue-200 rounded-xl shadow hover:shadow-lg p-4 space-y-2 transition" id="order-${item.id}">
                        <div class="flex justify-between items-center">
                            <h4 class="font-semibold text-gray-700 text-sm">${item.first} ${item.last}</h4>
                            ${statusIcon}
                        </div>
                        <hr>
                        <div class="flex justify-between text-xs text-gray-600">
                            <span>ID</span><span>${item.id}</span>
                        </div>
                        <div class="flex justify-between text-xs text-gray-600">
                            <span><i class="fa-regular fa-clock"></i></span>
                            <span>${item.created_at}</span>
                        </div>
                        <div class="flex justify-between mt-2 gap-1">
                            <button
                                class="${btnClass}  hover:bg-green-700 text-white text-xs px-2 py-1 rounded open-modal"
                                id = "btn_verify"
                                type="button"
                                data-id="${item.id}">
                                ${btnText}
                            </button>
                            <button class="bg-red-100 text-red-500 border-[1px] border-red-500  hover:bg-red-700 text-white text-xs px-2 py-1 rounded-sm " id="btn_delete" data-id="${item.id}">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                    </div>`;
                        }
                        display.html(txt);
                    }
                }
            });
        }
    });
 </script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
<?php include('includes/footer.php') ?>
