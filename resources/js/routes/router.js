import VueRouter from "vue-router";
import Home from "../components/Home";
import Register from "../components/Register";

export default new VueRouter({
    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/register',
            component: Register
        }
    ],
    mode: 'history'
});
