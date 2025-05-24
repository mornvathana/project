$(document).ready(function(){
    $(document).on("keyup","#search",function(){
        const product = $(this).val();
        const display = $("#autocompleteResults");
        $.ajax({
            method: "POST",
            url: "action/searchProduct.php",
            data: {
                "name" : product,
            },
            dataType: "json",
            success: function (data) {
                if(data.length > 0){
                    let txt = "";
                    for(i in data){
                        let item = data[i];
                        txt += `<a href="viewdetail.php?id=${item.id}" class="flex items-center space-x-3 p-2 ml-2">
                                <img src="uploads/category/${item.image}" alt="" 
                                    class="w-10 h-10 object-cover rounded-md">
                                <div class="flex-1 min-w-0">
                                    <div class="font-medium truncate">${item.name}</div>
                                    <div class="text-xs text-gray-500">${item.sell_price}</div>
                                </div>
                            </a>`;
                    }
                    display.html(txt);
                }else{
                }
            }
        });
    });
});