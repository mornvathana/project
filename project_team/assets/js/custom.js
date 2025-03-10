$(document).ready(function () {
    var body = $('body');
    // end
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
                alert(cid);
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