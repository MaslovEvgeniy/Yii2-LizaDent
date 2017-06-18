$(document).ready(function () {
    $('.article-description').readmore({
        collapsedHeight: 110,
        //embedCSS: false,
        moreLink: '<a class="article-link" href="#">Читать дальше<i class="fa fa-chevron-right"></i></a>',
        lessLink: '<a class="article-link" href="#">Скрыть<i class="fa fa-chevron-left"></i></a>',
    });
});

