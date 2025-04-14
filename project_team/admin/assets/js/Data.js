$(document).ready(function () {
    $('#btn-product').click(function () {
        // e.preventDefault();
        var productName = $('.input-value').val();
        $.ajax({
            type: "POST", 
            url: "action/DataProduct.php", 
            data: { product_name: productName },
            dataType: "json", 
            success: function (response) {
                if (response == 400) { 
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'We got the same name!',
                    confirmButtonText: 'OK',
                    customClass: {
                    popup: 'custom-popup', 
                    }
                    });
                }
            },
        });
    });
});
