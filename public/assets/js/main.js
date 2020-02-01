(function () {
    window.addEventListener('scroll', function (event) {
        var depth, i, layer, layers, len, movement, topDistance, translate3d;
        topDistance = this.pageYOffset;
        layers = document.querySelectorAll("[data-type='parallax']");
        for (i = 0, len = layers.length; i < len; i++) {
            layer = layers[i];
            depth = layer.getAttribute('data-depth');
            movement = -(topDistance * depth);
            translate3d = 'translate3d(0, ' + movement + 'px, 0)';
            layer.style['-webkit-transform'] = translate3d;
            layer.style['-moz-transform'] = translate3d;
            layer.style['-ms-transform'] = translate3d;
            layer.style['-o-transform'] = translate3d;
            layer.style.transform = translate3d;
        }
    });

}).call(this);

$(document).ready(function () {
    $('#bangsat, [data-item-ojb]').on('click', function (e) {
        e.preventDefault();
        if (this.id == 'bangsat') {
            $('html, body').animate({
                // scrollTop: ($('#tentang').offset().top - (($(window).width() < 768) ? 10 : 25))
                scrollTop: ($('#tentang').offset().top + (($(window).width() < 768) ? 25 : 0))
            }, 1250, 'swing');
        } else {
            let getObject = '.' + $(this).attr('data-item-ojb');
            $('html, body').animate({
                scrollTop: ($(getObject).offset().top + (($(window).width() < 768) ? 25 : 0))
                // scrollTop: ($(getObject).offset().top - (($(window).width() < 768) ? 10 : 25))
            }, 1250, 'swing');
        }
    });
});

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > ($('.first-section').offset().top - 2)) {
        $(".navbar-sticky").css("top", "0px");
        if ($(window).scrollTop() > ($('#tentang').offset().top - 1)) {
            $("#menu_tentang").addClass("active");
        }
    } else {
        $(".navbar-sticky").css("top", "-500px");
    }
})

$(document).ready(function () {
    $(".spinner").fadeOut(), $("#preloader").delay(400).fadeOut("slow"), $("body").delay(400).css({
        overflow: "visible"
    })
});

$(document).ready(function () {
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    });

    $('.galeri-luana').slick({
        centerMode: false,
        centerPadding: '60px',
        slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [{
                breakpoint: 768,
                settings: {
                    centerMode: false,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    centerMode: false,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
});
