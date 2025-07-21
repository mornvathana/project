 $(document).ready(function(){
        let currentPage = 1;
        let totalPage = $("#totalPage");
        let startPage = $("#startPage");
        let limit = 10;
        let status = 0;
        let orderid = 0;
        let title = '';
        let optionvalue = '';

        startPage.text(currentPage);

        $("#next_btn").click(function(){
            const totalPageValue = parseInt(totalPage.text());

            if(currentPage < totalPageValue){
                currentPage += 1;
                startPage.text(currentPage);
                reload(currentPage,status);
            }


        });

        $("#back_btn").click(function(){
            if(currentPage > 1){
                currentPage -= 1;
                startPage.text(currentPage);
                reload(currentPage,status);
            };
        })

        $(document).on("click","#btn_delete",function(){
            let id = $(this).data("id");
            Swal.fire({
                    icon: 'warning',
                    title: '<span class="text-gray-800 font-semibold text-lg">Are you sure you want to delete?</span>',
                    showCancelButton: true,
                    cancelButtonText: 'Cancel',
                    reverseButtons: true,
                    background: '#fff',
                    focusCancel: true,
                    buttonsStyling: false,
                    customClass: {
                        popup: 'rounded-xl shadow-md p-6',
                        confirmButton: 'bg-red-500 hover:bg-red-600 text-white font-medium px-4 py-2 rounded-md ml-2',
                        cancelButton: 'bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium px-4 py-2 rounded-md',
                    },
                    didOpen: () => {
                        document.querySelector('.swal2-popup').style.width = '400px';
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            method: "POST",
                            url: "deleteProduct.php",
                            data: {
                                "id": id,
                                "scrope": "deleteOrder",
                            },
                            success: function (response) {
                                if(response == 202){
                                    location.reload();
                                    $(`#order-${id}`).remove();
                                }else{
                                    Swal.fire({
                                    icon: 'warning',
                                    title: 'Oops...',
                                    text: 'Product already added!',
                                    confirmButtonText: 'OK',
                                    customClass: {
                                    popup: 'custom-popup', 
                                    }
                                    });
                                }
                            }
                        });
                        
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        console.log("Deletion cancelled.");
                    }
                });
           
        });
        // 
        $(document).on("click","#product",function(){
            optionvalue = "";
            let name = $(this).text();
            title = name;
            ordercheck(orderid,title);
        });

        $(document).on("click","#info",function(){
            optionvalue = "info";
            ordercheck(orderid,title);
        });
        
        $(document).on("click","#btn_verify", function(){
            let id = $(this).data("id");
            orderid = id;
            ordercheck(orderid,title);
        });

        const ordercheck = (id,title) =>{
             const display = $("#displayDataStatus");
            $.ajax({
                method: "POST",
                url: "action/orderGet.php",
                data: {
                    "id" : id, 
                    "title" : title,
                },
                dataType: "json",
                success: function (data) {
                    if(data.length > 0){
                        let txt = "";
                        for(i in data){ 
                            let item = data[i];
                            let product1 = item.productname1;

                            let name = item.productname; 
                            let lastName = '';

                            if (Array.isArray(name)) {
                                lastName = name[name.length - 1];
                            }else{
                                lastName = name;
                            } 

                            let barcode = item.barcode;
                            let status  = item.status;
                            let totalprice = item.totalprice;
                            let delivery = item.delivery;
                            let image = item.image;
                            if(optionvalue == 'info'){
                            
                            let itemmenu = "";
                            for(let i in product1){
                                itemmenu += `<li class = "mx-2 border-b-[2px] border-blue-500 py-2 px-5 cursor-pointer text-sm" id = "product">${product1[i]}</li>`;
                            }
                            
                            txt += `<div id="crud-modal" tabindex="-1" aria-hidden="true"
    class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto bg-black/40 p-4">
    <div class="relative w-full max-w-3xl bg-white dark:bg-gray-800 rounded-xl shadow-lg">
        <!-- Header -->
        <div class="flex items-center justify-between p-4 border-b border-gray-200 dark:border-gray-700">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                Report Sell
            </h3>
            <button id="closeX" type="button"
                class="w-8 h-8 rounded-full flex items-center justify-center text-gray-400 hover:text-gray-600 hover:bg-gray-100 dark:hover:text-white dark:hover:bg-gray-700">
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 14 14" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7L1 13" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>

        <!-- Body -->
        <div class="p-5 space-y-6">
            <!-- Header Menu -->
            <div class="flex justify-between items-center">
                <ul class="flex gap-3 text-sm text-gray-600 dark:text-gray-300">
                    ${itemmenu}
                </ul>
                <ul>
                    <li id="info"
                        class="cursor-pointer border-b-2 border-blue-500 px-4 py-1 text-sm text-blue-600 dark:text-blue-400 font-medium">
                        Client Info
                    </li>
                </ul>
            </div>

            <!-- Content Section -->
            <div class="flex flex-col md:flex-row gap-6">
                <!-- Image -->
                <div class="md:w-2/5 flex items-center justify-center">
                    <img src="../uploads/default/default.png"
                        class="w-48 h-48 object-cover rounded-md border border-gray-200 dark:border-gray-600" />
                </div>

                <!-- Info Table -->
                <div class="md:w-3/5 w-full">
                    <table class="w-full text-sm text-left text-gray-700 dark:text-gray-300">
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            <tr>
                                <th class="px-4 py-2 font-medium text-gray-900 dark:text-white">Full Name</th>
                                <td class="px-4 py-2">${item.first} ${item.last}</td>
                            </tr>
                            <tr>
                                <th class="px-4 py-2 font-medium text-gray-900 dark:text-white">Address</th>
                                <td class="px-4 py-2">${item.city} city, ${item.province} province</td>
                            </tr>
                            <tr>
                                <th class="px-4 py-2 font-medium text-gray-900 dark:text-white">Email</th>
                                <td class="px-4 py-2">${item.email}</td>
                            </tr>
                            <tr>
                                <th class="px-4 py-2 font-medium text-gray-900 dark:text-white">Phone Number</th>
                                <td class="px-4 py-2">${item.phone_number}</td>
                            </tr>
                            <tr>
                                <th class="px-4 py-2 font-medium text-gray-900 dark:text-white">Status</th>
                                <td class="px-4 py-2">
                                    <select id="category"
                                        class="w-full rounded-lg border border-gray-300 bg-gray-50 px-3 py-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                        ${item.status == 3 ? `
                                            <option value="3" selected>Completed</option>` : ''}
                                        ${item.status == 2 ? `
                                            <option value="2" selected>Process</option>
                                            <option value="3">Completed</option>` : ''}
                                        ${item.status == 1 ? `
                                            <option value="1" selected>Pending</option>
                                            <option value="2">Process</option>
                                            <option value="3">Completed</option>` : ''}
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Hidden ID -->
                    <input type="hidden" name="id" id="pdid" value="${item.id}" />

                    <!-- Save Button -->
                    <div class="mt-4 text-end">
                        <button id="btn_save" type="submit"
                            class="inline-flex items-center px-6 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
`;
                            }else{

                            let itemmenu = "";
                            for(let i in product1){
                                itemmenu += `<li class = "mx-2 border-b-[2px] border-blue-500 py-2 px-5 cursor-pointer text-sm" id = "product">${product1[i]}</li>`;
                            }
                            
                            let item = "";
                            for(let i in name){
                                item += `${name[i]}`;
                            }

                            let barcode1 = "";
                            for(let i in barcode){
                                barcode1 += `${barcode[i]}`;
                            }

                            let status1 = "";
                            for(let i in status){
                                status1 += `${status[i]}`;
                            }

                            let totalprice1 = "";
                            for(let i in totalprice){
                                totalprice1 += `${totalprice[i]}`;
                            }

                            let delivery1 = "";
                            for(let i in delivery){
                                delivery1 += `${delivery[i]}`;
                            }

                            let image1 = "";
                            for(let i in image){
                                image1 += `${image[i]}`;
                            }

                            txt += `<div id="crud-modal" tabindex="-1" aria-hidden="true"
                                class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto overflow-x-hidden p-4 bg-black/40">
                                <div class="relative w-full max-w-3xl bg-white rounded-xl shadow-xl dark:bg-gray-800">
                                    <!-- Header -->
                                    <div class="flex items-center justify-between p-4 border-b dark:border-gray-700">
                                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Report Orders</h3>
                                        <button id="closeX" type="button"
                                            class="text-gray-400 hover:text-gray-600 dark:hover:text-white rounded-full w-8 h-8 flex items-center justify-center">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 14 14" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7L1 13" />
                                            </svg>
                                        </button>
                                    </div>

                                    <!-- Modal Content -->
                                    <div class="p-5 space-y-6">
                                        <!-- Tabs / Navigation -->
                                        <div class="flex justify-between items-center">
                                            <ul class="flex gap-3 text-sm text-gray-600 dark:text-gray-300">
                                                ${itemmenu}
                                            </ul>
                                            <ul>
                                                <li id="info"
                                                    class="cursor-pointer border-b-2 border-blue-500 px-4 py-1 text-sm text-blue-600 dark:text-blue-400 font-medium">
                                                    Client Info
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Main Body -->
                                        <div class="flex flex-col md:flex-row gap-6">
                                            <!-- Image Section -->
                                            <div class="md:w-2/5 flex items-center justify-center">
                                                <img src="../uploads/category/${image1}"
                                                    class="w-48 h-48 object-cover rounded-md border border-gray-200 dark:border-gray-600" alt="Product">
                                            </div>

                                            <!-- Table Section -->
                                            <div class="md:w-3/5">
                                                <div class="overflow-hidden rounded-md border border-gray-200 dark:border-gray-700">
                                                    <table class="w-full text-sm text-left text-gray-700 dark:text-gray-300">
                                                        <thead class="bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white">
                                                            <tr>
                                                                <th class="px-4 py-2">Field</th>
                                                                <th class="px-4 py-2">Value</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="border-t dark:border-gray-600">
                                                                <td class="px-4 py-2 font-medium">Product Name</td>
                                                                <td class="px-4 py-2">${lastName}</td>
                                                            </tr>
                                                            <tr class="border-t dark:border-gray-600">
                                                                <td class="px-4 py-2 font-medium">Barcode</td>
                                                                <td class="px-4 py-2">${barcode1}</td>
                                                            </tr>
                                                            <tr class="border-t dark:border-gray-600">
                                                                <td class="px-4 py-2 font-medium">Status</td>
                                                                <td class="px-4 py-2">
                                                                    ${status1 == 1 ? '<span class="text-red-500">Pending</span>' :
                                                                    status1 == 2 ? '<span class="text-blue-500">Processing</span>' :
                                                                    status1 == 3 ? '<span class="text-green-500">Completed</span>' :
                                                                    '<span class="text-gray-400">Unknown</span>'}
                                                                </td>
                                                            </tr>
                                                            <tr class="border-t dark:border-gray-600">
                                                                <td class="px-4 py-2 font-medium">Payment Method</td>
                                                                <td class="px-4 py-2">
                                                                    ${totalprice1 ? '<span class="text-green-500">Finished</span>' : '<span class="text-red-500">Undefined</span>'}
                                                                </td>
                                                            </tr>
                                                            <tr class="border-t dark:border-gray-600">
                                                                <td class="px-4 py-2 font-medium">Delivery Method</td>
                                                                <td class="px-4 py-2">${delivery1}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div> <!-- End main body -->
                                    </div> <!-- End modal content -->
                                </div>
                            </div>
                            `;
                            }
                        }
                       display.html(txt);
                    }
                }
            });
        }

        $(document).on("click","#closeX",function(){
            $(".addClss").addClass("hidden");
            
            let status = $("#category_status").val(); 
            reload(currentPage,status);
        });
        // btn_save
        $(document).on("click","#btn_save",function(){
            const status = $("#category").val();
            const id = $("#pdid").val();
            location.reload();
            // 
            $.ajax({
                method: "POST",
                url: "action/updateOrder.php",
                data: {
                    "status" : status,
                    "id" : id
                },
                dataType: "dataType",
                success: function (response) {
                    
                }
            });
        });

        $(document).on("change","#category_status",function(){
            let num = $(this).val();
            status = num;
            reload(currentPage,status);
        });

        function reload(page,status){
            const display = $("#displayDataStatus");

            $.ajax({
                method: 'POST',
                url: "action/getOrderStatus.php",
                data: {
                    "page" : page,
                    "status": status
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
                          let btnClass = "";
                            let btnText = "";
                            let statusIcon = "";

                            if (item.status == 1) {
                                btnClass = 'bg-red-500';
                                btnText = 'Verify';
                                statusIcon = `<span class="text-red-500 text-xs"><i class="fa-solid fa-circle"></i></span>`;
                            } else if (item.status == 2) {
                                btnClass = 'bg-blue-500';
                                btnText = 'Processing';
                                statusIcon = `<span class="text-blue-500 text-xs"><i class="fa-solid fa-circle"></i></span>`;
                            } else {
                                btnClass = 'bg-green-500';
                                btnText = 'Completed';
                                statusIcon = `<span class="text-green-500 text-xs"><i class="fa-solid fa-circle"></i></span>`;
                            }

                            txt += `
                    <div class="bg-blue-100 border border-blue-200 rounded-xl shadow hover:shadow-lg p-4 space-y-2 transition" id="order-${item.id}">
                        <div class="flex justify-between items-center">
                            <h4 class="font-semibold text-gray-700 text-sm">${item.first} ${item.last}</h4>
                            ${statusIcon}
                        </div>
                        <hr>
                        <div class="flex justify-between text-xs text-gray-600">
                            <span>ID</span><span>${item.id}</span>
                        </div>
                        <div class="flex justify-between text-xs text-gray-600">
                            <span><i class="fa-regular fa-clock"></i></span>
                            <span>${formatDate(item.created_at)}</span>
                        </div>
                        <div class="flex justify-between mt-2 gap-1">
                            <button
                                class="${btnClass}  hover:bg-green-700 text-white text-xs px-2 py-1 rounded open-modal"
                                id = "btn_verify"
                                type="button"
                                data-id="${item.id}">
                                ${btnText}
                            </button>
                            <button class="bg-red-100 text-red-500 border-[1px] border-red-500  hover:bg-red-700 text-white text-xs px-2 py-1 rounded-sm " id="btn_delete" data-id="${item.id}">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                    </div>`;
                        }
                        totalPage.text(Math.ceil(data[0]['total'] / limit));
                        display.html(txt);
                    }else{
                        display.html("");
                    }
                }
            });
        }
        // date 
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