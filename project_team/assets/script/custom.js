$(document).ready(function(){
    $("#inputValue").on('input',function(){
        const value = $(this).val();
        const id  = $("#cartId").val();
        $.ajax({
            method:"POST",
            url: "function/code.php",
            data: {
                "prod_qty": value,
                "prod_id": id,
                "scrope":"updateQty"
            },
            success: function (response) {
                location.reload();
            }
        });
    });
    $(".shipping-radio").on('change', function () {
        const value = $(this).val();
        const id  = $("#cartId").val();
        $.ajax({
            method:"POST",
            url: "function/code.php",
            data: {
                "shipping_id": value,
                "prod_id": id,
                "scrope":"updateShipping"
            },
            success: function (response) {
                location.reload();
            }
        });
    });
    
});