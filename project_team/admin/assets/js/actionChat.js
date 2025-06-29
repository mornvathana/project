$(document).ready(function(){

    $("#messagearea").on("click", function () {
      $("#chatarea").removeClass("hidden");
      $("#messagearea").addClass("hidden");
    });

    $(".btnClose").on("click",function(){
      $("#chatarea").addClass("hidden").removeClass("block");
      $("#messagearea").addClass("block").removeClass("hidden");
    });
    
});