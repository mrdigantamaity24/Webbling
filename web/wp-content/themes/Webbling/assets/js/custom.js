/*---Navbar---*/
function navbarFixed() {
    if (jQuery(".header_area").length) {
        jQuery(window).scroll(function () {
            var scroll = jQuery(window).scrollTop();
            if (scroll) {
                jQuery(".header_area").addClass("navbar_fixed");
            } else {
                jQuery(".header_area").removeClass("navbar_fixed");
            }
        });
    }
}
/*---Navbar---*/

/*function coating_slider() {
    var coating_slider = jQuery(".coating-slider");
    if (coating_slider.length) {
        coating_slider.owlCarousel({
            loop: true,
            margin: 30,
            items: 4,
            autoplay: true,
            autoplayTimeout: 4000,
            //autoHeight: true,
            //smartSpeed: 4000,
            center: false,
            responsiveClass: true,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                    margin: 0,
                    dots: true,
                    nav: false,
                },
                776: {
                    items: 2,
                    margin: 20,
                    dots: true,
                    nav: false,
                },
                1024: {
                    items: 3,
                    margin: 20,
                    dots: true,
                    nav: false,
                },
                1199: {
                    items: 4,
                },
            },
        });
    }
}

function gallery_slider() {
    var gallery_slider = jQuery(".gallery-slider");
    if (gallery_slider.length) {
        gallery_slider.owlCarousel({
            loop: true,
            margin: 0,
            items: 1,
            center: false,
            autoplay: false,
            touchDrag: false,
            mouseDrag: false,
            //smartSpeed: 4000,
            responsiveClass: false,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                    dots: true,
                    nav: false,
                },
                776: {
                    items: 1,
                    dots: true,
                    nav: false,
                },
                1024: {
                    items: 1,
                    dots: true,
                    nav: false,
                },
                1199: {
                    items: 1,
                },
            },
        });
    }
}*/

/*function related_slider() {
    var related_slider = jQuery(".related-slider");
    if (related_slider.length) {
        related_slider.owlCarousel({
            loop: false,
            margin: 30,
            items: 2,
            autoplay: false,
            // smartSpeed: 4000,
            responsiveClass: true,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                    margin: 0,
                    dots: true,
                    nav: false,
                },
                650: {
                    margin: 20,
                    items: 2,
                    dots: true,
                    nav: false,
                },
                776: {
                    margin: 20,
                    items: 2,
                    dots: true,
                    nav: false,
                },
                1024: {
                    margin: 30,
                    items: 2,
                },
                1199: {
                    margin: 30,
                    items: 2,
                },
            },
        });
    }
}*/

jQuery(document).ready(function () {
    // related_slider();
    // coating_slider();
    //  gallery_slider();
    navbarFixed();

    if (jQuery("#back-to-top").length) {
        var scrollTrigger = 100, // px
            backToTop = function () {
                var scrollTop = jQuery(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    jQuery("#back-to-top").addClass("show");
                } else {
                    jQuery("#back-to-top").removeClass("show");
                }
            };
        backToTop();
        jQuery(window).on("scroll", function () {
            backToTop();
        });
        jQuery("#back-to-top").on("click", function (e) {
            e.preventDefault();
            jQuery("html,body").animate(
                {
                    scrollTop: 0,
                },
                700
            );
        });
    }

    // nav-bar
    const navToggler = document.querySelector(".nav-toggler");
    const navMenu = document.querySelector(".site-navbar ul");
    const navLinks = document.querySelectorAll(".site-navbar a");

    // load all event listners
    allEventListners();

    // functions of all event listners
    function allEventListners() {
        // toggler icon click event
        navToggler.addEventListener("click", togglerClick);
        // nav links click event
        navLinks.forEach((elem) => elem.addEventListener("click", navLinkClick));
    }

    // togglerClick function
    function togglerClick() {
        navToggler.classList.toggle("toggler-open");
        navMenu.classList.toggle("open");
    }

    // navLinkClick function
    function navLinkClick() {
        if (navMenu.classList.contains("open")) {
            navToggler.click();
        }
    }

    /* jQuery(".slider-for-product-details").slick({
         dots: false,
         infinite: false,
         speed: 300,
         slidesToShow: 1,
         slidesToScroll: 1,
         arrows: false,
     });
     jQuery(".slider-nav-product-details").slick({
         slidesToShow: 6,
         slidesToScroll: 1,
         asNavFor: ".slider-for-product-details",
         vertical: false,
         infinite: false,
         dots: false,
         arrows: true,
         centerMode: false,
         focusOnSelect: true,
         responsive: [
             {
                 breakpoint: 992,
                 settings: {
                     slidesToShow: 6,
                 },
             },
             {
                 breakpoint: 768,
                 settings: {
                     slidesToShow: 3,
                 },
             },
         ],
     });*/
});


/*-----Multi-step form----*/
jQuery(document).ready(function () {
    jQuery('#step-1 .next').on('click', function (e) {
        e.preventDefault();
        jQuery('#step-2').show();
        jQuery('#registration').addClass('active');
        jQuery('#step-1').hide();
    });
    jQuery('#step-2 .next').on('click', function (e) {
        e.preventDefault();
        jQuery('#step-3').show();
        jQuery('#company-details').addClass('active');
        jQuery('#step-2').hide();
        jQuery('#step-1').hide();
    });
    jQuery('#step-2 .previous').on('click', function (e) {
        e.preventDefault();
        jQuery('#step-1').show();
        jQuery('#registration').removeClass('active');
        jQuery('#step-2').hide();
    });
    jQuery('#step-3 .next').on('click', function (e) {
        e.preventDefault();
        jQuery('#step-4').show();
        jQuery('#pay-price').addClass('active');
        jQuery('#step-3').hide();
        jQuery('#step-2').hide();
        jQuery('#step-1').hide();
    });
    jQuery('#step-3 .previous').on('click', function (e) {
        e.preventDefault();
        jQuery('#step-2').show();
        jQuery('#company-details').removeClass('active');
        jQuery('#step-3').hide();
        jQuery('#step-1').hide();
    });

});
 /*-----Multi-step form----*/
