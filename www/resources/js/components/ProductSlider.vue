<template>
    <div class="wallpaper-slider">
        <div class="wallpaper-slider__container container">
            <div class="wallpaper-slider__label label">Новые обои</div>
            <div class="wallpaper-slider__main">
                <swiper class="wallpaper-slider__slider swiper"
                    :slides-per-view="swiperSlides"
                    :space-between="swiperSpaceBetween"
                    :navigation="{
                      prevEl: prev,
                      nextEl: next,
                    }">
                        <swiper-slide class="wallpaper-slider__slide">
                            <div class="wallpaper-slider__image">
                                <img src="icon/wallpaper-slider/xx.jpg" alt="">
                            </div>
                            <a class="view-catalog">Мираж
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </swiper-slide>
                        <swiper-slide class="wallpaper-slider__slide">
                            <div class="wallpaper-slider__image">
                                <img src="icon/wallpaper-slider/2.png" alt="">
                            </div>
                            <a class="view-catalog">Мираж
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </swiper-slide>
                        <swiper-slide class="wallpaper-slider__slide">
                            <div class="wallpaper-slider__image">
                                <img src="icon/wallpaper-slider/3.png" alt="">
                            </div>
                            <a class="view-catalog">Мираж
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </swiper-slide>
                        <swiper-slide class="wallpaper-slider__slide">
                            <div class="wallpaper-slider__image">
                                <img src="icon/wallpaper-slider/4.png" alt="">
                            </div>
                            <a class="view-catalog">Мираж
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </swiper-slide>
                        <swiper-slide class="wallpaper-slider__slide">
                            <div class="wallpaper-slider__image">
                                <img src="icon/wallpaper-slider/5.png" alt="">
                            </div>
                            <a class="view-catalog">Мираж
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </swiper-slide>
                        <swiper-slide class="wallpaper-slider__slide">
                            <div class="wallpaper-slider__image">
                                <img src="icon/wallpaper-slider/6.png" alt="">
                            </div>
                            <a class="view-catalog">Мираж
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </swiper-slide>
                        <swiper-slide class="wallpaper-slider__slide">
                            <div class="wallpaper-slider__image">
                                <img src="icon/wallpaper-slider/7.png" alt="">
                            </div>
                            <a class="view-catalog">Мираж
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </swiper-slide>
                        <swiper-slide class="wallpaper-slider__slide">
                            <div class="wallpaper-slider__image">
                                <img src="icon/wallpaper-slider/8.png" alt="">
                            </div>
                            <a class="view-catalog">Мираж
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </swiper-slide>
                </swiper>
                <div ref="prev" class="swiper-button-prev wallpaper-slider__button-prev wallpaper-slider__button"></div>
                <div ref="next" class="swiper-button-next wallpaper-slider__button-next wallpaper-slider__button"></div>
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

import { ref } from 'vue';
import {Navigation, Pagination, Scrollbar, A11y} from 'swiper';
import {Swiper, SwiperSlide} from 'swiper/vue';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';

export default {
    name: "ProductSlider",

    data() {
        return {
            products: [],
            swiperSlides: 1.4,
            swiperSpaceBetween: 20,
        }
    },


    components: {
        Swiper,
        SwiperSlide,
    },

    setup() {
        /*const swiper = useSwiper();
        const onSwiper = (swiper) => {
            console.log(swiper);
        };
        const onSlideChange = () => {
            console.log('slide change');
        };*/
        const prev = ref(null);
        const next = ref(null);

        return {
            /*swiper,
            onSwiper,
            onSlideChange,*/
            modules: [Navigation],
            prev,
            next,
        };
    },


    mounted() {
        //this.initSwiper();
        this.getProducts();
        this.setSliderParams();
    },

    methods: {
        setSliderParams() {
            const windowWidth = window.innerWidth;
            if (windowWidth >= 993) {
                this.swiperSlides = 4;
                this.swiperSpaceBetween = 15;
            } else if (windowWidth >= 769) {
                this.swiperSlides = 3;
                this.swiperSpaceBetween = 15;
            } else if (windowWidth >= 577) {
                this.swiperSlides = 2.4;
                this.swiperSpaceBetween = 20;
            } else if (windowWidth >= 320) {
                this.swiperSlides = 1.4;
                this.swiperSpaceBetween = 20;
            }
        },

        // инициализация swiper без vue
        /*initSwiper() {
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
        },*/

        getProducts() {
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