 $(document).ready(function () {

        let currentPage = 1;
        let limit = 10;
        let filterData = '';
        let startPage = $("#startPage");
        let totalPage = $("#totalPage");
        let activeSection = "orders";


        $("#filter").change(function(){
            let value = $(this).val();
            filterData = value;
            product(currentPage);

        });
        
        $("#page_num").change(function(){
            limit = parseInt($(this).val());
            currentPage = 1;
            startPage.text(currentPage);
            product(currentPage);
        });


        $("#next_btn").click(function(){
        const totalPageValue = parseInt(totalPage.text());
        if(currentPage < totalPageValue){
            currentPage += 1;
            startPage.text(currentPage);
            product(currentPage);
        }
            
        });

        $("#back_btn").click(function(){
            if(currentPage > 1){
                currentPage -= 1;
                startPage.text(currentPage);
                product(currentPage);
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

            product(currentPage);

            function product(page){
                const display = $("#displayData");

                $.ajax({
                    method: "POST",
                    url: "action/getProducts.php",
                    data: {
                        "page": page,
                        "limit": limit,
                        "filterData" : filterData,
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
                                    <td class="text-[11px] text-[#3a3f40] md:text-[13px] py-2">${formatDate(item.date)}</td>
                                </tr>`;
                            }
                            $("#totalProducts").text(data[0]['total']);
                            totalPage.text(Math.ceil( data[0]['total'] / limit));
                            display.html(txt);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error("Error fetching products:", error);
                    }
                });
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