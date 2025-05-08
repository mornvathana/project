<?php
    include('includes/header.php');

    include('../middleware/adminAccess.php');

    include('middleware/dashboard.php');
?>
        <!-- end header -->
    <div class="h-full px-5 py-5 overflow-y-auto bg-[#f3f5f7] ">
    <div class="grid w-full grid-cols-2 gap-5 md:grid-cols-4 lg:gap-12">
        <div class="overflow-hidden border shadow-md rounded-xl">
            <!-- Box Header -->
            <div class="flex items-center w-full h-8 pl-5 bg-white">
                <small><span class="font-bold">Sale</span>/Today</small>
            </div>
            <div class="flex items-center h-[60px] bg-white justify-evenly">
                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-50">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <!-- Stats -->
                <div class="flex flex-col space-y-1">
                    <strong>145</strong>
                    <small><span class="font-bold text-green-500">12%</span> increase</small>
                </div>
            </div>
        </div>
        <div class="overflow-hidden border shadow-md rounded-xl">
            <!-- Box Header -->
            <div class="flex items-center w-full h-8 pl-5 bg-white">
                <small><span class="font-bold">Revenue</span>/Today</small>
            </div>
            <div class="flex items-center h-[60px] bg-white justify-evenly">
                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-50">
                    <i class="fa-solid fa-dollar-sign"></i>
                </div>
                <!-- Stats -->
                <div class="flex flex-col space-y-1">
                    <strong>$3,246</strong>
                    <small><span class="font-bold text-green-500">7%</span> increase</small>
                </div>
            </div>
        </div>
        <div class="overflow-hidden border shadow-md rounded-xl">
            <!-- Box Header -->
            <div class="flex items-center w-full h-8 pl-5 bg-white">
                <small><span class="font-bold">Customer</span>/Today</small>
            </div>
            <div class="flex items-center h-[60px] bg-white justify-evenly">
                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-50">
                    <i class="fa-solid fa-users"></i>
                </div>
                <!-- Stats -->
                <div class="flex flex-col space-y-1">
                    <strong>1,244</strong>
                    <small><span class="font-bold text-red-500">11%</span> decrease</small>
                </div>
            </div>
        </div>
        <div class="overflow-hidden border shadow-md rounded-xl">
            <!-- Box Header -->
            <div class="flex items-center w-full h-8 pl-5 bg-white">
                <small><span class="font-bold">Sale</span>/Today</small>
            </div>
            <div class="flex items-center h-[60px] bg-white justify-evenly">
                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-50">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <!-- Stats -->
                <div class="flex flex-col space-y-1">
                    <strong>145</strong>
                    <small><span class="font-bold text-green-500">12%</span> increase</small>
                </div>
            </div>
        </div>
    </div>
    <!-- end Card -->
     <div class = "grid grid-cols-1 md:grid-cols-2 xl:grid-cols-[1fr_400px] gap-5 my-8">
        <div id="chart" class = "bg-white rounded-md shadow-md"></div>
        <div id = "chart1" class = "bg-white rounded-md shadow-md"></div>
     </div>
</div>
         <!-- start product -->
<?php include('includes/footer.php')?>
      