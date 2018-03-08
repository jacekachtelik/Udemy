$(document).ready(function () {
   
    // $('h1').click(function () {
    //     $(this).css('background-color','#f00');
    // });

    /* Sticky navigation*/
    $('.js--section-features').waypoint(function (direction) {
        if (direction == "down") {
            $('nav').addClass('sticky');
        } else {
            $('nav').removeClass('sticky');
        }
    }, {
        offset: '80px;'
    });

    /* Scroll on buttons */
    $('.js--scroll-to-plans').click(function () {
        $('html, body').animate({scrollTop: $('.js--section-plans').offset().top},1000);
    });
    $('.js--scroll-to-start').click(function () {
        $('html, body').animate({scrollTop: $('.js--section-features').offset().top},1000);
    });

    /* Smooth scrolling */
    $(function () {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

    /* Animations on scroll */
    $('js--wp-1').waypoint(function (direction) {
        $('js--wp-1').addClass('animated fadeIn');
    }, {
        offset: '50%'
    })


});