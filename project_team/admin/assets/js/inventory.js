 $(document).ready(function () {

        let currentPage = 1;
        let limit = 10;
        let startPage = $("#startPage");
        let totalPage = $("#totalPage");
        let totalProduct = $("#totalProduct");
        let activeSection = "orders";
        let value = "#orders";

        function buttonAction(value){
            $("ul.flex > li a").removeClass("border-b-[2px] border-blue-500");
            $("ul.flex > li a span:first-child").removeClass("text-blue-500");

            $(value).find("a").addClass("border-b-[2px] border-blue-500");
            $(value).find("span:first-child").addClass("text-blue-500")
        }

        $("ul.flex > li").click(function(){
            value = "#" + $(this).attr("id");
            buttonAction(value);
        });
        
        $("#page_num").change(function(){
            limit = parseInt($(this).val());
            currentPage = 1;
            startPage.text(currentPage);
            selectPage();
          
        });


        $("#next_btn").click(function(){
        const totalPageValue = parseInt(totalPage.text());
        if(currentPage < totalPageValue){
            currentPage += 1;
            startPage.text(currentPage);
            buttonAction(value);
            selectPage();
          
        }
            
        });
        

        $("#back_btn").click(function(){
            if(currentPage > 1){
                currentPage -= 1;
                startPage.text(currentPage);
                selectPage();
              
            }
            
        });
        // end back button
           $("#printBtn").click(function () {
                const printContents = document.getElementById("printArea").innerHTML;
                const printWindow = window.open('', '', 'height=600,width=900');

                printWindow.document.write('<html><head><title>Report Information</title>');
                printWindow.document.write('<style>table { width: 100%; border-collapse: collapse; } th, td { border: 1px solid #ccc; padding: 5px; font-size: 12px;text-align: center; }</style>');
                printWindow.document.write('</head><body>');
                printWindow.document.write(printContents);
                printWindow.document.write('</body></html>');
                printWindow.document.close(); // Close the document stream

                // Introduce a small delay to ensure content is rendered
                setTimeout(function () {
                    printWindow.focus();
                    printWindow.print();
                    printWindow.close();
                }, 250); // Adjust the delay (in milliseconds) as needed
            });

            $("#exportExcelBtn").click(function(){
                const table = $("table");
                const workbook = XLSX.utils.table_to_book(table[0], { sheet: "Sheet 1" });
                XLSX.writeFile(workbook, "table_export.xlsx");
            });
            // excel export 
            $("#orders").click(function () {
               activeSection = "orders";
               currentPage = 1;
               value = "#orders";
               $("#startPage").text(currentPage);
               order(currentPage);
             
               
            });
            
            order(currentPage);

            $("#payments").click(function () {
               activeSection = "payment";
               currentPage = 1;
               value = "#payments";
               buttonAction
               $("#startPage").text(currentPage);
               payment(currentPage);
             
            });

            $("#products").click(function () {
                activeSection = "product";
                currentPage = 1;
                $("#startPage").text(currentPage);
                product(currentPage);
              
            });

            function order(page){
                const display = $("#displayData");
                const head = `<tr class = "bg-[#f6f8fa]">
                    <th width="30" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">#</th>
                    <th width="30" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Customer</th>
                    <th width="100" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Date</th>
                    <th width="100" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Total</th>
                    <th width="60" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Status</th>
                    <th width="60" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Created By</th>
                </tr>`;

                $.ajax({
                    method: "POST",
                    url: "action/getData.php",
                    data: {
                        "page": page,
                        "limit" : limit,
                    },
                    dataType: "json",
                    beforeSend: function(){
                    display.html(`<span class="loader absolute left-[50%] top-[50%]"></span>`);
                    },
                    success: function (data) {
                        if (data.length > 0) {
                            let txt = "";
                            for(i in data){
                                let item = data[i];
                                txt += `<tr class="border-b border-gray-200">
                                    <td class="text-[11px] text-[#3a3f40] md:text-[13px] py-2">${item.id}</td>
                                    <td class="text-[11px] md:text-[13px] py-1 flex justify-center items-center">${item.firstName} ${item.lastName}</td>
                                    <td class="text-[11px] text-[#3a3f40] md:text-[13px] py-2">${formatDate(item.date)}</td>
                                    <td class="text-[11px] text-[#3a3f40] md:text-[13px] py-2">$ ${item.totalprice}</td>
                                    <td class="text-[11px] text-[#3a3f40] md:text-[13px] py-2">
                                        ${item.status == 1 ? '<span class="text-red-500">Pedding</span>' : item.status == 3 ? '<span class="text-green-500">Success</span>' : '<span class="text-blue-500">Pedding</span>'}
                                    </td>
                                    <td class="text-[11px] text-[#3a3f40] md:text-[13px] py-2"><span class = 'text-blue-500'>${item.user_id}</span></td>
                                </tr>`;
                            }
                            $("#totalOrders").text(data[0]['total']);
                            totalPage.text(Math.ceil( data[0]['total'] / limit));
                            display.html(head + txt);
                        }else{
                            display.html(`<tr><td>No Data</td></tr>`);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error("Error fetching orders:", error);
                    }
                });
            }

            function payment(page){
                const display = $("#displayData");
                const head = `<tr class = "bg-[#f6f8fa]">
                    <th width="30" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Order #</th>
                    <th width="30" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Customer</th>
                    <th width="100" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Cash</th>
                    <th width="60" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Status</th>
                    <th width="60" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Created By</th>
                </tr>`;

                $.ajax({
                    method: "POST",
                    url: "action/getPayment.php",
                    data: {
                        "page": page,
                        "limit" : limit,
                    },
                    dataType: "json",
                    beforeSend: function(){
                    display.html(`<span class="loader absolute left-[50%] top-[50%]"></span>`);
                    },
                    success: function (data) {
                        if (data.length > 0) {
                            let txt = "";
                            for(i in data){
                                let item = data[i];
                                txt += `<tr class="border-b border-gray-200">
                                    <td class="text-[11px] text-[#3a3f40] md:text-[13px] py-2">${item.id}</td>
                                    <td class="text-[11px] md:text-[13px] py-1 flex justify-center items-center">${item.firstName} ${item.lastName}</td>
                                    <td class="text-[11px] text-[#3a3f40] md:text-[13px] py-2">$ ${item.totalprice}</td>
                                    <td class="text-[11px] text-[#3a3f40] md:text-[13px] py-2">
                                        ${item.status == 1 ? '<span class="text-red-500">Pedding</span>' : item.status == 3 ? '<span class="text-green-500">Success</span>' : '<span class="text-blue-500">Pedding</span>'}
                                    </td>
                                    <td class="text-[11px] text-[#3a3f40] md:text-[13px] py-2"><span class = 'text-blue-500'>${item.user_id}</span></td>
                                </tr>`;
                            }
                            $("#totalPayments").text(data[0]['total']);
                            totalPage.text(Math.ceil( data[0]['total'] / limit));
                            display.html(head + txt);
                        }else{
                            display.html(`<tr><td>No Data</td></tr>`);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error("Error fetching orders:", error);
                    }
                });
            }

            function product(page){
                const display = $("#displayData");
                const head = `<tr class = "bg-[#f6f8fa]">
                    <th width="30" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">ID #</th>
                    <th width="30" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Barcode</th>
                    <th width="100" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Name</th>
                    <th width="60" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Created By</th>
                </tr>`;

                $.ajax({
                    method: "POST",
                    url: "action/getProducts.php",
                    data: {
                        "page": page,
                        "limit": limit,
                    },
                    dataType: "json",
                    beforeSend: function(){
                    display.html(`<span class="loader absolute left-[50%] top-[50%]"></span>`);
                    },
                    success: function (data) {
                        if (data) {
                            let txt = "";
                            for(i in data){
                                let item = data[i];
                                txt += `<tr class="border-b border-gray-200">
                                    <td class="text-[11px] text-[#3a3f40] md:text-[13px] py-2">${item.id}</td>
                                    <td class="text-[11px] md:text-[13px] py-1 flex justify-center items-center">${item.barcode}</td>
                                    <td class="text-[11px] text-[#3a3f40] md:text-[13px] py-2">${item.name}</td>
                                    <td class="text-[11px] text-[#3a3f40] md:text-[13px] py-2"><span class = 'text-blue-500'>${item.user_id}</span></td>
                                </tr>`;
                            }
                             $("#totalProduct").text(data[0]['total']);
                            totalPage.text(Math.ceil( data[0]['total'] / limit));
                            display.html(head + txt);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error("Error fetching products:", error);
                    }
                });
            }
            // handle page limit 
            function selectPage(){
            if(activeSection === "orders"){
                order(currentPage);
            }else if(activeSection === "payment"){
                payment(currentPage);
            }else if(activeSection === "product"){
                product(currentPage);
            }
            }
            
            function formatDate(dateString) {
            const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", 
                            "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

            const date = new Date(dateString);
            const day = String(date.getDate()).padStart(2, '0');
            const month = months[date.getMonth()];
            const year = date.getFullYear();

            return `${day}-${month}-${year}`;
            }
        });