$(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        navText: ['<', '>'],
        margin: 10,
        nav: true,
        loop: true,
        responsive: {
            0: {
                items: 3
            },
            200: {
                items: 3
            },
            600: {
                items: 4
            },
            800: {
                items: 5
            },
            1000: {
                items: 6
            },
            1200: {
                items: 10
            }
        }
    })
})