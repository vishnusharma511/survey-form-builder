$(document).ready(function() {
    $('.enquiry-btn').click(function() {
        $('.form-popup').toggleClass('active');
    });
    $('.form-popup .cross').click(function() {
        $('.form-popup').removeClass('active')
    });
    $(".scroll-bottom-btn").click(function() {
        $('html,body').animate({
            scrollTop: $(".page-sections").offset().top},
            'slow');
    });
});

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 100) {
        $("header").addClass("sticky");
    } else {
        $("header").removeClass("sticky");
    }
});