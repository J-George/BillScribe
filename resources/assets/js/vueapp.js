import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import App from "./components/App";
import Welcome from "./components/Welcome";
import VueLogin from "./components/VueLogin";
import VueRegister from "./components/VueRegister";

import { library } from "@fortawesome/fontawesome-svg-core";
import {
    faMobileAlt,
    faMapMarkedAlt,
    faUserTie
} from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

library.add(faMobileAlt, faMapMarkedAlt, faUserTie);

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/home",
            name: "welcome",
            component: Welcome,
            children: [
                {
                    path: "",
                    component: Welcome
                }
            ],
            props: {}
        },
        {
            path: "/login",
            name: "login",
            component: VueLogin,
            props: {
                title: "Login Page"
            }
        },
        {
            path: "/register",
            name: "register",
            component: VueRegister,
            props: {
                title: "Register"
            }
        }
    ]
});
const app = new Vue({
    el: "#app",
    components: { App },
    router
});
