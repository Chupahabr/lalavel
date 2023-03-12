//window.Vue = require('vue').default;

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import { createApp } from 'vue';
import router from './router';
import axios from 'axios'
import VueAxios from 'vue-axios';

const Vue = createApp({});

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('v-header', require('./components/Header.vue').default);
Vue.component('v-footer', require('./components/Footer.vue').default);

Vue.use(router);
Vue.use(VueAxios, axios);

Vue.mount('#app');


import { Autoplay, Navigation, Pagination } from "swiper";
import Swiper from "swiper";
Swiper.use([Autoplay, Navigation, Pagination]);

require('./bootstrap');
//import {ShrinkText} from './blocks/ShrinkText/script';
//import {Filter} from './blocks/Filter/script';

//import './blocks/menu-button/script';
//import './blocks/menu/script';
//import './blocks/search-icon/script';
//import './blocks/button-up/script';
//import './blocks/main-slider/script';
//import './blocks/gallery/script';
//import './blocks/wallpaper-slider/script';
//import './blocks/tile-catalog/script';
//import './blocks/about-us/script';
//import './blocks/paint/script';
//import './blocks/wallpaper-gallery/script';
//import './blocks/advantages/script';
//import './blocks/presentation/script';
//import './blocks/header/script';