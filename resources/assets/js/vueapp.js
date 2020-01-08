import Vue from "vue";
import VueRouter from "vue-router";

window.eventBus = new Vue();

Vue.use(VueRouter);

import App from "./components/App";
import Welcome from "./pages/Welcome";
import VueLogin from "./pages/VueLogin";
import VueRegister from "./pages/VueRegister";
import Dashboard from "./pages/Dashboard";

import { library } from "@fortawesome/fontawesome-svg-core";
import {
    faMobileAlt,
    faMapMarkedAlt,
    faUserTie,
    faTools,
    faPlus,
    faList,
    faTh,
    faCaretDown,
    faArrowCircleLeft,
    faUserCog,
    faSignOutAlt,
    faEdit,
    faTrashAlt
} from "@fortawesome/free-solid-svg-icons";

library.add(faMobileAlt, faMapMarkedAlt, faUserTie, faTools, faPlus,
     faList, faTh, faCaretDown, faArrowCircleLeft, faUserCog,
     faTrashAlt, faEdit, faSignOutAlt);

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
