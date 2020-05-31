import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

// GLOBAL
import LandingPage from '@/components/LandingPage';

const vueRouter = new VueRouter({
    mode: 'history',
    routes: [
        // GLOBAL
        {path: '/', component: LandingPage, name: 'landingPage', meta: {noAuthRequired: true}}
    ]
});

export default vueRouter;
