// Smooth Scroll
var headerHeight = $("#mainmenu").outerHeight();
var docTitle = document.title;

$('a[href^="/#"]').on('click', function (e) {
    e.preventDefault();
    var target = this.hash;
    var $target = $(target);
    $(this).parent().addClass('is-active').siblings().removeClass('is-active');
    $('html, body').stop().animate({
        'scrollTop': $target.offset().top
    }, 900, 'swing', function () {
        window.location.hash = target;
    });
});
$('a.navbar-brand').on('click', function (e) {
    e.preventDefault();
    $('ul.navbar-nav li').removeClass('is-active');
});
