$(document).ready(function(){
   $(".services-button").dropdown();
    $(".button-collapse").sideNav({closeOnClick: true});
     $('.parallax').parallax();
    $('.container div').hover(function(){
           $('.businessCard').removeClass('z-depth-2').addClass('z-depth-4');}, function(){
                $('.businessCard').removeClass('z-depth-4').addClass('z-depth-2');
            });
      $('.slider').slider({height:500,indicators:true});
    $('.modal-trigger').leanModal();
      $('.collapsible').collapsible();
    $('.scrollspy').scrollSpy();
    $('#webDev').addClass('active');
    $('#webDev .collapsible-body').css('display', 'block');
   
});