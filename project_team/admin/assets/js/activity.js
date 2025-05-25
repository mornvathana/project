    $(document).ready(function(){
        let currentPage = 1;
        let totalPage = $("#totalPage");
        let startPage = $("#startPage");
        let value = 1;
        let limit = 10;
        const display = $("#displayData");

        startPage.text(currentPage);
        // start select name 
        $("#page_num").click(function(){
            let num = $(this).val();
            value = num;
            load(currentPage);
        });
        // start search 
        $(document).on("keyup","#search",function(){
        const product = $(this).val();
        const display = $("#displayData");
        $.ajax({
            method: "POST",
            url: "action/searchActivity.php",
            data: {
                "name" : product,
                "num" : value
            },
            dataType: "json",
            success: function (data) {
                if(data,length > 0){
                   let txt = "";
                    for (let i in data) {
                        let item = data[i];
                        const ip = item.ipaddress ? item.ipaddress : 'unknown';
                        txt += `<tr id="brand-${item.id}">
                            <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${item.id}</td>
                            <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${item.name}</td>
                            <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${item.action}</td>
                            <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${ip}</td>
                            <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${item.created}</td>
                        </tr>`;
                    }
                    console.log(txt);
                    display.html(txt); 
                }else{
                    display.html(`<tr><td colspan = "6">No Data</td></tr>`);
                }
                }
            });
        });
        // end search

        function load(page) {
                $.ajax({
                method: "POST",
                url: "action/getActivity.php",
                data: {
                    "page": page,
                    "value" : value
                },
                dataType: 'json',
                beforeSend: function(){
                    display.html(`<span class="loader absolute left-[50%] top-[50%]"></span>`);
                },
                success: function (data) {
                    if (data.length > 0) {
                        let txt = "";
                        for (let i in data) {
                            let item = data[i];
                            const ip = item.ipaddress ? item.ipaddress : 'unknown';
                            txt += `<tr id="brand-${item.id}">
                                <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${item.id}</td>
                                <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${item.name}</td>
                                <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${item.action}</td>
                                <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${ip}</td>
                                <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${item.created}</td>
                            </tr>`;
                        }

                        totalPage.text(Math.ceil(data[0]['total'] / limit));
                        display.html(txt); 
                    }else{
                        display.html(`<tr><td colspan = "6">No Data</td></tr>`);
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

        load(0);
    });