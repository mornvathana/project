<?php include('includes/header.php') ?>
<!-- end header -->
<div class="h-full px-2 py-2 bg-blue-50">
    <div class="w-full bg-[#ffffff] h-[100vh] rounded-md p-5">
        <div class="w-full h-[10%] flex justify-between items-center">
            <div>
                <h1 class="font-medium">Brand List</h1>
                <a href="brand.php" class="bg-blue-500 text-[12px] text-white px-2 py-1 font-medium rounded-md">
                    Create Brand <i class="fa-solid fa-plus pl-1"></i>
                </a>
            </div>
            <div>
                <div class="flex">
                    <!-- Previous Button -->
                    <a href="#" id="back_btn" class="flex items-center justify-center px-2 h-7 me-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                        </svg>
                        Previous
                    </a>

                    <!-- Page Number -->
                    <a href="#" class="flex items-center justify-center px-3 h-8 me-3 text-sm font-medium text-gray-500 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span id="startPage">1</span> / <span id="totalPage"></span>
                    </a>

                    <!-- Next Button -->
                    <a href="#" id="next_btn" class="flex items-center justify-center px-2 h-7 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        Next
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="w-full h-[70%] mt-5 overflow-x-auto rounded-md shadow-lg">
            <table class="text-center w-full table-auto">
                <thead>
                    <tr>
                        <th width="30" class="py-2 text-[11px] md:text-[13px] border-b-[2px] border-gray-900 font-medium">ID</th>
                        <th width="100" class="py-2 text-[11px] md:text-[13px] border-b-[2px] border-gray-900 font-medium">Name</th>
                        <th width="100" class="py-2 text-[11px] md:text-[13px] border-b-[2px] border-gray-900 font-medium">Image</th>
                        <th width="60" class="py-2 text-[11px] md:text-[13px] border-b-[2px] border-gray-900 font-medium">Status</th>
                        <th width="60" class="py-2 text-[11px] md:text-[13px] border-b-[2px] border-gray-900 font-medium">Option</th>
                    </tr>
                </thead>
                <tbody id = "displayData">
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--  -->
<script>
    $(document).ready(function(){
        let currentPage = 1;
        let totalPage = $("#totalPage");
        let startPage = $("#startPage");
        let limit = 10;
        const display = $("#displayData");

        function load(page) {
                $.ajax({
                method: "POST",
                url: "action/SelectPage.php",
                data: {
                    "page": page,
                },
                dataType: 'json',
                success: function (data) {
                    if (data) {
                        let txt = "";
                        for (let i in data) {
                            let item = data[i];
                            const imagePath = item.image ? `../uploads/brand/${item.image}` : '../uploads/default/default.jpg';
                            const isActive = item.status == 1;

                            txt += `<tr id="brand-${item.id}">
                                <td class="text-[11px] md:text-[13px] py-2 border-b border-gray-900">${item.id}</td>
                                <td class="text-[11px] md:text-[13px] py-2 border-b border-gray-900">${item.name}</td>
                                <td class="text-[11px] md:text-[13px] py-2 border-b border-gray-900 flex justify-center items-center">
                                    <img src="${imagePath}" class="w-[50px] h-[50px]" alt="image" />
                                </td>
                                <td class="border-b border-gray-900 text-[11px] md:text-[13px] py-2">
                                    <form action="code.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="brand_id" value="${item.id}">
                                        <button type="submit" name="${isActive ? 'btn_active' : 'btn_disable'}"
                                            class="${isActive ? 'bg-green-500' : 'bg-red-500'} text-white px-2 py-[1px] text-[11px] md:text-[13px] rounded-md">
                                            ${isActive ? 'Active' : 'Disable'}
                                        </button>
                                    </form>
                                </td>
                                <td class="border-b border-gray-900 text-[11px] md:text-[13px] py-2">
                                    <div class="flex justify-center items-center gap-5">
                                        <form action="brandedit.php?id=${item.id}" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="brand_id" value="${item.id}">
                                            <button type="submit" name="btn_edit" class="bg-blue-500 text-white px-2 py-[1px] text-[11px] md:text-[13px] rounded-md">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </form>
                                        <form action="code.php" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="brand_id" value="${item.id}">
                                            <input type="hidden" name="image" value="${item.image}">
                                            <button type="submit" name="btn_delete" class="bg-red-500 text-white px-2 py-[1px] text-[11px] md:text-[13px] rounded-md">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>`;
                        }

                        totalPage.text(Math.ceil(data[0]['total'] / limit));
                        display.html(txt); 
                    }
                }
            });
        }

        $("#next_btn").click(function(){

            const totalPageValue = parseInt(totalPage.text())

            if(currentPage < totalPageValue){
                currentPage += 1;
                load(currentPage);
                startPage.text(currentPage);
            }
            

        });
        
        $("#back_btn").click(function(){
            if(currentPage > 1){
                currentPage -= 1;
                load(currentPage);
                startPage.text(currentPage);
            };
            
        });

        load(currentPage);
    });
</script>
<!--  -->
<?php include('includes/footer.php') ?>
