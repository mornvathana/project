$(document).ready(function () {
    var body = $('body');
    
    $('#btn-change, #btn-product').click(function(){
        $(this).closest('.popup, .popup1').css('display','block');
        $(this).closest('.frm, .frm1').css('display','block');
    });
    $('#close-product1, #close-product').click(function(){
        $(this).closest('.popup, .popup1').css('display','none');
        $(this).closest('.frm, .frm1').css('display','none');
    });
    $('.btn-edit').click(function(){
        $('.popup').css('display','block');
        $('.frm').css('display','block');
    });
    $('#menu-small').click(function() {
       $('#slide-bar').toggle();
       $('.popup').css('display','block');
    });
    
});