/* Scroll to top*/
$(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
        $('#scroller').fadeIn();
    } else {
        $('#scroller').fadeOut();
    }
});
//$('#scroller').click(function () {
//    $('body,html').animate({
//        scrollTop: 0
//    }, 400);
//    return false;
//});

$('#navbar-top li a').on('click', (function (event) { scrollToHref(event, this); }));
$('#scroller').on('click', (function (event) { scrollToHref(event, this); }));
$('.footer-block .footer-link').on('click', (function (event) { scrollToHref(event, this); }));

function scrollToHref(event, e) {
    var anchor = $(e);
    //console.log(anchor);
    $('html, body').stop().animate({
        scrollTop: $(anchor.attr('href')).offset().top - 90
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
}

$('body').scrollspy({
    target: '.navbar-fixed-top'
});