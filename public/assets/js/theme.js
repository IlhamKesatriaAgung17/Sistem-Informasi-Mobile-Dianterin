'use strict';

// Cache
var body = $('body');
var toTop = $('.to-top');
var searchPopup = $('.search-popup');
var testimonialSlider = $('.testimonial-slider');
var countdownTimer1 = $("#countdown-timer1");
var wowDiv = $('body > main div');

$(window).on('load', function () {
    /*------- Preloader --------*/
    $('#preloader').delay(1000).fadeOut(200);

    /*------------------- Style Switcher Files  -------------------*/
//    $('head').append('<link href="assets/css/multicolor/theme-color.css" rel="stylesheet" id="theme-config-link" />');
//    $('head').append('<script src="assets/js/theme-config.js" type="text/javascript"></script>');
//    $('head').append('<script src="assets/js/jquery.cookie.js" type="text/javascript"></script>');
    /*------------------- ./Style Switcher Files  -------------------*/
});

$(window).on('scroll', function () {
    /*------- Scroll To Top --------*/
    if ($(this).scrollTop() > 100) {
        toTop.css({bottom: '0px'});
    }
    else {
        toTop.css({bottom: '-150px'});
    }

});

$(function () {

    // --------------------------- Sticky Header ------------------------ //
    (function () {
        if ($(window).width() > 760) {
            $(".menu-bar").sticky({topSpacing: 0});
        }
    }());

    /*------- Search Popup --------*/
    (function ($) {
        'use strict';
        // Popup for Menu and Search Links in the Header
        $('.search').on('click', function () {
            searchPopup.fadeIn(250);
            $('.search-popup .search-query').focus();
        });
        $('.close-search').on('click', function () {
            searchPopup.fadeOut(250);
        });
    })($);

    /*------- Scroll To Top Animate --------*/
    (function () {
        toTop.click(function () {
            $('html, body').animate({scrollTop: 0}, 800);
            return false;
        });
    }());

    /*------- Scroll To Top Animate --------*/
    if (testimonialSlider.length > 0) {
        testimonialSlider.owlCarousel({
            items: 1,
            rtl: false,
            loop: true,
            dots: true,
            nav: true,
            autoplay: true,
            responsive: {
                0: {items: 1}
            },
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
        });
    }

    if ((wowDiv.hasClass('wow'))) {
        new WOW().init();
    }

    /* --------------------------- Coundown Timer ------------------------ */
    (function () {
        if (countdownTimer1.length) {
            countdownTimer1.countdown("2017/05/18", function (event) {
                var $this = $(this).html(event.strftime(''
                        + '<span>%D</span> days '
                        + '<span>%H</span> hours '
                        + '<span>%M</span> mins '
                        + '<span>%S</span> secs'));
            });
        }
    }());

    /*------- Google Map --------*/
    (function () {
        var LocationData = [
            [-6.707737182269559,108.5263019778767,  "DTRN Tuparev"],
            [-6.703475005336415,108.5409790252305, "DTRN Agen Pilang"],
            [-6.715619394586669, 108.54631203387376, "DTRN Sutawinangun"],
            [-6.723246874618887, 108.53202286999334, "DTRN Tria Cideng"],
            [-6.7191563296248855, 108.55029414540752, "DTRN Cbng Utama Crbn"],
            [-6.716306304953339, 108.5330606421947, "DTRN"],
            [-6.699328883259912,  108.55896531306638, "DTRN Conter Jatara"],
            [-6.715079084223527,  108.54562164649828, "DTRN Pecilon"],
            [-6.7124807111396745,  108.54469900560227, "DTRN Kepudang"],
            [-6.7124807111396745,  108.54469900560227, "DTRN Kepudang"],
        ];

        function initialize()
        {
            var map = new google.maps.Map(document.getElementById('map-canvas'));
            var bounds = new google.maps.LatLngBounds();
            var infowindow = new google.maps.InfoWindow();

            for (var i in LocationData)
            {
                var p = LocationData[i];
                var latlng = new google.maps.LatLng(p[0], p[1]);
                bounds.extend(latlng);

                var marker = new google.maps.Marker({
                    position: latlng,
                    map: map,
                    title: p[2]
                });

                google.maps.event.addListener(marker, 'click', function () {
                    infowindow.setContent(this.title);
                    infowindow.open(map, this);
                });
            }

            map.fitBounds(bounds);
        }

        try {
            google.maps.event.addDomListener(window, 'load', initialize);
        } catch (e) {
            console && console.error(e.message);
        }

    }());

    /*------- Calculator --------*/
    (function () {

        if (typeof $.fn.databinder == 'undefined')
        {
            return;
        }

        $('.calculate-form').on('changed.bs.select', function () {
            $(this).trigger('recalculate');
        }).on('keyup', ':input', function () {
            $(this).trigger('recalculate');
        }).databinder({
            money: {
                decimals: 2,
                separator: '.',
                thousands: ' ',
                cutzero: false
            },
            calculate: function (data, callback) {
                try {
                    // Example: minimal cost
                    data.min = 15;
                    // Example: price per kilometer per kilo
                    data.price = 0.01;
                    // Example: distance between locations
                    data.distance = 350;
                    // Example: cubic cm into virtual weight
                    data.volume_coefficient = 0.08;

                    data.volume = data.width * data.height * data.depth / 1000;
                    data.volume_weight = data.volume * data.volume_coefficient;

                    var weight = Math.max(data.weight, data.volume_weight);
                    var cost = data.price * data.distance * weight;

                    if (typeof data.package == 'string' && data.package) {
                        try {
                            eval('cost = ' + data.package + ';');
                        } catch (e) {
                        }
                    }

                    cost = Math.max(cost, data.min);

                    data.cost = cost ? cost : null;

                    callback(data);

                } catch (e) {
                    console && console.log(e.message);
                }
            }
        });

    }());

});

