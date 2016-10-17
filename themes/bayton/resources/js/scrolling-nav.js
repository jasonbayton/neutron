//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".hero-bytn").animate({margin: "-140px auto 0px auto"}, {queue: false, duration: 300});
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        $(".navbar-brand").addClass("bytn-block");
        $(".navbar-nav").removeClass("nav-centre");
        $(".navbar-nav>li").removeClass("menu-item");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        $(".hero-bytn").animate({margin: "0px auto 0px auto"}, {queue: false, duration: 300});
        $(".navbar-brand").removeClass("bytn-block");
        $(".navbar-nav").addClass("nav-centre");
        $(".navbar-nav>li").addClass("menu-item");


    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
