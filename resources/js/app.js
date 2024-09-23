import "./bootstrap";

import { createApp } from "vue/dist/vue.esm-bundler.js";

import routes from "./router/route";
import { createRouter, createWebHistory  } from "vue-router";

import App from "./app.vue";


const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});


const app = createApp(App);
app.use(router).mount("#app");
