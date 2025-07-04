<?php 
include('includes/header.php');
include('../middleware/adminAccess.php');
include("lang.php");
?>
<!-- end header -->
<div class="h-full px-2 py-2 ">
    <div class="w-full bg-[#f3f5f7] rounded-md p-5">
        <div class="w-full h-[10%] flex justify-between items-center">
             <div class = "w-full h-[8%] flex justify-between items-center">
                <div>
                    <h1 class = "font-medium"><?php echo $text['usermanagement']?></h1>
                </div>
                <div>
                
                </div>
            </div>
        </div>

        <div class = "w-full h-[30px] mt-5 flex justify-between items-center">
            <div>
                <form class="max-w-md mx-auto w-[300px] lg:w-[400px]">   
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
                <!-- end back and next button -->
            </div>
            <!--  -->
        </div>

        <div class="w-full h-[100vh] mt-5 overflow-x-auto rounded-md bg-[#ffffff] shadow-md">
            <table class="text-center w-full table-auto">
                <thead class = "bg-[#f6f8fa]">
                    <tr>
                        <th width="30" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['id']?></th>
                        <th width="100" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['name']?></th>
                        <th width="100" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['email']?></th>
                        <th width="100" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['emailverify']?></th>
                        <th width="100" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['status']?></th>
                        <th width="60" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['created']?></th>
                         <th width="60" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['option']?></th>
                    </tr>
                </thead>
                <tbody id = "displayData" class = "relative">
                    
                </tbody>
            </table>
            <div class = "w-full h-[20px] my-5 flex justify-end items-center">
                <div class = "flex md:none">
                <div class="flex">
                    <!-- Previous Button -->
                    <a href="#" class="flex items-center justify-center px-2 h-5 me-3 text-[13px] font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" id = "back_btn">
                        <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                        </svg>
                        <?php echo $text['previous']?>
                    </a>
                    <a href="#" class="flex items-center justify-center px-2 h-5 me-3 text-[13px] font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                        </svg>
                        <span id = "startPage"></span> / <span id = "totalPage">10</span>
                    </a>
                    <a href="#" class="flex items-center justify-center px-2 h-5 me-3 text-[13px] font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" id = "next_btn">
                        <?php echo $text['next']?>
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
<script src = "assets/js/userclient.js"></script>
<!--  -->
<?php include('includes/footer.php') ?>
