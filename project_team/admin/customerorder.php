<?php include('includes/header.php') ?>
<link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
<div class="h-full px-4 py-4 bg-blue-50 min-h-screen">
    <div class="w-full bg-white rounded-xl p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold text-gray-700">📊 Report Overview</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Summary Cards -->
            <div class="grid gap-4 grid-cols-1 sm:grid-cols-3">
                <div class="bg-gray-800 text-white rounded-xl p-4 shadow hover:shadow-lg transition">
                    <p class="text-sm">Finished</p>
                    <p class="text-2xl font-bold mt-1">0</p>
                </div>
                <div class="bg-gray-800 text-white rounded-xl p-4 shadow hover:shadow-lg transition">
                    <p class="text-sm">Processing</p>
                    <p class="text-2xl font-bold mt-1">0</p>
                </div>
                <div class="bg-gray-800 text-white rounded-xl p-4 shadow hover:shadow-lg transition">
                    <p class="text-sm">Pending</p>
                    <p class="text-2xl font-bold mt-1">0</p>
                </div>
            </div>

            <!-- Date Filter -->
            <div class="hidden md:flex items-center justify-end gap-4">
                <div class="relative w-full max-w-xs">
                    <input datepicker id="default-datepicker-1" type="text"
                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm"
                        placeholder="Start Date">
                    <div class="absolute left-3 top-2.5 text-gray-400">
                        <i class="fa-regular fa-calendar"></i>
                    </div>
                </div>
                <div class="relative w-full max-w-xs">
                    <input datepicker id="default-datepicker-2" type="text"
                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm"
                        placeholder="End Date">
                    <div class="absolute left-3 top-2.5 text-gray-400">
                        <i class="fa-regular fa-calendar"></i>
                    </div>
                </div>
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition">Search</button>
            </div>
        </div>
        <!-- Orders List -->
        <div class="mt-8 grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5">
            <?php
            $order = getAll('orders');
            if ($order->num_rows > 0) {
                foreach ($order as $item) {
            ?>
                <div class="bg-blue-100 border border-blue-200 rounded-xl shadow hover:shadow-lg p-4 space-y-2 transition"  id = "order-<?= $item['id']?>">
                    <div class="flex justify-between items-center">
                        <h4 class="font-semibold text-gray-700 text-sm"><?= $item['first_name'] ?> <?= $item['last_name'] ?></h4>
                        <?php if ($item['status'] == 1) { ?>
                            <span class="text-red-500 text-xs"><i class="fa-solid fa-circle"></i></span>
                        <?php } else { ?>
                            <span class="text-green-500 text-xs"><i class="fa-solid fa-circle"></i></span>
                        <?php } ?>
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
                        <button class="bg-green-600 hover:bg-green-700 text-white text-xs px-2 py-1 rounded" type="button" id = "btn_verify" data-id = "<?= $item['id'] ?>"  data-modal-target="crud-modal" data-modal-toggle="crud-modal">Verify</button>
                        <button class="bg-red-600 hover:bg-red-700 text-white text-xs px-2 py-1 rounded" id = "btn_delete" data-id = "<?= $item['id'] ?>">
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
            const display = $("#display1");
            $.ajax({
                method: "GET",
                url: "action/orderGet.php",
                data: {
                    "id" : id, 
                },
                dataType: "json",
                success: function (data) {
                    if(data){
                        let txt = "";
                        data.forEach(item => {
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
                                            <form class="p-4 md:p-5">
                                                <div class="grid gap-4 mb-4 grid-cols-2">
                                                    <div class="col-span-2">
                                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value = "${item.first} ${item.last}" readonly>
                                                    </div>
                                                     <div class="col-span-2">
                                                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">email</label>
                                                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value = "${item.email}" readonly>
                                                    </div>
                                                    <div class="col-span-2">
                                                        <label for="total_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Price</label>
                                                        <input type="text" name="total_price" id="total_price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value = "${item.total_price}" readonly>
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
                                                            <option value="2" ${item.status == 2 ? 'selected' : ''} >Checking</option>
                                                            <option value="3" ${item.status == 3 ? 'selected' : ''} >Completed</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    Save
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div> `;
                        });
                       display.html(txt);
                    }
                }
            });
        });
        $(document).on("click","#closeX",function(){
            $(".addClss").addClass("hidden");
        });
    });
 </script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
<?php include('includes/footer.php') ?>
