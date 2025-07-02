$(document).ready(function(){
    let pullingid = null;
    $(document).on("click","#sendChat",function(){
        let message = $("#chat").val();
        const id = $("#userId").val();
        
        $.ajax({
            method: "POST",
            url: "action/chatbox.php",
            data: {
                "message" : message,
                "userid" : id,
            },
            success: function (data) {
                if(data == 202){
                    getMessage();
                    $("#chat").val('');
                }
            }
        });
    });

    if (pullingid !== null) clearInterval(pullingid);
    pullingid = setInterval(() => {
        getMessage()
    }, 2000);

   

    function getMessage(){
        const id = $("#userId").val();
        const displaychat = $("#displayChatMessage");
        $.ajax({
            method: "POST",
            url: "action/getChat.php",
            data: {
                "userid" : id,
            },
            dataType: "json",
            success: function (data) {
                if(data.length > 0){
                    let txt = "";
                    for(i in data){
                        let item = data[i];
                        let receiveid = item['receiveid'];
                        
                        if(receiveid != null){
                            txt += `<div class="flex justify-start my-2 items-center gap-2">
                                <img src="..." class="w-5 h-5 rounded-full" />
                                <span class="bg-gray-100 px-3 py-1 rounded">${item.message}</span>
                            </div>`;
                        }else{
                            txt += `<div class="flex justify-end my-2 items-center gap-2">
                                <span class="bg-gray-100 px-3 py-1 rounded">${item.message}</span>
                                <img src="..." class="w-5 h-5 rounded-full" />
                            </div>`;
                        }
                        
                    }
                    displaychat.html(txt);
                }else{

                }
            }
        });
    }
});