<?php
    include('includes/header.php');

    include('../middleware/adminAccess.php');

    include('middleware/discount.php');

    include("lang.php");
?>
<div class="h-full px-2 py-2 ">
    <div class="w-full bg-[#f3f5f7] rounded-md p-5">
        <div class="w-full h-[10%] flex justify-between items-center">
            <div>
                <h1 class="font-medium"><?php echo $text['promotionCode']?></h1>
                <a href="creatediscount.php" class="bg-[#111729] text-[12px] text-white ml-2 px-2 py-1 font-medium rounded-md">
                    <?php echo $text['createpromotion']?> <i class="fa-solid fa-plus pl-1"></i>
                </a>
            </div>
            <div class = "flex justify-center items-center gap-2">
                <form class="max-w-sm">
                    <select id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 h-7 px-2">
                        <option value = "1" selected><?php echo $text['status']?></option>
                        <option value="1">Unused</option>
                        <option value="0">Redeemed</option>
                    </select>
                </form>
                <form class="max-w-md mx-auto w-[330px] lg:w-[400px]">   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"><?php echo $text['search']?></label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="search" class="block h-[43px] w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name" required />
                    </div>
                </form>
            </div>
        </div>

        <div class="w-full h-[60vh] mt-5 overflow-x-auto rounded-md bg-[#ffffff] shadow-md">
            <table class="text-center w-full table-auto">
                <thead class = "bg-[#f6f8fa]">
                    <tr>
                        <th width="30" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['id']?></th>
                        <th width="100" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['name']?></th>
                        <th width="100" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['promotionCode']?></th>
                        <th width="60" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['status']?></th>
                        <th width="60" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['option']?></th>
                    </tr>
                </thead>
                <tbody id = "displayData" class = "relative">
                    
                </tbody>
            </table>
        </div>
        <div class = "w-full h-[10px] flex justify-end items-center mt-5">
                <div class="flex">
                    <!-- Previous Button -->
                    <a href="#" id="back_btn" class="flex items-center justify-center px-2 h-7 me-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                        </svg>
                        <?php echo $text['previous']?>
                    </a>

                    <!-- Page Number -->
                    <a href="#" class="flex items-center justify-center px-3 h-8 me-3 text-sm font-medium text-gray-500 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span id="startPage">1</span> / <span id="totalPage"></span>
                    </a>

                    <!-- Next Button -->
                    <a href="#" id="next_btn" class="flex items-center justify-center px-2 h-7 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <?php echo $text['next']?>
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
    </div>
</div>
<!--  -->
<script src = "assets/js/discount.js"></script>
<?php
    include('includes/footer.php');
?>