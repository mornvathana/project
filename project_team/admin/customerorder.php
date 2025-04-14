<?php include('includes/header.php')?>
<!--  -->
<div class = "h-full px-2 py-2 bg-blue-50">
    <div class = "w-full bg-[#ffffff]   rounded-md p-5">
        <div class = "w-full h-[20px] flex justify-between items-center">
            <div class = "w-[10%] h-full">
                <p class = "font-medium font-md ml-3">Report</p>
            </div>
            <div class = "w-[90%] h-full">

            </div>  
        </div>
        <div class="w-full grid grid-cols-1 md:grid-cols-2">
            <div class="">
            <div class="grid gap-3 grid-cols-1 md:grid-cols-3 lg:grid-cols-3 mt-[30px]">
                <div class="h-[70px] mx-2 border shadow-md border-gray-100 rounded-sm p-2 flex justify-center items-center flex-col bg-gray-800 text-white font-medium text-sm rounded-sm">
                    <p>Finish</p>
                    <p>0</p>
                </div>
                <div class="h-[70px] mx-2 border shadow-md border-gray-100 rounded-sm p-2 flex justify-center items-center flex-col bg-gray-800 text-white font-medium text-sm rounded-sm">
                    <p>Processing</p>
                    <p>0</p>
                </div>
                <div class="h-[70px] mx-2 border shadow-md border-gray-100 rounded-sm p-2 flex justify-center items-center flex-col bg-gray-800 text-white font-medium text-sm rounded-sm">
                    <p>Pedding</p>
                    <p>0</p>
                </div>
            </div>
            </div>
            <div class = "hidden md:block">
                <div class = "w-[100%] h-full">
                    <form action="" class = "w-full h-full flex justify-center gap-5 items-center">
                        <div class = "w-[33%] h-[10px]">                      
                            <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input datepicker id="default-datepicker-1" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Start Date">
                            </div>
                        </div>
                        <div class = "w-[33%] h-[10px]">                      
                            <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input datepicker id="default-datepicker-2" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="End Date">
                            </div>
                        </div>
                        <div class="w-[33%] h-[10px] mt-3">
                            <button class = "text-white font-medium px-5 bg-blue-900  rounded-sm text-sm py-1">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class = "w-full h-full ">
            <div class="grid gap-3 grid-cols-2 md:grid-cols-3 lg:grid-cols-5 mt-[30px]">
                
               <?php
                  $order = getAll('orders');
                  if($order->num_rows > 0){
                    foreach($order as $item){
                    ?>
                     <div class="h-[150px] mx-2 border shadow-md border-gray-100 rounded-sm p-2 bg-blue-50">
                    <div class="flex h-[25%] justify-between items-center">
                        <span class = "text-[13px] font-medium text-[#515151]"><?= $item['first_name'] ?> <?= $item['last_name'] ?></span>
                        <?php
                        if($item['status'] == 1){
                        ?>
                        <span class = "text-red-500"><i class="fa-solid fa-circle"></i></span>
                        <?php
                        }else{
                        ?>
                        <span class = "text-green-500"><i class="fa-solid fa-circle"></i></span>
                        <?php
                        }
                        ?>
                    </div>
                    <hr>
                    <div class="flex h-[25%] justify-between items-center">
                        <span class = "text-[13px] font-medium text-[#515151]">ID</span>
                        <span class = "text-[13px] text-[#515151]"><?= $item['id'] ?></span>
                    </div>
                    <hr>
                    <div class="flex h-[25%] justify-between items-center">
                        <span class = "text-[13px] font-medium text-[#515151]"><i class="fa-regular fa-clock"></i></span>
                        <span class = "text-[13px] text-[#515151]"><?= $item['created_at'] ?></span>
                    </div>
                    <hr>
                    <div class = "flex h-[25%] justify-between items-center">   
                        <button class = "text-[13px] bg-green-500 text-white rounded-sm px-1 font-medium text-[#515151]">Verify</button>
                        <button class = "text-[13px] bg-blue-500 text-white rounded-sm px-1 font-medium text-[#515151]">Check</button>
                        <button class = "text-[13px] bg-red-500 text-white rounded-sm px-1 font-medium text-[#515151]"><i class="fa-solid fa-trash-can"></i></button>
                    </div>
                    </div>
                    <?php
                    }
                  }
               ?>

            </div> 
        </div>
    </div>
           
    </div>
<!--  -->
<?php include('includes/footer.php')?>