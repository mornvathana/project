    $(document).ready(function(){
        let currentPage = 1;
        let totalPage = $("#totalPage");
        let startPage = $("#startPage");
        let limit = 10;
        const display = $("#displayData");

        startPage.text(currentPage);
        // start search 
        $(document).on("keyup","#search",function(){
        const product = $(this).val();
        $.ajax({
            method: "POST",
            url: "action/searchUser.php",
            data: {
                "name" : product,
            },
            dataType: "json",
            success: function (data) {
                if(data.length > 0){
                   let txt = "";
                     for (let i in data) {
                            let item = data[i];
                            const isActive = item.status == 1;
                            const verify = item.emailverify ? item.emailverify : 'unknown';
                            txt += `<tr id="brand-${item.id}">
                            <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${item.id}</td>
                            <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${item.name}</td>
                             <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${item.email}</td>
                            <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${verify}</td>
                            <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">
                                <form action="code.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="brand_id" value="${item.id}">
                                    <button type="submit" name="${isActive ? 'btn_active_user' : 'btn_disable_user'}"
                                        class="${isActive ? 'bg-green-100 text-green-500 border-[1px] border-green-500' : 'bg-red-100 text-red-500 border-[1px] border-red-500'}  px-2 py-[1px] text-[11px] md:text-[13px] rounded-md">
                                        ${isActive ? 'Active' : 'Disable'}
                                    </button>
                                </form>
                            </td>
                            <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${item.created}</td>
                            <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">
                                <div class="flex justify-center items-center gap-5">
                                        <form action="userprofile.php?id=${item.id}" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="brand_id" value="${item.id}">
                                            <button type="submit" name="btn_edit" class="bg-blue-100 border-[1px] border-blue-500 text-blue-500 px-2 py-[1px] text-[11px] md:text-[13px] rounded-md">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </form>
                                        <form action="code.php" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="product_id" value="${item.id}">
                                            <input type="hidden" name="image" value="${item.image}">
                                            <button type="submit" name="product_delete" class="bg-red-100 border-[1px] border-red-500 text-red-500 px-2 py-[1px] text-[11px] md:text-[13px] rounded-md">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                            </td>
                            </tr>`;

                        }
                    display.html(txt); 
                    }else{
                        alert("No Data");
                        }
                    }
            });
        });

        function formatDate(dateString) {
        const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", 
                        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

        const date = new Date(dateString);
        const day = String(date.getDate()).padStart(2, '0');
        const month = months[date.getMonth()];
        const year = date.getFullYear();

        return `${day}-${month}-${year}`;
        }

        // end search

        function load(page) {
                $.ajax({
                method: "POST",
                url: "action/getUser.php",
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
                            const verify = item.emailverify ? item.emailverify : 'unknown';
                            txt += `<tr id="brand-${item.id}">
                            <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${item.id}</td>
                            <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${item.name}</td>
                             <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${item.email}</td>
                            <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${verify}</td>
                            <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">
                                 <form action="code.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="brand_id" value="${item.id}">
                                    <button type="submit" name="${isActive ? 'btn_active_user' : 'btn_disable_user'}"
                                        class="${isActive ? 'bg-green-100 text-green-500 border-[1px] border-green-500' : 'bg-red-100 text-red-500 border-[1px] border-red-500'}  px-2 py-[1px] text-[11px] md:text-[13px] rounded-md">
                                        ${isActive ? 'Active' : 'Disable'}
                                    </button>
                                </form>
                            </td>
                            <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${formatDate(item.created)}</td>
                            <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">
                                <div class="flex justify-center items-center gap-5">
                                        <form action="userprofile.php?id=${item.id}" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="brand_id" value="${item.id}">
                                            <button type="submit" name="btn_edit" class="bg-blue-100 border-[1px] border-blue-500 text-blue-500 px-2 py-[1px] text-[11px] md:text-[13px] rounded-md">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </form>
                                        <form action="code.php" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="product_id" value="${item.id}">
                                            <button type="submit" name="product_delete_user" class="bg-red-100 border-[1px] border-red-500 text-red-500 px-2 py-[1px] text-[11px] md:text-[13px] rounded-md">
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