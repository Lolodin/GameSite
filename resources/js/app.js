require('./bootstrap');
window.Vue = require('vue');
Vue.component('main-component', require('./components/MainComponent.vue').default);
import VueRouter from 'vue-router';
import routers from './router.js'
window.Vue.use(VueRouter)
const app = new Vue({
   router : new VueRouter(routers),
   el: '#app',
});

