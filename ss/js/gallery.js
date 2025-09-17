$(document).ready(function(){
    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 1000,
        dots: true,
        arrows: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            // Diğer breakpoint ayarlarını ekleyebilirsiniz
        ]
    });
});
