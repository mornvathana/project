$(document).ready(function () {
    var body = $('body');
    // start product title edit 
    $("#productEdit").click(function () {
        Swal.fire({
            title: "Enter new Product Name",
            input: "text",
            inputAttributes: {
                autocapitalize: "off"
            },
            showCancelButton: true,
            confirmButtonText: "Submit",
        }).then((result) => {
            if (result.isConfirmed) {
                const productName = result.value; 
                const id = $(this).data("id");
                $.ajax({
                    method: "post",
                    url: "deleteProduct.php",
                    data: {
                        "userid": id,
                        "productName": productName,
                        "scrope":"change_proudct_name"
                    },
                    dataType: "json",
                    success: function (response) {
                        if(response == 200){
                        $("#productName").text(productName);
                        Swal.fire({
                        position: "top-center",
                        icon: "success",
                        title: "Data has updated!",
                        showConfirmButton: false,
                        timer: 1500
                        });
                        
                        }
                        if(response == 404){
                        Swal.fire({
                        position: "top-center",
                        icon: "warning",
                        title: "Something went wrong!",
                        showConfirmButton: false,
                        timer: 1500
                        });
                        }
                    }
                });
            }
        });
    });
    
    // status open active 
    $(document).on("click","#open_active",function(){
        const status = 1;
        const userid = $(this).data("id");
        $.ajax({
            method: "post",
            url: "deleteProduct.php",
            data: {
                "userid" : userid,
                "status" : status,
                "scrope": "open_active"
            },
            dataType: "json",
            success: function (response) {
                if(response == 200){
                    Swal.fire({
                    position: "top-center",
                    icon: "success",
                    title: "Data has updated!",
                    showConfirmButton: false,
                    timer: 1500
                    });
                    }
                    if(response == 404){
                    Swal.fire({
                    position: "top-center",
                    icon: "warning",
                    title: "Something went wrong!",
                    showConfirmButton: false,
                    timer: 1500
                    });
                    }
            }
        });

    });
    // status close active
    $(document).on("click","#close_active",function(){
        const status = 0;
        const userid = $(this).data("id");
        $.ajax({
            method: "post",
            url: "deleteProduct.php",
            data: {
                "userid" : userid,
                "status" : status,
                "scrope": "close_active"
            },
            dataType: "json",
            success: function (response) {
                if(response == 200){
                    Swal.fire({
                    position: "top-center",
                    icon: "success",
                    title: "Data has updated!",
                    showConfirmButton: false,
                    timer: 1500
                    });
                    }
                    if(response == 404){
                    Swal.fire({
                    position: "top-center",
                    icon: "warning",
                    title: "Something went wrong!",
                    showConfirmButton: false,
                    timer: 1500
                    });
                    }
            }
        });

    });
    // start filter 
    $(document).on("click","#filterData",function(){
        var product_item = $("#product_item").val();
        var category_item = $("#category_item").val();
        var brand_item = $("#brand_item").val();
        $.ajax({
            method: "post",
            url: "deleteProduct.php",
            data: {
                "product_item" : product_item,
                "category_item": category_item,
                "brand_item" : brand_item,
                "scrope": "filterData"
            },
            dataType: "json",
            success: function (data) {
                if(data.length > 0){
                    var txt = "";
                    data.forEach(function(item){
                        txt += `<div class="p-2 px-1 rounded-sm shadow-md box h-[500px]" id="category-${item.id}">
                <div class="img">
                    <img src="../uploads/${item.image}" alt="${item.image}">
                </div>
                <div class="text-sm title">
                    <div class="flex items-center justify-between py-1">
                        <p>${item.product_id}</p>
                        <p>$${item.sell_price}</p>
                    </div>
                    <p class="text-center">${item.small_des.split(' ').slice(0, 5).join(' ')}...</p>
                    <div class="option">
                        <i class="fa-solid fa-trash-can" id="delete_category" data-category="${item.id}"></i>
                        <a href="categoryEdit.php?id=${item.id}">
                            <i class="fa-solid fa-pen-to-square btn-edit"></i>
                        </a>
                    </div>
                </div>
                </div>`;
                })
                $("#filter").html(txt);
            }else{
                $("#filter").html("Not Found!");
                return;
            }
            if(data == 404){
                Swal.fire({
                    position: "top-center",
                    icon: "warning",
                    title: "No Data!",
                    showConfirmButton: false,
                    timer: 1500
                })
            }
            if(data == 505){
                Swal.fire({
                    position: "top-center",
                    icon: "warning",
                    title: "Something went wrong!",
                    showConfirmButton: false,
                    timer: 1500
                })
            }
            }
        });
    });
    // end fileter
    $('#btn-change, #btn-product').click(function(){
        $(this).closest('.popup, .popup1').css('display','block');
        $(this).closest('.frm, .frm1').css('display','block');
    });
    $('#close-product1, #close-product').click(function(){
        $(this).closest('.popup, .popup1').css('display','none');
        $(this).closest('.frm, .frm1').css('display','none');
    });
    $('.btn-edit').click(function(){
        $('.popup').css('display','block');
        $('.frm').css('display','block');
    });
    $('#menu-small').click(function() {
       $('#slide-bar').toggle();
       $('.popup').css('display','block');
    });
    // delete user
    $(document).on('click', '#delete_user', function(e){
        e.preventDefault(); 
        Swal.fire({
            title: "Are you sure?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                const cid = $(this).data('id');
                $.ajax({
                    method: "POST",
                    url: "deleteProduct.php",
                    data: {
                        "user_id": cid, 
                        "scrope": "delete_user"
                    },
                    success: function(response) {
                        if (response == 150) {
                            // Show success alert
                            Swal.fire({
                                title: "Deleted!",
                                icon: "success"
                            }).then(() => {
                                $(`#user-${cid}`).remove(); 
                            });
                        } else if(response == 400) {
                            Swal.fire({
                                title: "Error!",
                                text: "There was a problem deleting the product.",
                                icon: "error"
                            });
                        }
                    },
                    error: function() {
                        // Handle AJAX errors
                        Swal.fire({
                            title: "Error!",
                            text: "There was an error processing your request.",
                            icon: "error"
                        });
                    }
                });
            }
        });
    });
    // Event handler for the delete button
    // Event handler for the delete button
    $(document).on('click', '#btn-delete', function(e) {
        e.preventDefault(); // Prevent default action if necessary

        // Show confirmation alert using SweetAlert
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                const pid = $(this).data('id');
                $.ajax({
                    method: "POST",
                    url: "deleteProduct.php",
                    data: {
                        "pid": pid, 
                        "scrope": "delete_pid"
                    },
                    success: function(response) {
                        if (response == 200) {
                            // Show success alert
                            Swal.fire({
                                title: "Deleted!",
                                text: "Your file has been deleted.",
                                icon: "success"
                            }).then(() => {
                                $(`#product-${pid}`).remove(); 
                            });
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: "There was a problem deleting the product.",
                                icon: "error"
                            });
                        }
                    },
                    error: function() {
                        // Handle AJAX errors
                        Swal.fire({
                            title: "Error!",
                            text: "There was an error processing your request.",
                            icon: "error"
                        });
                    }
                });
            }
        });
    });
    // detete category
    $(document).on('click','#delete_category',function(e){
        e.preventDefault(); // Prevent default action if necessary
        // Show confirmation alert using SweetAlert
        Swal.fire({
            title: "Are you sure?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                const cid = $(this).data('category');
                $.ajax({
                    method: "POST",
                    url: "deleteProduct.php",
                    data: {
                        "cid": cid, 
                        "scrope": "delete_category"
                    },
                    success: function(response) {
                        if (response == 150) {
                            // Show success alert
                            Swal.fire({
                                title: "Deleted!",
                                text: "Your file has been deleted.",
                                icon: "success"
                            }).then(() => {
                                $(`#category-${cid}`).remove(); 
                            });
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: "There was a problem deleting the product.",
                                icon: "error"
                            });
                        }
                    },
                    error: function() {
                        // Handle AJAX errors
                        Swal.fire({
                            title: "Error!",
                            text: "There was an error processing your request.",
                            icon: "error"
                        });
                    }
                });
            }
        });
    });
});