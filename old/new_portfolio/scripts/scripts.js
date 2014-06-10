//Setup flex slider

$(document).ready(function(){
        
    // initiate page scroller plugin
    $('body').pageScroller({
        navigation: '#nav',
        HTML5mode:true
    });

    $(".gotop").hide();

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

   $('.boxgrid.caption').hover(function(){
        $(".cover", this).stop().animate({top:'120px'},{queue:false,duration:160});
        }, function() {
            $(".cover", this).stop().animate({top:'180px'},{queue:false,duration:160});
        });
 
                    
});    
 
