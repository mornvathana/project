 $(document).ready(function(){
            $("#profile_image").change(function(e){
                var readerView = new FileReader();
                readerView.onload = function(event){
                    $("#showImage").attr("src", event.target.result);
                }
                readerView.readAsDataURL(e.target.files[0]);
            });
            // permission 
            $("#save_btn").click(function(){
                const username = $("#username").val().trim();
                const email = $("#email").val().trim();
                const password = $("#password").val().trim();
                const con_password = $("#con_password").val().trim();
                
                const tableid = $("#table_id").val();
                const userid = $("#userId").val();

                if(username == '' || email == '' || password == '' || con_password == ''){
                    alert("Please fill in all required fields!");
                    return; 
                }

                const data = {
                    tableId: tableid,
                    userId: userid,
                    dashboard: $('#dashboard').is(':checked') ? 1 : 0,
                    total_product: $('#total_product').is(':checked') ? 1 : 0,
                    product: $('#product').is(':checked') ? 1 : 0,
                    brands: $('#brands').is(':checked') ? 1 : 0,
                    category: $('#category').is(':checked') ? 1 : 0,
                    orders: $('#orders').is(':checked') ? 1 : 0,
                    users: $('#users').is(':checked') ? 1 : 0,
                    inventory: $('#inventory').is(':checked') ? 1 : 0,
                };
                console.log(data);

                $.ajax({
                    method: "POST",
                    url: "action/permission.php",
                    data: data,
                    success: function (data) {
                        
                    }
                });
            });

        });