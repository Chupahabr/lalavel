<template>
    <div class="wallpaper-slider">
        <div class="wallpaper-slider__container container">
            <div class="wallpaper-slider__label label">Новые обои</div>
            <div class="wallpaper-slider__main">
                <div class="wallpaper-slider__slider swiper">
                    <div class="wallpaper-slider__wrapper swiper-wrapper">
                        <div class="wallpaper-slider__slide swiper-slide">
                            <div class="wallpaper-slider__image">
                                <img src="icon/wallpaper-slider/xx.jpg" alt="">
                            </div>
                            <a class="view-catalog">Мираж
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="wallpaper-slider__slide swiper-slide">
                            <div class="wallpaper-slider__image">
                                <img src="icon/wallpaper-slider/2.png" alt="">
                            </div>
                            <a class="view-catalog">Мираж
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="wallpaper-slider__slide swiper-slide">
                            <div class="wallpaper-slider__image">
                                <img src="icon/wallpaper-slider/3.png" alt="">
                            </div>
                            <a class="view-catalog">Мираж
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="wallpaper-slider__slide swiper-slide">
                            <div class="wallpaper-slider__image">
                                <img src="icon/wallpaper-slider/4.png" alt="">
                            </div>
                            <a class="view-catalog">Мираж
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="wallpaper-slider__slide swiper-slide">
                            <div class="wallpaper-slider__image">
                                <img src="icon/wallpaper-slider/5.png" alt="">
                            </div>
                            <a class="view-catalog">Мираж
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="wallpaper-slider__slide swiper-slide">
                            <div class="wallpaper-slider__image">
                                <img src="icon/wallpaper-slider/6.png" alt="">
                            </div>
                            <a class="view-catalog">Мираж
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="wallpaper-slider__slide swiper-slide">
                            <div class="wallpaper-slider__image">
                                <img src="icon/wallpaper-slider/7.png" alt="">
                            </div>
                            <a class="view-catalog">Мираж
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="wallpaper-slider__slide swiper-slide">
                            <div class="wallpaper-slider__image">
                                <img src="icon/wallpaper-slider/8.png" alt="">
                            </div>
                            <a class="view-catalog">Мираж
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev wallpaper-slider__button-prev wallpaper-slider__button"></div>
                <div class="swiper-button-next wallpaper-slider__button-next wallpaper-slider__button"></div>
            </div>
        </div>
    </div>
    <div>
        <div v-for="product in products">
            <div>{{ product.name }}</div>
            <div>{{ product.price }}</div>
        </div>
    </div>
</template>

<script>
import Swiper from "swiper";

export default {
    name: "ProductSlider",

    data () {
        return {
            products: []
        }
    },

    mounted () {
        this.initSwiper();
        this.getProducts();
    },

    methods: {
        initSwiper () {
            new Swiper('.wallpaper-slider__slider', {
                breakpoints: {
                    320: {
                        slidesPerView: 1.4,
                        spaceBetween: 20,
                    },
                    577: {
                        slidesPerView: 2.4,
                        spaceBetween: 20,
                    },
                    769: {
                        slidesPerView: 3,
                        spaceBetween: 15,
                    },
                    993: {
                        slidesPerView: 4,
                        spaceBetween: 15,
                    }

                },
                navigation: {
                    nextEl: '.wallpaper-slider__button-next',
                    prevEl: '.wallpaper-slider__button-prev',
                },
            });
        },
        getProducts () {
            this.axios
                .get("/api/products")
                .then((response) => {
                    this.products = response.data;
                })
        }
    }
}
</script>

<style scoped>

</style>