$(document).ready(function () {
    //initialize swiper when document ready
    var mySwiper = new Swiper ('.home-slider-container', {
        // Optional parameters
        loop: true,
        autoplay: {
            delay: 3000,
        },
        effect: "fade"
    })

    // Gallery init
    lightGallery(document.getElementById('gallery'), {
        thumbnail:true
    });

    // Publications gallery
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 15,
        slidesPerView: 6,
        // loop: true,
        // freeMode: true,
        // loopedSlides: 5, //looped slides should be the same
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        breakpoints: {
            320: {
              slidesPerView: 3,
              spaceBetween: 5,
            },
            768: {
                slidesPerView: 6,
                spaceBetween: 15,
            }
        }
    });
    var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 0,
        // loop:true,
        // loopedSlides: 5, //looped slides should be the same
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: galleryThumbs,
        },
    });

    // FAQ
    $('.faq__item-header').click( function() {
        $(this).next('.faq__item-content').slideToggle();
        $(this).parent().toggleClass('active');
    });

    // Open popup
    $('.btn').click( function(e) {
        e.stopPropagation();
        $('.popup').fadeOut();
        $('.mobile-nav').fadeOut();
        if ($(this).attr('data-type') == 'modal') {
            if ($(this).attr('data-modal') == 'request') $('#requestPopup').fadeIn();
            if ($(this).attr('data-modal') == 'callback') $('#callbackPopup').fadeIn();
            if ($(this).attr('data-modal') == 'review') $('#reviewPopup').fadeIn();
        }
    });

    // Close popup
    $('.popup__close').click( function(e) {
        $('.popup').fadeOut();
    });

    $(document).click( function(e) {
        if (!$(e.target).parents().addBack().is('.popup__modal')) {
            $('.popup').fadeOut();
        }
    });
    
    $(document).keyup(function(e) {
        if (e.key === "Escape") {
            $('.popup').fadeOut();
        }
    });

    // Open mobile nav
    $('#hamburger').click( function() {
        $('.mobile-nav').fadeIn();
    });

    // Close mobile nav
    $('.mobile-nav__close').click( function() {
        $('.mobile-nav').fadeOut();
    });
});