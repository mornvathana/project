 $(document).ready(function(){
        let currentPage = 2;
        let totalPage = 10;
        let startPage = $("#startPage");
        let selectPage = 0;
        let orderid = 0;
        let title = '';
        let optionvalue = '';
        const status = $("#category_status").val();

        startPage.text(currentPage);

        $("#next_btn").click(function(){
            if(currentPage < totalPage){
                currentPage++;
            }
            startPage.text(currentPage);
            // 
            let status = $("#category_status").val(); 
            reload(status)

        });

        $("#back_btn").click(function(){
            if(currentPage > 1){
                currentPage--;
            }
            startPage.text(currentPage);

            let status = $("#category_status").val(); 
            reload(status)
            
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
                            
                            txt += `<div id="crud-modal" tabindex="-1" aria-hidden="true" class="overflow-y-auto addClss overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-[700px]  max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-[#fff] rounded-lg shadow-lg dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t dark:border-gray-600 border-gray-200">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                    Report Sell
                                                </h3>
                                                <button type="button" id = "closeX" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                           <div class = "w-full h-[420px]">
                                           <div class = "w-full h-[10%]  flex justify-between items-center">
                                                <ul class = "flex">
                                                ${itemmenu}
                                                </ul>
                                                 <ul class = "flex">
                                                    <li class = "mx-2 border-b-[2px] border-blue-500 py-2 px-5 cursor-pointer text-sm" id = "info">Client info</li>
                                                </ul>
                                           </div>   
                                           <div class = "w-full h-[90%] flex">
                                           <div class = "w-[40%] h-full flex justify-center items-center ">
                                           <img src = "../uploads/default/default.png" class = "w-[60%] h-[50%] object-cover rounded-md">
                                           </div>
                                           <div class = "w-[60%] h-full">
                                           <div class = "w-[100%] h-[100%] flex justify-center items-center">
                                                <div class="relative ">
                                                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 flex rounded-md ">
                                                        <tbody>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Full Name
                                                                </th>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Address
                                                                </th>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Email
                                                                </th>
                                                            </tr>
                                                            <tr class="bg-white dark:bg-gray-800">
                                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Phone Number
                                                                </th>
                                                            </tr>
                                                            <tr class="bg-white dark:bg-gray-800">
                                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Status
                                                                </th>
                                                            </tr>
                                                        </tbody> 
                                                        <tbody>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                                                <td scope="row" class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-white">
                                                                    ${item.first} ${item.last}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                                                <td scope="row" class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-white">
                                                                    ${item.city} city ${item.province} province
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white dark:bg-gray-800">
                                                                <td scope="row" class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-white">
                                                                  ${item.email}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                                                <td scope="row" class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-white">
                                                                ${item.phone_number}
                                                                </td>
                                                            </tr>
                                                            <input type="hidden" name="id" id="pdid" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value = "${item.id}" readonly>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                                                <td scope="row" class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-white">
                                                                  <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg px-7 py-1">
                                                                    ${item.status == 3 ? `<option value="3" ${item.status == 3 ? 'selected' : ''} >Completed</option>` :  ''}
                                                                    ${item.status == 2 ? 
                                                                                        `
                                                                                        <option value="2" ${item.status == 2 ? 'selected' : ''} >Process</option>
                                                                                        <option value="3" ${item.status == 3 ? 'selected' : ''} >Completed</option>
                                                                                        ` 
                                                                                        :  ''}
                                                                    ${item.status == 1 ? 
                                                                                        `
                                                                                        <option value="1" ${item.status == 1 ? 'selected' : ''} >Pedding</option>
                                                                                        <option value="2" ${item.status == 2 ? 'selected' : ''} >Process</option>
                                                                                        <option value="3" ${item.status == 3 ? 'selected' : ''} >Completed</option>
                                                                                        ` 
                                                                                        :  ''}
                                                                  
                                                                    
                                                                </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row" class="px-6 py-4 text-end text-gray-900 whitespace-nowrap dark:text-white">
                                                                  <button id = "btn_save"  type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-20 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                        Save
                                                                   </button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                           </div>
                                           </div>
                                           </div>
                                           </div>
                                        </div>
                                    </div>
                                </div> `;
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

                            txt += `<div id="crud-modal" tabindex="-1" aria-hidden="true" class="overflow-y-auto addClss overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-[700px]  max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-[#fff] rounded-lg shadow-lg dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t dark:border-gray-600 border-gray-200">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                    Report Orders
                                                </h3>
                                                <button type="button" id = "closeX" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                           <div class = "w-full h-[420px]">
                                           <div class = "w-full h-[10%]  flex justify-between items-center">
                                                <ul class = "flex">
                                                ${itemmenu}
                                                </ul>
                                                 <ul class = "flex">
                                                    <li class = "mx-2 border-b-[2px] border-blue-500 py-2 px-5 cursor-pointer text-sm" id = "info">Client info</li>
                                                </ul>
                                           </div>   
                                           <div class = "w-full h-[90%] flex">
                                           <div class = "w-[40%] h-full flex justify-center items-center ">
                                           <img src = "../uploads/category/${image1}" class = "w-[60%] h-[50%] object-cover rounded-md">
                                           </div>
                                           <div class = "w-[60%] h-full">
                                           <div class = "w-[100%] h-[100%] flex justify-center items-center">
                                                <div class="relative overflow-x-auto">
                                                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 flex rounded-md ">
                                                        <tbody>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Product Name
                                                                </th>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Barcode
                                                                </th>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Status
                                                                </th>
                                                            </tr>
                                                            <tr class="bg-white dark:bg-gray-800">
                                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Payment Method
                                                                </th>
                                                            </tr>
                                                            <tr class="bg-white dark:bg-gray-800">
                                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Delivery Method
                                                                </th>
                                                            </tr>
                                                        </tbody> 
                                                        <tbody>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                                                <td scope="row" class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-white">
                                                                    ${lastName}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                                                <td scope="row" class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-white">
                                                                    ${barcode1}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white dark:bg-gray-800">
                                                                <td scope="row" class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-white">
                                                                    ${status1 == 1 ? '<span class = "text-red-500">Pedding</span>' : status1 == 2 ? '<span class = "text-blue-500">Proccessing</span>' : status1 == 3 ? '<span class = "text-green-500">Completed</span>' : '<span class = "text-red-500">Unknown</span>'}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                                                <td scope="row" class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-white">
                                                                ${totalprice1 ? '<span class="text-green-500">Finished</span>' : '<span class="text-red-500">Undefined</span>'}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                                                <td scope="row" class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-white">
                                                                    ${delivery1}
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                           </div>
                                           </div>
                                           </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>`;
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
            reload(status);
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
                    "id" : id,
                },
                dataType: "dataType",
                success: function (response) {
                    
                }
            });
        });

        $(document).on("change","#category_status",function(){
            reload(status);
            pageNum(10);
        });

        $(document).on('click','#page_num',function(){
            let num = $(this).val();
            pageNum(num);
        });

        function pageNum(num){
            selectPage = num;
            // 
            let status = $("#category_status").val(); 
            reload(status)
        }

        function reload(status){
            const statusNum = status;
            const display = $("#displayDataStatus");
            const offset = (currentPage - 1) * totalPage;

            $.ajax({
                method: 'GET',
                url: "action/getOrderStatus.php",
                data: {
                    "status": statusNum,
                    "selectPage" : selectPage,
                    "currentPage" : offset,
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
                        display.html(txt);
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