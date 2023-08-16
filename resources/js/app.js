/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue';
import VueRouter from 'vue-router';
import DashboardComponent from "./components/DashboardComponent.vue";
import Users from "./components/Users.vue";
import MainPage from "./components/MainPage.vue";
import Header from "./components/Header.vue";
import BankProducts from "./components/BankProducts.vue";
import Cards from "./components/Cards.vue";

require('./bootstrap');

window.Vue = require('vue');
import vueProgressBar from 'vue-progressbar';
import moment from 'moment';
import {Form} from 'vform';
import swal from 'sweetalert2'


window.swal = swal;
window.Form = Form;
import {
    Button,
    HasError,
    AlertError,
    AlertErrors,
    AlertSuccess
} from 'vform/src/components/bootstrap4'

const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
})
window.toast = toast;

Vue.component(Button.name, Button)
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
Vue.component(AlertErrors.name, AlertErrors)
Vue.component(AlertSuccess.name, AlertSuccess)


Vue.use(VueRouter)

Vue.use(vueProgressBar, {
    color: 'rgb(143,255,199)',
    failedColor: 'red',
    height: '3px',
})

const router = new VueRouter({
    mode: 'history',
    routes: [
        {path: '/home', component: DashboardComponent},
        {path: '/users', component: Users},
        {path: '/mainPage', component:MainPage},
        {path: '/header', component:Header},
        {path: '/bankproducts', component:BankProducts},
        {path: '/carts', component:Cards},
    ]
});

Vue.filter('upText', function(text){
    return text.charAt(0).toUpperCase() + text.slice(1)
});

Vue.filter('myDate', function(created){
    return moment(created).format('MMMM Do YYYY');
});

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */



Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('Dashboard', require('./components/DashboardComponent.vue'));
Vue.component('users', require('./components/Users.vue'));
Vue.component('MainPage', require('./components/MainPage.vue'));
Vue.component('Header', require('./components/Header.vue'));
Vue.component('BankProducts', require('./components/BankProducts.vue'));
Vue.component('Carts', require('./components/Cards.vue'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router: router
});
