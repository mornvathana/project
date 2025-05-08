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