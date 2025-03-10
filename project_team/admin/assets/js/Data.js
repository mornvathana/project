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
                    alert("We found the same name!");
                }
            },
        });
    });
});
