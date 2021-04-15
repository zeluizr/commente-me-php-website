$(document).ready(function(){

    var owl = $('.owl-carousel');
    owl.owlCarousel();
    // Go to the next item
    $('.btn_next').click(function() {
        owl.trigger('next.owl.carousel');
    });
    // Go to the previous item
    $('.btn_prev').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl.trigger('prev.owl.carousel', [300]);
    });
});