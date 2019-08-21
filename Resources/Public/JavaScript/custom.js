// Smooth Scroll
var headerHeight = $("#mainmenu").outerHeight();
var docTitle = document.title;

$('.navbar-nav').on('click touchend', 'a[href*="/#"]', function(event) {
    //event.preventDefault();
    var $this = $(this);

    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    && location.hostname == this.hostname) {

        var $target = $(this.hash);
        $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
        if ($target.length) {
            var targetOffset = $target.offset().top - headerHeight;
            $('html,body').stop().animate({scrollTop: targetOffset}, 1000);
            $this.parent().addClass('is-active').siblings().removeClass('is-active');
            if (Modernizr.history) {
                document.title = docTitle +' : '+ this.title;
                history.pushState({}, docTitle +' : '+ this.title, this.hash);
            }
        }
    }
    return false;
});

