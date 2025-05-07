<?php 

include('includes/header.php');
include('middleware/category.php');

?>
<!-- start  -->
<div class = "h-full px-2 py-5 bg-[#f3f5f7]">
    <div class = "w-full bg-[#ffffff] h-[100vh] rounded-md p-5">
        <div class = "w-full flex justify-between grid grid-cols-1 md:grid-cols-[1fr_400px] items-center">
            <div class="flex justify-between items-center w-[100%] md:w-full gap-2 grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4">
                <div class = "w-[100%] md:w-[35px] py-1 md:py-2 rounded-sm">
                    <label  class = "text-[13px] font-medium text-[#515151]">Product</label>
                    <select name="product_item" id="product_item" class = "text-[13px] mt-1 border border-gray-400 rounded-md w-full md:w-[100px] xl:w-[120px] py-1 font-medium text-[#515151] outline-none">
                    <option value = "" selected class = "text-[13px]">Select</option>
                    <?php
                    $product = getAll("product_detail");
                    if(mysqli_num_rows($product) > 0){
                        foreach($product as $productItem){
                            ?>
                            <option value="<?= $productItem['name']?>" class = "text-[14px]"><?= $productItem['name']?></option>
                            <?php
                            }
                        }
                    ?>
                    </select>
                </div>
                <div class = "w-[100%] md:w-[35px] py-1 md:py-2 rounded-sm">
                    <label  class = "text-[13px] font-medium text-[#515151]">Brand</label>
                    <select name="product_item" id="product_item" class = "text-[13px] mt-1 border border-gray-400 rounded-md w-full md:w-[100px] xl:w-[120px] py-1 font-medium text-[#515151] outline-none">
                    <option value = "" selected class = "text-[13px]">Select</option>
                    <?php
                    $product = getAll("brands");
                    if(mysqli_num_rows($product) > 0){
                        foreach($product as $productItem){
                            ?>
                            <option value="<?= $productItem['name']?>" class = "text-[14px]"><?= $productItem['name']?></option>
                            <?php
                            }
                        }
                    ?>
                    </select>
                </div>
                <div class = "w-[100%] md:w-[35px] py-1 md:py-2 rounded-sm">
                    <label  class = "text-[13px] font-medium text-[#515151]">Brand</label>
                    <select name="product_item" id="product_item" class = "text-[13px] mt-1 border border-gray-400 rounded-md w-full md:w-[100px] xl:w-[120px] py-1 font-medium text-[#515151] outline-none">
                    <option value = "" selected class = "text-[13px]">Select</option>
                    <?php
                    $product = getAll("brands");
                    if(mysqli_num_rows($product) > 0){
                        foreach($product as $productItem){
                            ?>
                            <option value="<?= $productItem['name']?>" class = "text-[14px]"><?= $productItem['name']?></option>
                            <?php
                            }
                        }
                    ?>
                    </select>
                </div>
                <div class = "md:mt-6 py-2 rounded-sm">
                <a href = "category.php" class = "bg-blue-500 text-white px-2 py-1 font-medium text-sm rounded-md"><i class="fa-solid fa-filter"></i> Add Category</a>
                </div>
            </div>  
            <div class="flex items-start md:justify-end gap-2">
                <form class="max-w-sm">
                    <select id="page_num" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 h-7 px-2">
                        <option value="10" selected>Page</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </form>

                <!-- Pagination Buttons -->
                <a href="#" class="flex items-center justify-center px-2 h-7 me-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700" id="back_btn">
                    <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                    </svg>
                    Previous
                </a>

                <a href="#" class="flex items-center justify-center px-3 h-8 me-3 text-sm font-medium text-gray-500 rounded-lg">
                    <span id="startPage">1</span> / <span id="totalPage">10</span>
                </a>

                <a href="#" class="flex items-center justify-center px-2 h-7 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700" id="next_btn">
                    Next
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>

        </div>
        <div class = "w-full h-full mt-5">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-2" id = "displayData">
                
            </div>
        </div>
    </div>
</div>
<!--  end  -->
<script>
    $(document).ready(function(){
        let currentPage = 1;
        let limit = 10;
        let startPage = $("#startPage");
        let totalPage = $("#totalPage");

        $("#page_num").change(function(){
            limit = parseInt($(this).val());
            currentPage = 1;
            startPage.text(currentPage);
            load(currentPage);
        });


        $("#next_btn").click(function(){
            const totalPageValue = parseInt(totalPage.text());
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
            }
            
        });

        // function 

        function load(page){
            const display = $("#displayData");
            $.ajax({
                method: "POST",
                url: "action/selectPageCategory.php",
                data: {
                    "page": page,
                    "limit": limit
                },
                dataType: "json",
                success: function (data) {
                    if(data){
                        let txt = "";
                        for(i in data){
                            let item = data[i];
                            const image = item.image ? `../uploads/category/${item.image} ` : '../uploads/default/default.jpg';
                            txt += ` <div class = "h-[230px] border shadow-md border-gray-100 rounded-sm p-2" id = "category-${item.id}">
                                <div class = "w-full h-[60%]">
                                    <img src = "${image}" alt = "" class = "w-full h-full object-contain" />
                                </div>
                                <div class = "w-full h-[40%]">
                                    <div class = "w-full h-[70%]">
                                    <div class=" w-full h-[50%] justify-between items-center flex">
                                        <p class = "text-[12px] text-[#515151]">
                                            ${item.brand}
                                        </p>
                                        <p class = "text-[12px] text-[#515151]">${item.name}</p>
                                    </div>
                                    <div class=" w-full h-[50%] justify-center items-center flex">
                                        <p class = "text-[12px] text-[#515151]">$ ${item.price}</p>
                                    </div>
                                    </div>
                                    <div class = " w-full h-[30%] flex justify-end items-center gap-2 text-sm ">
                                    <i class="fa-solid fa-trash-can bg-red-100 border-[1px] border-red-500 text-red-500 p-1 rounded-sm" id = "delete_category" data-category = "${item.id}"></i>
                                    <a href="categoryEdit.php?id=${item.id}"><i class="fa-solid fa-pen-to-square btn-edit bg-blue-100 border-[1px] border-blue-500 text-blue-500 p-1 rouded-sm" ></i></a>
                                    </div>
                                    </div>
                                    </div>`;
                        }
                        totalPage.text(Math.ceil( data[0]['total'] / limit));
                        display.html(txt);
                    }
                }
            });
        }
        load(currentPage);
    });
</script>
<?php include('includes/footer.php')?>