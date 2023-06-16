

$(document).ready(function(){
    $(".reg-form").hide();   
    // alert ("aaaaaaaaaaaaa");

    $(function(){
        $("#days").mouseup(function(){
            
            $('#total-price').val(parseInt($('#days').val()) * parseInt($('#ppd').val()));
          });
         
    });
});

$(function(){
    $(".create-new").click(
        function(){
            $(".reg-form").show();
            $(".data-signin").css("background-image","none");
            $(".data-signin").css("background-image","linear-gradient(to right,#022f60,black,#022f60)");
        });
});



// $(function(){
//     $("#days").mouseup(function(){
        
//         var $d= ("#days").val();
//         var $p= ("#ppd").val();

//         ("#total-price").val() = $d*$p;
//       });
     
// });