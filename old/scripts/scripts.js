//Setup flex slider

$(document).ready(function(){
        
    // initiate page scroller plugin
    $('body').pageScroller({
        navigation: '#nav',
        scrollOffset:0
        
    });

    $(".gotop").css("visibility", "hidden");

   $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 500) {
                $('.gotop').fadeIn();
            } else {
                $('.gotop').fadeOut();
            }
        });

    $('.gotop').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

    });   
                    
});    
 
