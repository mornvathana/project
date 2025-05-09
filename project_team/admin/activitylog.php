<?php 
include('includes/header.php');
include('../middleware/adminAccess.php');
include('middleware/menu.php');
?>
<!-- end header -->
<div class="h-full px-2 py-2 ">
    <div class="w-full bg-[#f3f5f7] rounded-md p-5">
        <div class="w-full h-[10%] flex justify-between items-center">
             <div class = "w-full h-[8%] flex justify-between items-center">
                <div>
                    <h1 class = "font-medium">Change Information</h1>
                </div>
                <div>
                    <a href = "useradmin.php" class = "bg-blue-500 text-[12px] text-white px-2 py-1 font-medium rounded-md"><i class="fa-solid fa-arrow-left pr-1"></i>Back</a>
                </div>
            </div>
        </div>

        <div class = "w-full h-[50px] mt-5 flex justify-between items-center">
            <div>
                <form class="max-w-md mx-auto w-[500px]">   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required />
                        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>
            </div>
            <div>

            </div>
        </div>

        <div class="w-full h-[100vh] mt-5 overflow-x-auto rounded-md bg-[#ffffff] shadow-md">
            <table class="text-center w-full table-auto">
                <thead class = "bg-[#f6f8fa]">
                    <tr>
                        <th width="30" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">ID</th>
                        <th width="100" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Name</th>
                        <th width="100" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Action</th>
                        <th width="60" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">IP Address</th>
                        <th width="60" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Created at</th>
                    </tr>
                </thead>
                <tbody id = "displayData" class = "relative">
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--  -->
<script src = "assets/js/activity.js"></script>
<!--  -->
<?php include('includes/footer.php') ?>
