import VueRouter from "vue-router";
import Home from "../components/Home";
import Register from "../components/Register";
import Login from "../components/Login";

export default new VueRouter({
    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/register',
            component: Register
        },
        {
            path: '/login',
            component: Login
        }
    ],
    mode: 'history'
});
