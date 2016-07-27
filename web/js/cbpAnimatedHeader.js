//var cbpAnimatedHeader = (function() {
//
//    var docElem = document.documentElement,
//        header = document.querySelector( '.navbar-header-top' ),
//        didScroll = false,
//        changeHeaderOn = 300;
//
//    function init() {
//        window.addEventListener( 'scroll', function( event ) {
//            if( !didScroll ) {
//                didScroll = true;
//                setTimeout( scrollPage, 250 );
//            }
//        }, false );
//    }
//
//    function scrollPage() {
//        var sy = scrollY();
//        if ( sy >= changeHeaderOn ) {
//            classie.add( header, 'cbp-af-header-shrink' );
//        }
//        else {
//            classie.remove( header, 'cbp-af-header-shrink' );
//        }
//        didScroll = false;
//    }
//
//    function scrollY() {
//        return window.pageYOffset || docElem.scrollTop;
//    }
//
//    init();
//
//});
    var scrolled = scrollY();

    var scrollOn = 38;
    var head = $('.navbar-header-top');

    if (scrolled > scrollOn) {
        head.addClass("head-bg");
    }

    //console.log(sy);

    window.onscroll = function () {
        scrolled = scrollY();

        //console.log(scrollOn);
        if (scrolled > scrollOn)
        {
            head.addClass("head-bg");
        } else if (scrolled < scrollOn) {
            head.removeClass("head-bg");
        }

    };

    function scrollY() {
        //return window.pageYOffset || docElem.scrollTop;
        return window.pageYOffset || document.documentElement.scrollTop;
    }
