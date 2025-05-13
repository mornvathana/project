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
            const id = $("#userId").val();
            $.ajax({
                method: "POST",
                url: "action/userReport.php",
                data: {
                    "page": page,
                    "limit": limit,
                    "userId" : id
                },
                dataType: "json",
                beforeSend: function(){
                    display.html(`<span class="loader absolute left-[50%]"></span>`);
                },
                success: function (data) {
                    if(data.length > 0){
                        let txt = "";
                        for(i in data){
                            let item = data[i];
                            txt += `<tr id="brand-${item.id}">
                            <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${item.id}</td>
                            <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${item.name}</td>
                             <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${item.product}</td>
                            <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${item.price}</td>
                            <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1">${item.created}</td>
                             <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1"><a href= "action/invoice.php?id=${item.id}" target = "_blank"><i class="fas fa-download text-green-500 rounded-sm p-2 cursor-pointer bg-green-100"></i></a></td>
                            </tr>`;
                        }
                        totalPage.text(Math.ceil( data[0]['total'] / limit));

                        display.html(txt);
                    }else{
                        display.html(`<tr><td colspan = "6">No Data</td></tr>`);
                    }
                }
            });
        }
        load(currentPage);
    });