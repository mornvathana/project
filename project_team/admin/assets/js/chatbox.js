$(document).ready(function(){
    let pullingid = null;
    let chatid = 0;
    $(document).on("click","#sendChat",function(){
        let message = $("#chat").val();
        const id = $("#userId").val();
        $.ajax({
            method: "POST",
            url: "action/sendChat.php",
            data: {
                "message" : message,
                "userid" : id,
                "receiveid" : chatid,
            },
            success: function (data) {
                if(data == 202){
                    clientChat(chatid,id);
                    $("#chat").val('');
                }
            }
        });
    });
    // 

    $("#user-menu-button1").click(function(){
        let userId = $("#userId").val();
        getAlertChat(userId);
    });

    function getAlertChat(id){
        const display = $("#displayAlertMessageChat");
        $.ajax({
            method: "POST",
            url: "action/getAlertChat.php",
            data: {
                "userid" : id,
            },
            dataType: "json",
            success: function (data) {
                if(data.length > 0){
                    let txt = "";
                    for(i in data){
                        let item = data[i];
                        txt += `<a class="block grid gap-5 grid-cols-[50px_1fr] px-4 py-2 bg-[#ffffff] text-sm text-gray-700 shadow-lg" id = "chatMessage" data-id="${item.userid}">
                                <div>
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJQAAACUCAMAAABC4vDmAAAAq1BMVEX///8Crv8NYK7///37//1VuPQBr/7i6PHN5vUAqv8ApvsDXq2JzvLG6/mqwdQArP+AocgAV6cAS6HP3esuaK8AV6vT7/cAqPjz/P2t4PUAT6IAqPMATafZ6fLo+v675PVivfRyxPE3tvSj2vVavO0YrPJjxPOS0e98yvJJuPCw2vPp9PyMqc2qvNbH1ORAb60KWqJylb5kibq6ydyYs89Yhb1LebUhY6RTdLPtEjuKAAAGSElEQVR4nO2bDXeiOhCGo2FjBW20lQ+1xYqlymq11n7c///LbhJARDDQJJy65+Td7e5ZhPA4GSYzQxYALS0tLS0tLS0tLS0tLS2tf1GQSeSyBmCuWtAQVBOWgvSXP+s9/RHU03zsUDKVcBAY4yfXxC1hYWwGC08hFfHT/rOLkTgSYr/dYKwKichbmi1ERsVIDAzFVKjVffaBGmtB79kVN1JeOHBUQEHgPUv4UoEqfJQPWsSf5ji2vyKqyJc2E4Bjl3iSoDMVhVr4hUUYKah1qM5KjAqZfbkJJBevFDpULPzsyTAReaFqJtRyZ5K+/he31E4fEX6RgzLmymePaCqDBKEXNMCETEfCVBD60yag8F8pSzlmA1Ct7lIGCvSbgepJQIGGoLAUFNRQvwsl51P/FhTGhUiPu3XOagSKrYNusOpFWYrM0vdw1Quy4oL+7YbJWYW1swlLhWMSVoETndwunNF1wwnSbJDkctMZOysoWc8bgHIZEylOs6wGjVm7ADrh0VBTcoimmE5J7qMcCuEXIylIFl0Uzx6eG/EKCxfHCZzHSS+Ey6JfMajiklyze1LiUwgvkguhk67W3ZNDCVQ3XXPJ8lnmUxfvX41VOn2z9LJ1Olnd7FDCSRLxdAy/OASDWm8GZ9q8buskymVQeHliKcyM180OuYmj40U6Bhni3FRs+joje5iTbdvt3WYtAoVakRe3YUhNkd4t8igVPXQMVuQs5lJwVbQ1s1RnZLULsuy316oSugiFEXJ7sQvPpqkJ6CHqI+TQMVC5y/jQuCRNpFCgFIpi7T0+VQkUvd/cMQx/GR4fKwK6coDnLzMAUt6t2FnTVjF68qDa7cm790OoeAanYZAhsZYKRmE4zd2elNVBGJauM3yotj0QgDqBSc1yfoSvCqj2ZMuLDM1lCVwoayduqcag2sMDx9ebyzz5UPae00/+LShrdDmGksyjGSha9/Gg2sNHjk85yrqdOSi6gN/zoO7uOZ7uK+8EUZHVGoIth4kP5T01wIRMn1jq1RaEgmBJFl3l3aCIjr0XhQLgBqlvmpkLulTzXIpvKQgi9V2zYE3GvX/gMFVYCvRdxYZC3R4NjAPe7FVBGSuZN0VlCmiV0eEhVUFBqDoqkHqQaMM1VJWlYGnlJirUMsd0rX28k7EUpepPVT2BCNMsmYS/96EcFF2Wg2LzQkiY1s2EalDBVG0p8uPNpV6Mpkg4umFMtxWTV8dSVM6Lm08YLjBeRu+a0TguzD+GvLj5AyhACpMoRKcqZ0LlCoNe34vLxdtJJVNdKPaO1LlJ1bsQ6IObUjl+3AAhY+wnlUi1oZLyAiYqj15JCVpUfD0x1GHHD1A/tFQ6cvKvRbmhvBx6BhVfuN3fVU8d1UPd6cur9K3NtA8vvYs11p2PnVUVChJZtX3qVOS7F99vIXcRW/O2oNfNfjep4eAp1ISTo3OowJ8iU9L5AN/2sNDmicNATSzrrbojVGqqM0vRJoeRGJGbVNaC+uT3OC4ZKv9ymcQnd3X8bDupa5ILsj/ENgk4Z8HT7GVFrfclx9QedsSglmfP3bGdSAPAoU6AvKzJRozJC7IVmnbNZ/lRvmxxW1nDbyE3B3CWLc8I4cg5i07rL3Fft96E4gFRdOLk5otXCJn+myiVNdwKmQnCMc7MNB2Dc6Z44RWZQWvyJebkEBqsGkSshx72y3uBxu33g20VVQLSPn74MPkQ3gizNI8evgKXNyVuN1+70bmKVHbyye5zfzDir/1jIgji+oa95ZsZhbnLziMPaaegQu5ifacfUSPlk5G6SGTynjHrMGDU834+xPY8U7Bvc18ECmz5IhfM2OtO7EZCu7PgIL8IWTvZ7VR0qoyAbYKKZkL7lCGNrDlDvUvvZ6TvOhGm+0gr3qBw1MlRESgF2xn9+VOvL7XZzzt1dutLfucnnT9PbvshsdVnRmWNBFOCUyb2eMCfP7YnY0BgvGd5xPCgwKmSICCzr45QbY55xPDzejb231rpFArWU+pFe1TE3a00KFyNvEGSSFiH30aJFbvRdsc8yxpJB3VlImDrzR1dCmlSfiXOzp7hx3dSy1vta/H1ZG+Lsf18sO8GSv+jiIRg+sfj4L+PX2Yp17X4VCqYdNSuS7KrlpaWlpaWlpaWlpaWlpaW1u/pfymCfytRob65AAAAAElFTkSuQmCC" class = "w-[50px] h-[50px]" alt="" />
                                </div>
                                <div class = "flex justify-center items-start flex-col">    
                                    <div class = "flex justify-between items-center font-medium gap-2 w-full">
                                    ${item.name}
                                    <span class = "w-[10px] h-[10px] rounded-full bg-red-500"></span>
                                    </div>
                                    <div class = "w-full flex justify-between items-center text-gray-500 "><p>${item.message}</p> <p>12:00 AM</p></div>
                                </div>
                                </a>`;
                    }
                    display.html(txt);
                }
            }
        });
    }
    $(document).on("click","#chatMessage",function(){
        
        let id = $(this).data("id");
        chatid = id;
        let userid = $("#userid").val();
        clientChat(chatid,userid);

        if(pullingid) clearInterval(pullingid);
        pullingid = setInterval(() =>{
            clientChat(chatid,userid);
        },2000)
    })

    function clientChat(id,userid){
        const namechat = $("#namechat");
        const displayChatMessage = $("#displayChatMessage");
        $.ajax({
            method: "POST",
            url: "action/getMessageChat.php",
            data: {
                "userid": id,
                "admin" : userid,
            },
            dataType: "json",
            success: function (data) {
                if(data.length > 0){
                    let txt = "";
                    for(i in data){
                        let item = data[i];
                        let isAdmin = parseInt(item['role']) === 1;

                        if(isAdmin){
                            txt += `<div class="flex justify-end my-2 items-center gap-2">
                                    <span class="bg-gray-100 px-3 py-1 rounded">${item.message}</span>
                                    <img src="data:image/png;base64,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" class="w-5 h-5 rounded-full" />
                                </div>`;
                        }else{
                            txt += `<div class="flex justify-start my-2 items-center gap-2">
                                    <img src="data:image/png;base64,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" class="w-5 h-5 rounded-full" />
                                    <span class="bg-gray-100 px-3 py-1 rounded">${item.message}</span>
                                </div>`;
                        }
                    }
                    displayChatMessage.html(txt);
                    namechat.text(data[0]['username']);
                }else{

                }
            }
        });
    }
});