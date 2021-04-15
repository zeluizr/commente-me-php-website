$(document).ready(function() {
    
      var owl = $(".owl-carousel");
     
      owl.owlCarousel({
        margin: 0,
        nav: false,
        navText: ['◄','►'],
        dots: false,
        loop: true,
        autoplay:true,
        autoplayTimeout:5000,
        responsive: {
          0: {
            items: 1,
          },
          380: {
            items: 1,
          },
          580: {
            items: 2,
          },
          991: {
            items: 3,
          }
      }
    });
});