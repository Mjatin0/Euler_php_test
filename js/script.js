new WOW().init();
AOS.init();

var $ = jQuery.noConflict();

$(document).ready(function () {
    // main menu
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 300) {
            $(".header").addClass("fixed");
        } else {
            $(".header").removeClass("fixed");
        }
    });
    jQuery('ul.sf-menu').superfish({
        animation: {
            height: 'show'
        },
        delay: 100
    });
    $('.offcanvas-menu-btn').click(function(){
        $(this).toggleClass('close');
        $('.header_menu').toggleClass('open');
    });
    $("#toggle-btn").click(function () {
        $(".sf-menu").slideToggle("slow");
    });

    $('.toggle-subarrow').click(
        function () {
            $(this).parent().toggleClass("mob-drop");
        });

    var header = $(".header-inner");
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 100 && $(this).width() > 769) {
            header.addClass("navbar-fixed-top");
        } else {
            header.removeClass('navbar-fixed-top');
        }
    });
    $(this).find(".h4 i").each(function () {
        $(this).addClass("green");
    });

    var options = [];

    // header language dropdown    
    $('.lan-btn').on('click', function () {
        $('.lan-selector').toggleClass('open');
    });

    //banner kilometers counter animation
    $('.count').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });


    // charging hub locator js

    var marker;
    var map;

    $("#link1").click(function () {
        changeMarkerPos(28.538556, 77.276667);
    });
    $("#link2").click(function () {
        changeMarkerPos(28.476852, 77.053320);
    });
    $("#link3").click(function () {
        changeMarkerPos(28.6726359, 77.145608, 17);
    });
    $("#link4").click(function () {
        changeMarkerPos(28.609556, 77.048248);
    });
    $("#link5").click(function () {
        changeMarkerPos(28.628689, 77.320381);
    });
    $("#link6").click(function () {
        changeMarkerPos(28.713373, 77.317039);
    });
    $("#link7").click(function () {
        changeMarkerPos(28.659327, 77.351212);
    });
    $("#link8").click(function () {
        changeMarkerPos(28.624992, 77.391197);
    });

    function initialize() {
        var styles = [{
            stylers: [{
                saturation: -100
            }]
        }];
        var styledMap = new google.maps.StyledMapType(styles, {
            name: "Styled Map"
        });
        var mapProp = {
            center: new google.maps.LatLng(28.54085922241211, 77.27555847167969),
            zoom: 17,
            panControl: false,
            zoomControl: false,
            mapTypeControl: false,
            scaleControl: true,
            streetViewControl: false,
            overviewMapControl: false,
            rotateControl: true,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("map_canvas"), mapProp);

        map.mapTypes.set('map_style', styledMap);
        map.setMapTypeId('map_style')

        marker = new google.maps.Marker({
            position: new google.maps.LatLng(19.0760, 72.8777),
            animation: google.maps.Animation.DROP,
            icon: 'images/map-marker.png',
        });

        marker.setMap(map);
        map.panTo(marker.position);
    }

    function changeMarkerPos(lat, lon) {
        myLatLng = new google.maps.LatLng(lat, lon)
        marker.setPosition(myLatLng);
        map.panTo(myLatLng);
    }

    google.maps.event.addDomListener(window, 'load', initialize);

    // animation on scroll
    AOS.init({
        once: true
    })

    // our customer logo slider

    $('.clients ul').slick({
        infinite: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        autoplaySpeed: 4000,
        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1008,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    arrows: false
                }
            }

        ]
    });
    //awards slider
    // Init slick slider + animation
    $('.slider').slick({
        autoplay: false,
        speed: 800,
        lazyLoad: 'progressive',
        arrows: true,
        dots: false,
        slidesToShow: 1,
        adaptiveHeight: true,
        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 1008,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false,

                }
            }

        ]


    }).slickAnimation();

    //why ev section slider
    $('.slick-nav.sync').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: ".slick-slider.sync",
            dots: false,
            arrows: false,
            fade: false,
            centerMode: false,
            centerPadding: "0",
            focusOnSelect: true,
            infinite: false
        })
        .on("init", function (event, slick) {
            $('.slick-nav.sync .slick-slide[data-slick-index="0"]').addClass("is-active");
        });

    $('.slick-slider.sync').slick({
            infinite: true,
            autoplay: false,
            adaptiveHeight: true,
            speed: 600,
            fade: false,
            cssEase: "linear",
            rtl: false, //right to left
            accessibility: true,
            arrows: false,
            dots: false,
            pauseOnFocus: true,
            pauseOnHover: true,
            swipe: false,
            focusOnSelect: false,
            draggable: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: ".slick-nav.sync",
            useTransform: true,

    })
    .on("setPosition", function (event, slick) {
        slick.$slides.css("height", slick.$slideTrack.height() + "px");
    })
    .on("afterChange", function (event, slick, currentSlide) {
        $(".slick-nav.sync").slick("slickGoTo", currentSlide);
        var currrentNavSlideElem = '.slick-nav.sync .slick-slide[data-slick-index="' + currentSlide + '"]';
        $(".slick-nav.sync .slick-slide.is-active").removeClass("is-active");
        $(currrentNavSlideElem).addClass("is-active");
    });

    $('.testimonials-sec').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false,

        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});

// Play Audio
jQuery(document).ready(function() {
  var playing = false;

  jQuery("#audio-button").click(function() {
    if (playing == false) {
      document.getElementById("player").play();
      playing = true;
    } else {
      document.getElementById("player").pause();
      playing = false;
    }
  });
});

// Story Slider
$(document).ready(function(){
    $('.sroty-slider-bot').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        // autoplay: true,
        autoplaySpeed: 5000,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        arrows: false,
        fade: false,
        infinite: 0,
        adaptiveHeight: true,
        asNavFor: '.sroty-slider-top'
    });
    $('.sroty-slider-top').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        // autoplay: true,
        autoplaySpeed: 5000,
        asNavFor: '.sroty-slider-bot',
        dots: false,
        infinite: 0,
        centerMode: true,
        adaptiveHeight: true,
        focusOnSelect: true
    });
});