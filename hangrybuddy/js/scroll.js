//navigation link scrolling
$(function() {
    /*
        $('.nav_li a[href*="#"]:not([href="#"])').click(function() {
            var topSize;
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 500);
                    return false;
                }
            }
        });
    */
     $('a[href*="#"]:not([href="#"])').click(function() {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

        $('html, body').animate({
            scrollTop: target.offset().top
        }, 500);


    });
});


