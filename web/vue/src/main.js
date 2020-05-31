import Vue from 'vue';
import App from './App.vue';

import router from './common/router';

new Vue({
    router,
    render: h => h(App),
}).$mount('#app');
