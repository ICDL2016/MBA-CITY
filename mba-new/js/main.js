$(document).ready(function(){
    $(".main-slider").owlCarousel({
        nav: true,
        autoplay: true,
        loop: true,
        dots: false,
        navText: ["<img class='arrow arrow-left' src='./img/slider/arrow-left.png' alt='arrow-left'>", "<img class='arrow arrow-right' src='./img/slider/arrow-right.png' alt='arrow-right'>"],
        items: 1,
    });

    $(".popular-slider").owlCarousel({
        nav: true,
        autoplay: true,
        loop: true,
        dots: false,
        navText: ["<img class='arrow-blue arrow-blue__left' src='./img/slider/arrow-left__blue.png' alt='arrow-left'>", "<img class='arrow-blue arrow-blue__right' src='./img/slider/arrow-right__blue.png' alt='arrow-right'>"],
        items: 5,
        responsive : {
            // breakpoint from 0 up
            0 : {
                items: 1,
            },
            // breakpoint from 600 up
            630 : {
                items: 2,
            },
            // breakpoint from 992 up
            992 : {
                items: 3,
            },
            // breakpoint from 1300 up
            1230 : {
                items: 4,
            },
            // breakpoint from 1600 up
            1600 : {
                items: 5,
            }
        }
    });
});

//video
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player1;

function onYouTubeIframeAPIReady() {

    if($(window).width() < 451) {
        player1 = new YT.Player('divPlayer1', {
            height: '200',
            width: '100%',
            videoId: 'd8Oc90QevaI',
        });
    } else if ($(window).width() < 768) {
        player1 = new YT.Player('divPlayer1', {
            height: '300',
            width: '100%',
            videoId: 'd8Oc90QevaI',
        });
    } else {
        player1 = new YT.Player('divPlayer1', {
            height: '400',
            width: '100%',
            videoId: 'd8Oc90QevaI',
        });
    }

}

function play1(event) {
    $('.video-wrapper').hide();
    $('#divPlayer1').show();
    $('iframe').css('display', 'block');
    player1.playVideo();
}

let burger = document.body.querySelector('.header-mobile__burger');
burger.addEventListener('click', function () {
   burger.classList.toggle('burger-active');
    $('.header-mobile__menu').slideToggle();
});

$('.main-form__submit').on('mouseover', function () {
   $(this).parent().css('background', '#3390ee');
}).on('mouseleave', function () {
   $(this).parent().css('background', '#297acb');
});

// псевдовалидация

let emptyTop = false;
let emptyBottom = false;
$('.form-input__name').on('click', function () {
    emptyTop = true;
    if (emptyBottom === true && ($(this).parent().children('.form-input__email').val().length === 0 || $(this).parent().children('.form-input__email').val().indexOf('@') === -1)) {
        $(this).parent().children('.form-input__span-email').show();
    }
}).on('input', function () {
    $(this).parent().children('.form-input__span-name').hide();
    $(this).parent().children('.form-input__name').removeClass('border-red');
});

$('.form-input__email').on('click', function () {
    emptyBottom = true;
    if (emptyTop === true && $(this).parent().children('.form-input__name').val().length === 0) {
        $(this).parent().children('.form-input__span-name').show();
    }
}).on('input', function () {
    $(this).parent().children('.form-input__span-email').hide();
    $(this).parent().children('.form-input__email').removeClass('border-red');
});

$('.main-form__submit').on('click', function () {
    event.preventDefault();
    let send = true;

    if ($(this).parent().children('.form-input__name').val().length === 0) {
        $(this).parent().children('.form-input__span-name').show();
        $(this).parent().children('.form-input__name').addClass('border-red');
        send = false;
    }

    if ($(this).parent().children('.form-input__email').val().length === 0 || $(this).parent().children('.form-input__email').val().indexOf('@') === -1) {
        $(this).parent().children('.form-input__span-email').show();
        $(this).parent().children('.form-input__email').addClass('border-red');
        send = false;
    }

    if (send === true) {
        $(this).parent().submit();
    }
});

//модалка

let popup = document.querySelector('.course-modal');
var popupHeight = 0;

$('.programms-block').on('click', function () {
    $('.overlay').show();
    $('.course-modal').fadeIn();
    $('body').css('overflow', 'hidden');
    popupHeight = +getComputedStyle(popup).height.replace('px', '');

    if (popupHeight > ($(window).height()-50)) {
        popup.style.overflow = 'scroll';
        popup.style.height = '95%';
    } else {
        popup.style.height = popupHeight + 'px';
    }
});

$('.overlay, .modal-close').on('click', function () {
    $('.overlay').fadeOut();
    $('.course-modal').fadeOut();
    $('body').css('overflow', 'visible');
});

// ресайзы экрана
window.onresize = function() {
    if (popup) {
        if (popupHeight > ($(window).height()-50)) {
            popup.style.overflow = 'scroll';
        }
    }
};

if ($(window).width() > 767 && $('.video-form__show').length) {
    $('.video-form__show').on('click', function () {
        $('.video').css('margin', '0');
        $('.video-form').fadeIn();
    })
}

if ($(window).width() <= 767 && $('.video-form__show').length) {
    $('.video-form__show').on('click', function () {
        $('.mobile-form__header').fadeIn();
    })
}