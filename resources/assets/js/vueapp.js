import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import App from "./components/App";
import Welcome from "./components/Welcome";
import VueLogin from "./components/VueLogin";
import VueRegister from "./components/VueRegister";
import Dashboard from "./components/Dashboard";

import { library } from "@fortawesome/fontawesome-svg-core";
import {
    faMobileAlt,
    faMapMarkedAlt,
    faUserTie,
    faArrowCircleLeft
} from "@fortawesome/free-solid-svg-icons";

library.add(faMobileAlt, faMapMarkedAlt, faUserTie, faArrowCircleLeft);

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/home",
            name: "welcome",
            component: Welcome,
            props: {}
        },
        {
            path: "/",
            name: "home",
            component: Welcome,
        },
        {
            path: "/login",
            name: "login",
            component: VueLogin,
        },
        {
            path: "/register",
            name: "register",
            component: VueRegister,
        },
        {
            path: "/dashboard",
            name: "dashboard",
            component: Dashboard,
        }
    ]
});
const app = new Vue({
    el: "#app",
    components: { App },
    router
});
