$(function(){

    var clicked = 0;
    $('.menu-btn').click(function(e){

        var screen_height = $(window).height() - $('nav').height('90vh');

        $(this).toggleClass('active');
        $('body').toggleClass('menu-active');

        if (clicked == 0) {
            $('nav').height(screen_height);
            clicked = 1;
            return;
        }

        if (clicked == 1) {
            $('nav').removeAttr('style');
            clicked = 0;
            return;
        }

    });

});