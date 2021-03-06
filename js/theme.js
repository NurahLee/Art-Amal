(function ($) {
    "use strict";
    // use strict
    $(window).on('load', function () {
        $('.loading').fadeOut();
    });
})(jQuery);

(function ($) {
    "use strict";
    // use strict

    /* Toggle List Checkout */
    $('.shop-cart-button').on('click', function () {
        $(this).siblings().slideToggle();
    });

    /* Mobile Menu */
    $('.header-mobile__button').on('click', function () {
        $(this).children().toggleClass('active');
        $('.header-mobile__navbar').slideToggle(300);
    });
    $('.header-mobile__navbar li').each(function () {
        if ($(this).children().length > 1) {
            $(this).children('a').append("<span></span>");
        }
        $(this).children('a').on('click', function () {
            $(this).siblings('.sub-menu').slideToggle(300).parent().toggleClass('active');
        });
    });

})(jQuery);

// Sticky Header
(function ($) {
    "use strict";
    // use strict

    var n = $('.header'),
        s = n.outerHeight();
    n.after("<div class='header__holder'></div>");
    $(window).on('scroll', function () {
        $(window).scrollTop() > s ?
            ($('.header__holder').css("height", s), n.addClass('header__fixed')) :
            ($('.header__holder').css("height", 0), n.removeClass('header__fixed'))
    });
})(jQuery);

// Back to top
(function ($) {
    "use strict";
    // use strict

    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 600) {
            $('.to-top').fadeIn(500);
        } else {
            $('.to-top').fadeOut(500);
        }
    });
    $('.to-top').on('click', function () {
        $("html, body").animate({
            scrollTop: 0
        }, {
            duration: 1000,
            easing: "easeOutSine"
        });
    });
})(jQuery);

// Add - Sub product in shop cart
(function ($) {
    "use strict";
    // use strict

    $('.quantity').each(function () {
        var index = $(this).children('input').val() != '' ? $(this).children('input').val() : 0;

        $(this).children('input').val(index);

        $(this).children('.add').on('click', function () {
            index++;
            $(this).siblings('input').val(index);
        });

        $(this).children('.sub').on('click', function () {
            index--;
            $(this).siblings('input').val(index);
        });
    });
})(jQuery);

// Page Side bar
(function ($) {
    "use strict";
    // use strict

    $('.bar-button').on('click', function () {
        $('.sidebar').fadeIn().children().toggle('slide', {
            direction: 'right'
        }, 500);
        $('.sidebar__image').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            dotsClass: 'au-slick-dots',
            autoplay: true
        });
    });
    $('.sidebar__close').on('click', function () {
        $('.sidebar').fadeOut().children().toggle('slide', {
            direction: 'right'
        }, 500);
    });
})(jQuery);


(function ($) {
    "use strict";
    // use strict

    $('.product-rating').each(function () {
        var index = $(this).data('star');
        for (var i = 0; i < 5; i++) {
            if (i < index) $(this).append('<i class="fa fa-star"></i>');
            else $(this).append('<i class="fa fa-star-o"></i>');
        }
    });
})(jQuery);

(function ($) {
    "use strict";
    // use strict

    $('#layout_grid').on('click', function () {
        $('.shop-list-body').addClass('shop-grid');
    });
    $('#layout_list').on('click', function () {
        $('.shop-list-body').removeClass('shop-grid');
    });
})(jQuery);

(function ($) {
    "use strict";
    // use strict

    var search = $('.search-button');
    search.siblings().slideUp();
    search.on('click', function () {
        search.siblings().slideToggle();
    });
    search.siblings().children('a').on('click', function () {
        search.siblings().slideToggle();
    })
})(jQuery);

(function ($) {
    "use strict";
    // use strict

    $('.au-tabs').each(function () {
        $(this).find('.tab-title').on('click', function () {
            var tab = $(this);
            tab.siblings().removeClass('tab-active');
            tab.addClass('tab-active');
        });
    });
})(jQuery);

// banner
(function($){
    "use strict";
    // use strict

    $('.js-au-banner').each(function(){
        var banner = $(this);
        var content = banner.find('.banner-content');
        var bg = banner.data('image')!= null ? ('url(' + banner.data('image') + ')') : '';
        banner.css({
            "height" : banner.data('height'),
            "background-image": bg
        });
        content.css({
            'right' : banner.data('positionright'),
            'left' : banner.data('positionleft'),
            'top' : banner.data('positiontop'),
            'bottom' : banner.data('positionbottom')
        });
    });
})(jQuery);