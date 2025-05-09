    $(document).ready(function(){
        let currentPage = 1;
        let totalPage = $("#totalPage");
        let startPage = $("#startPage");
        let limit = 10;
        const display = $("#displayData");

        function load(page) {
                $.ajax({
                method: "POST",
                url: "action/getActivity.php",
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