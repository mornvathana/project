$(document).ready(function(){
    $(document).on("keyup", "#search", function(){
        const product = $(this).val().trim(); // trim to remove leading/trailing whitespace
        const display = $("#autocompleteResults");

        if (product === "") {
            //hide the results if input is empty
            display.hide();
            return;
        }
        else {
            $.ajax({
            method: "POST",
            url: "action/searchProduct.php",
            data: {
                "name": product,
            },
            dataType: "json",
            success: function(data) {
                if (data.length > 0) {
                    let txt = "";
                    for (let i in data) {
                        let item = data[i];
                        txt += `<a href="viewdetail.php?id=${item.id}" class="flex items-center space-x-3 p-2 ml-2 font-[Roboto,hanuman,sans-serif] hover:bg-gray-100 rounded-md">
                                    <img src="uploads/category/${item.image}" alt="" 
                                        class="w-10 h-10 object-cover rounded-md">
                                    <div class="flex-1 min-w-0">
                                        <div class="font-sm truncate">${item.name}</div>
                                        <div class="text-xs text-gray-500">${item.sell_price}$</div>
                                    </div>
                                </a>`;
                    }
                    display.html(txt);
                } else {
                    display.html(`<div class="p-2 text-gray-500">គ្មានផលិតផលដែលត្រូវស្វែងរក</div>`);
                }
            }
           });
            // Show the results if input is not empty
            display.show();
        }
    });
});
