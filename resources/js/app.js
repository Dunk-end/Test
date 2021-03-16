require('./bootstrap');

import Vue from "vue";
import VueRouter from "vue-router";
import router from "./routes/router";
import App from "./components/App";
import Header from "./components/Header";
import Footer from "./components/Footer";

Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    render: h => h(App),
    router
});


// new Vue({
//     el: '#test',
//     data: {
//         url: '',
//         cleanUrl: '',
//         count: 0,
//     },
//
//     methods: {
//         cleanerUrl: function () {
//             this.cleanUrl = this.url.replace(/^https?:\/\//, '')
//                 .replace(/\/$/, '');
//         },
//
//         countUp: function () {
//             this.count += 1
//         },
//
//         countDown: function () {
//             this.count -= 1
//         }
//     }
// });
