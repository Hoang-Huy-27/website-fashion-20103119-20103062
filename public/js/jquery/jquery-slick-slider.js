$(document).ready(function () {
    $(".img-slider").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        arrow: true,
        prevArrow:`<button type='button' class='slick-next pull-left'><i class="fa-solid fa-circle-left"></i></button>`,
        nextArrow:`<button type='button' class='slick-prev pull-right'><i class="fa-solid fa-circle-right"></button>`,
    });
});
