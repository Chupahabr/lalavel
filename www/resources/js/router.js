//import Vue from 'vue/index';
//import vueRouter from 'vue-router/index';

//const Vue = require("vue");
//const vueRouter = require("vue-router");

import {createWebHistory, createRouter} from "vue-router";

import Index from "./views/Index";
import Contact from "./views/Index";

const routes = [
    {
        path: '/',
        name: "Index",
        component: Index
    },
    {
        path: '/contact',
        name: "Contact",
        component: Contact
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;