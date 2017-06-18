$(document).ready(function () {
    $(".nav a:gt(0)").click(function (e) {
        e.preventDefault();
        var link = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(link).offset().top
        }, 1000);
    });

    $('#service-slider').owlCarousel({
        items: 5,
        loop: true,
        nav: true,
        navText:["<i class='fa fa-chevron-left fa-2x'></i>","<i class='fa fa-chevron-right fa-2x'></i>"],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:3,
            },
            1000:{
                items:5,
            }
        }
    });

    $('#clients-slider').owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        nav: true,
        navText:["<i class='fa fa-chevron-left fa-2x'></i>","<i class='fa fa-chevron-right fa-2x'></i>"],
        responsive:{
            2000:{
                items:1,
            }
        }
    });

    $('#team-slider').owlCarousel({
        items: 3,
        loop: false,
        dots: false,
        margin: 10,
        nav: true,
        navText:["<i class='fa fa-chevron-left fa-2x'></i>","<i class='fa fa-chevron-right fa-2x'></i>"],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            768:{
                items:2,
            },
            1200:{
                items:3,
            }
        }});

    $('.article-description').readmore({
        collapsedHeight: 110,
        //embedCSS: false,
        moreLink: '<a class="article-link" href="#">Читать дальше<i class="fa fa-chevron-right"></i></a>',
        lessLink: '<a class="article-link" href="#">Скрыть<i class="fa fa-chevron-left"></i></a>',
    });
});
