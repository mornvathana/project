$(document).ready(function(){
    $(document).on("keyup","#search",function(){
        const product = $(this).val();
        $.ajax({
            method: "POST",
            url: "action/searchProduct.php",
            data: {
                "name" : product,
            },
            dataType: "json",
            success: function (data) {
                if(data){
                    console.log(data);
                }else{
                    alert("No Data");
                }
            }
        });
    });
});