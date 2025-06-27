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
                        icon: 'success',
                        title: '<span class="text-gray-800 font-semibold text-lg">Data has updated!</span>',
                        showCancelButton: false,  
                        showConfirmButton: false, 
                        timer: 1000,  
                        background: '#fff',
                        focusCancel: true,
                        buttonsStyling: false,
                        customClass: {
                            popup: 'rounded-xl shadow-md p-6',
                        },
                        didOpen: () => {
                            document.querySelector('.swal2-popup').style.width = '400px';
                        }
                        });
                        }
                        if(response == 404){
                        Swal.fire({
                            icon: 'warning',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                            confirmButtonText: 'OK',
                            customClass: {
                            popup: 'custom-popup', 
                            }
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
                    icon: 'success',
                    title: '<span class="text-gray-800 font-semibold text-lg">Data has updated!</span>',
                    showCancelButton: false,  
                    showConfirmButton: false, 
                    timer: 1000,  
                    background: '#fff',
                    focusCancel: true,
                    buttonsStyling: false,
                    customClass: {
                        popup: 'rounded-xl shadow-md p-6',
                    },
                    didOpen: () => {
                        document.querySelector('.swal2-popup').style.width = '400px';
                    }
                    }).then(() =>{
                        location.reload();
                    })
                    }
                    if(response == 404){
                    Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    confirmButtonText: 'OK',
                    customClass: {
                    popup: 'custom-popup', 
                    }
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
                    icon: 'success',
                    title: '<span class="text-gray-800 font-semibold text-lg">Data has updated!</span>',
                    showCancelButton: false,  
                    showConfirmButton: false, 
                    timer: 1000,  
                    background: '#fff',
                    focusCancel: true,
                    buttonsStyling: false,
                    customClass: {
                        popup: 'rounded-xl shadow-md p-6',
                    },
                    didOpen: () => {
                        document.querySelector('.swal2-popup').style.width = '400px';
                    }
                    }).then(() =>{
                        location.reload();
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
                            $(`#user-${cid}`).remove(); 
                        } else if(response == 400) {
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
                    },
                    error: function() {
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
        e.preventDefault(); 

        Swal.fire({
            icon: 'warning',
            title: '<span class="text-gray-800 font-semibold text-lg">Are you sure you want to delete?</span>',
            showCancelButton: true,
            cancelButtonText: 'Cancel',
            reverseButtons: false,
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
                         $(`#product-${pid}`).remove(); 
                        } else {
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
    $(document).on('click','#delete_category',function(){

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
                const cid = $(this).data('category');
                $.ajax({
                    method: "POST",
                    url: "deleteProduct.php",
                    data: {
                        "cid": cid, 
                        "scrope": "delete_category"
                    },
                    success: function(data) {
                        if (data == 202) {
                            $(`#category-${cid}`).remove(); 
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: "There was a problem deleting the product.",
                                icon: "error"
                            });
                        }
                    },
                });
            }
        });
    });
});