import Home from '../components/pages/Home.vue';
import About from '../components/pages/About.vue';
import AppMain from '../components/pages/AppMain.vue';
import hooks from '../components/pages/basic/hooks.vue';
import methods from '../components/pages/basic/methods.vue';
import Document from '../components/pages/Document.vue';

export default {
    mode: 'history',

    routes: [
        {
            path: '/dashboard',
            name: 'dashboard',
            component: AppMain,
        },
        {
            path: '/',
            name: 'home',
            component: Home,
        },
        {
            path: '/about',
            name: 'about',
            component: About,
        },

        {
            path: '/document',
            name: 'document',
            component: Document,
        },

        // hooks practice
        {
            path: '/hooks',
            name: 'hooks',
            component: hooks,
        },

        // methods practice
        {
            path: '/methods',
            name: 'methods',
            component: methods,
        }
    ]
}