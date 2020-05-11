require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import store from "./store";
import routes from './router';


Vue.component('navigation', require('./components/Navigation.vue').default);
Vue.component('app-header', require('./components/Header.vue').default);
Vue.component('home', require('./components/pages/Home.vue').default);
Vue.component('app-main', require('./components/pages/AppMain.vue').default);
Vue.component('hooks', require('./components/pages/basic/hooks.vue').default);
Vue.component('document', require('./components/pages/Document.vue').default);

const app = new Vue({
    el: '#app',
    store,
    router: new VueRouter(routes),
});
