    $(document).ready(function(){
        let currentPage = 1;
        let totalPage = $("#totalPage");
        let startPage = $("#startPage");
        let limit = 10;
        const display = $("#displayData");

        function load(page) {
                $.ajax({
                method: "POST",
                url: "action/discount.php",
                data: {
                    "page": page,
                },
                dataType: 'json',
                beforeSend: function(){
                    display.html(`<span class="loader absolute left-[50%] top-[50%]"></span>`);
                },
                success: function (data) {
                    if (data) {
                        let txt = "";
                        for (let i in data) {
                            let item = data[i];
                            const isActive = item.status == 1;

                            txt += `<tr id="brand-${item.id}">
                                <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${item.id}</td>
                                <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${item.createdBy}</td>
                                <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${item.discount}</td>
                                <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">
                                    <button type="submit"
                                            class="${isActive ? 'bg-green-100 text-green-500 border-[1px] border-green-500' : 'bg-red-100 text-red-500 border-[1px] border-red-500'}  px-2 py-[1px] text-[11px] md:text-[13px] rounded-md">
                                            ${isActive ? 'Unused' : 'redeemed'}
                                    </button>
                                </td>
                                <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">
                                    <div class="flex justify-center items-center gap-5">
                                        <form action="code.php" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="discount_id" value="${item.id}">
                                            <button type="submit" name="discount_delete" class="bg-red-100 border-[1px] border-red-500 text-red-500 px-2 py-[1px] text-[11px] md:text-[13px] rounded-md">
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