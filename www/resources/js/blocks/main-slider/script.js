import Swiper from "swiper";

new Swiper('.main-slider', {

    loop: true,

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    autoplay: {
        delay: 5000,
    },
    navigation: {
        nextEl: '.main-slider__button-next',
        prevEl: '.main-slider__button-prev',
    },
});



