$(document).ready(function(){
   $(".services-button").dropdown();
    $(".button-collapse").sideNav();
    $('.bodyContainer div').hover(function(){
           $('.businessCard').removeClass('z-depth-3').addClass('z-depth-5');}, function(){
                $('.businessCard').removeClass('z-depth-5').addClass('z-depth-3');
            });
    
});