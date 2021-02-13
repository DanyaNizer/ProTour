// Липкий header
$(window).on('scroll', function() {

    var y = $(window).scrollTop(),
        topBar = $('.myheader');
    topPab = $('.header__top-info-bg');

    if (y > 100) {
        topBar.addClass('sticky');
        topPab.addClass('sticpab');
    } else {
        topBar.removeClass('sticky');
        topPab.removeClass('sticpab');
    }

});




// загрузочный экран
$(function() {
    $('#preloader').delay(1500).fadeOut('slow');
});



// Cлайдер
$('.slick__slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 4000,
    lazyLoad: 'ondemand',
    responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false
            }
        },
        {
            breakpoint: 320,
            settings: {
                arrows: false
            }
        }
    ]
});



$('.rewies__slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true
})


$(document).ready(function() {
    $('a[href^="#down"], *[data-href^="#down"]').on('click', function(e) {
        e.preventDefault();
        var t = 1000;
        var d = $(this).attr('data-href') ? $(this).attr('data-href') : $(this).attr('href');
        $('html,body').stop().animate({ scrollTop: $(d).offset().top }, t);
    });
});

// Скрипты для бургер меню
var Menu = {

    el: {
        ham: $('.menu'),
        menuTop: $('.menu-top'),
        menuMiddle: $('.menu-middle'),
        menuBottom: $('.menu-bottom')
    },

    init: function() {
        Menu.bindUIactions();
    },

    bindUIactions: function() {
        Menu.el.ham
            .on(
                'click',
                function(event) {
                    Menu.activateMenu(event);
                    event.preventDefault();
                }
            );
    },

    activateMenu: function() {
        Menu.el.menuTop.toggleClass('menu-top-click');
        Menu.el.menuMiddle.toggleClass('menu-middle-click');
        Menu.el.menuBottom.toggleClass('menu-bottom-click');
    }
};

Menu.init();

$(document).ready(function() {
    $('.menu').click(function(event) {
        $('.myheader').toggleClass('active');
        $('.menu').toggleClass('wi');
    });
    $('.top-li').click(function(event) {
        $('.myheader').toggleClass('active');
        $('.menu-top').toggleClass('menu-top-click');
        $('.menu-middle').toggleClass('menu-middle-click');
        $('.menu-bottom').toggleClass('menu-bottom-click');
        $('.menu').toggleClass('wi');
    });
});