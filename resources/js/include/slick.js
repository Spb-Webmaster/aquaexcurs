export function reviews_carousel() {

    let slick = $('.reviews__js');

    slick.slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 4,
        autoplay: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                }
            },
            {
                breakpoint: 668,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    autoplay: false,

                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.reviews_prev__js').on( "click", function() {
        slick.find('.slick-prev').trigger( "click" );
    } );

    $('.reviews_next__js').on( "click", function() {
        slick.find('.slick-next').trigger( "click" );
    } );
    //slick-next

}
