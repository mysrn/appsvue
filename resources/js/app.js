require('./bootstrap');

window.Vue = require('vue').default;
import Vue from "vue";
import VueRouter from "vue-router";
import routes from './routes';

Vue.config.productionTip = false;

Vue.use(VueRouter);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const router = new VueRouter({
    mode: 'history',
    routes
})

const app = new Vue({
    el: '#app',
    data(){
        return{
            name: 'Test'
        }
    }, 
    router
});
