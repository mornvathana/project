    $(document).ready(function(){
        let currentPage = 1;
        let totalPage = $("#totalPage");
        let startPage = $("#startPage");
        let search = "";
        let status = 1;
        let limit = 10;
        const display = $("#displayData");

        $(document).on("click","#viewdetail",function(){
            const data = $(this).data("id");
            $.ajax({
                type: "method",
                url: "url",
                data: "data",
                dataType: "dataType",
                success: function (data) {
                    if(data.length > 0){
                        let txt = "";
                        for(i in data){
                            txt += `<div class="relative p-4 w-full max-w-3xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.666 3.888A2.25 2.25 0 0 0 13.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 0 1-.75.75H9a.75.75 0 0 1-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 0 1 1.927-.184" />
                                        </svg>

                                        <span class="pl-2">Shipping Report</span>
                                    </h3>
                                    
                                </div>

                                <!-- Modal body -->
                                <div class="p-4 md:p-5 grid grid-cols-2 gap-5">
                                    <form class="space-y-4" action="#">
                                        <div class="bg-white rounded-xl shadow-md p-6">
                                            <div class="flex flex-col md:flex-row items-center">
                                                <!-- Status Steps -->
                                                <div class="flex-1">
                                                <div class="space-y-6">
                                                    <!-- Step 1 -->
                                                    <div class="flex items-start">
                                                        <div class="mr-4 flex flex-col items-center">
                                                            <div
                                                                class="w-4 h-4 rounded-full mt-1 mx-1 ${box1} border-4 mt-1">
                                                            </div>
                                                            <div class="w-0.5 h-12 bg-gray-200"></div>
                                                        </div>
                                                        <div>
                                                            <h3 class="font-medium ${color1}">Pedding</h3>
                                                            <p class="text-sm text-gray-600 mt-1">We've received your order</p>
                                                        </div>
                                                    </div>

                                                    <!-- Step 2 -->
                                                    <div class="flex items-start">
                                                        <div class="mr-4 flex flex-col items-center">
                                                            <div
                                                                class="w-4 h-4 rounded-full mt-1 mx-1 ${box2} border-4 mt-1">
                                                            </div>
                                                            <div class="w-0.5 h-12 bg-gray-200"></div>
                                                        </div>
                                                        <div>
                                                            <h3 class="font-medium ${color2}">Processing</h3>
                                                            <p class="text-sm text-gray-600 mt-1">Items packaged and ready for shipment</p>
                                                        </div>
                                                    </div>
                                                    <!-- Step 4 -->
                                                    <div class="flex items-start">
                                                        <div class="mr-4 flex flex-col items-center">
                                                            <div class="w-4 h-4 rounded-full mt-1 mx-1 ${box3} border-4 border-gray-100 mt-1">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <h3 class="font-medium ${color3}">Delivered</h3>
                                                            <p class="text-sm text-gray-600 mt-1">Estimated delivery date</p>
                                                        </div>
                                                    </div>

                                                </div><!-- .space-y-6 -->
                                                </div><!-- .flex-1 -->
                                            </div><!-- .flex -->
                                        </div><!-- .p-6 -->
                                    </form>
                                <div class="bg-white rounded-xl shadow-md p-6">
                                    <h2 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                                        <i class="fas fa-truck text-gray-500 mr-2"></i>
                                        Shipping Details
                                    </h2>
                                    <div class="text-gray-600">
                                        <p class="font-medium flex my-2">
                                        <span class = "mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                        </svg>
                                        </span>
                                         ${item.username}
                                        </p>
                                        <p class = "flex my-2">
                                        <span class = "mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 0 0-8.862 12.872M12.75 3.031a9 9 0 0 1 6.69 14.036m0 0-.177-.529A2.25 2.25 0 0 0 17.128 15H16.5l-.324-.324a1.453 1.453 0 0 0-2.328.377l-.036.073a1.586 1.586 0 0 1-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 0 1-5.276 3.67m0 0a9 9 0 0 1-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                                        </svg>
                                        </span>
                                         ${item.city}, ${item.province}</p>
                                        <p class = "flex my-2">
                                        <span class = "mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                                        </svg>
                                        </span>
                                         ${item.shippingMethod}</p>
                                        <p class="mt-2">
                                            <i class="fas fa-phone-alt mr-2"></i> ${item.phonenumber}
                                        </p>
                                    </div>
                                </div>
                                </div><!-- .p-4 -->
                            </div><!-- .modal content -->
                        </div>`;
                        }
                    }else{

                    }
                }
            });
        });

        $("#status").on("change",function(){
            let value = $(this).val();
            status = value;
            load(currentPage,search,status);
        });

        $(document).on("keyup","#search",function(){
            let num = $(this).val();
            search = num;
            load(currentPage,search,status);
        });

        function load(page,search,status) {
                $.ajax({
                method: "POST",
                url: "action/discount.php",
                data: {
                    "page": page,
                    "search" : search,
                    "status" : status,
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
                                    ${isActive ? `<div class="flex justify-center items-center gap-5">
                                        <form action="code.php" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="discount_id" value="${item.id}">
                                            <button type="submit" name="discount_delete" class="bg-red-100 border-[1px] border-red-500 text-red-500 px-2 py-[1px] text-[11px] md:text-[13px] rounded-md">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>` : `<div class="flex justify-center items-center gap-5">
                                            <input type="hidden" name="discount_id" value="${item.id}">
                                            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" data-id = "${item.id}" type="submit" id = "viewdetail" class=" border-[1px] border-blue-500 bg-blue-100 text-blue-500 px-2 py-[1px] text-[11px] md:text-[13px] rounded-md">
                                                View Detail
                                            </button>
                                    </div>`}
                                </td>
                            </tr>`;
                        }

                        totalPage.text(Math.ceil(data[0]['total'] / limit));
                        display.html(txt); 
                    }else{
                         display.html(`<tr><td>No Data</td></tr>`);
                    }
                }
            });
        }

        $("#next_btn").click(function(){
            
            const totalPageValue = parseInt(totalPage.text())

            if(currentPage < totalPageValue){
                currentPage += 1;
                load(currentPage,search,status);
                startPage.text(currentPage);
            }
            

        });
        
        $("#back_btn").click(function(){
            if(currentPage > 1){
                currentPage -= 1;
                load(currentPage,search,status);
                startPage.text(currentPage);
            };
            
        });

        load(currentPage,search,status);
    });