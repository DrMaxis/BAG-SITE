
    (function ($) {
        "use Strict";
    
    $('.blog').owlCarousel({
        loop: false,
        dots: false,
        autoplay: true,
        margin: 30,
        smartSpeed: 1000,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

})(jQuery);