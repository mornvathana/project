<?php 
include('includes/header.php');
include('../middleware/adminAccess.php');
include('middleware/menu.php');
include("lang.php");
?>
<!-- end header -->
<div class="h-full px-2 py-2 ">
    <div class="w-full bg-[#f3f5f7] rounded-md p-5">
        <div class="w-full h-[10%] flex justify-between items-center">
            <div>
                <h1 class="font-medium"><?php echo $text['productList']?></h1>
                <a href="createmenu.php" class="bg-[#111729] text-[12px] text-white ml-2 px-2 py-1 font-medium rounded-md">
                    <?php echo $text['createproductlist']?> <i class="fa-solid fa-plus pl-1"></i>
                </a>
            </div>
            <div>
                <div class="flex gap-3">
                    <form class="max-w-sm">
                        <select id="page_num" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 h-7 px-2">
                            <option value="10" selected><?php echo $text['page']?></option>
                            <option value="10">10</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                       </form>
                       <form class="max-w-sm">
                        <select id="filter" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 h-7 px-2">
                            <option value="10" selected><?php echo $text['filter']?></option>
                            <option value="asc">A - Z</option>
                            <option value="desc">Z - A</option>
                        </select>
                       </form>
                </div>
            </div>
        </div>

        <div class="w-full h-[70vh] md:h-[100vh] mt-5 overflow-x-auto rounded-md bg-[#ffffff] shadow-md">
            <table class="text-center w-full table-auto">
                <thead class = "bg-[#f6f8fa]">
                    <tr>
                        <th width="30" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['id']?></th>
                        <th width="100" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['name']?></th>
                        <th width="100" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['image']?></th>
                        <th width="60" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['status']?></th>
                        <th width="60" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['option']?></th>
                    </tr>
                </thead>
                <tbody id = "displayData" class = "relative">
                    
                </tbody>
            </table>
        </div>
         <div class = "w-full h-[20px] flex justify-end items-center mt-3">
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
<script src = "assets/js/menu.js"></script>
<!--  -->
<?php include('includes/footer.php') ?>
