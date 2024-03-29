/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue';
import VueRouter from 'vue-router';
import DashboardComponent from "./components/DashboardComponent.vue";
import Users from "./components/Users.vue";
import Header from "./components/Header.vue";
import BankProducts from "./components/BankProducts.vue";
import Cards from "./components/Cards.vue";
import CurrentOffers from "./components/CurrentOffers.vue";
import Calculators from "./components/Calculators.vue";
import BankServices from "./components/BankServices.vue";
import DepositCards from "./components/DepositCards.vue";
import BankLoans from "./components/BankLoans.vue";
import BankCards from "./components/BankCards.vue";
import RemittancesCards from "./components/RemittancesCards.vue";
import LoansCalculatorForm from "./components/LoansCalculatorForm.vue";
import DepositCalculatorForm from "./components/DepositCalculatorForm.vue";
import OnlineServices from "./components/OnlineServices.vue";
import News from "./components/News.vue";
import Feedback from "./components/Feedback.vue";
import Work from "./components/Work.vue";
import Vacancy from "./components/Vacancy.vue";
import ImageHeader from "./components/ImageHeader.vue";

require('./bootstrap');

window.Vue = require('vue');
import vueProgressBar from 'vue-progressbar';
import moment from 'moment';
import {Form} from 'vform';
import swal from 'sweetalert2'


window.swal = swal;
window.Form = Form;
window.Fire = new Vue();
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
        {path: '/header', component:Header},
        {path: '/bankproducts', component:BankProducts},
        {path: '/carts', component:Cards},
        {path: '/currentoffers', component:CurrentOffers},
        {path: '/calculators', component:Calculators},
        {path: '/bankservices', component:BankServices},
        {path: '/depositcards', component:DepositCards},
        {path: '/bankloans', component:BankLoans},
        {path: '/bankcards', component:BankCards},
        {path: '/remittancescards', component:RemittancesCards},
        {path: '/loanscalculatorform', component:LoansCalculatorForm},
        {path: '/depositcalculatorform', component:DepositCalculatorForm},
        {path: '/onlineservices', component:OnlineServices},
        {path: '/news', component:News},
        {path: '/feedback', component:Feedback},
        {path: '/work', component:Work},
        {path: '/vacancy', component:Vacancy},
        {path: '/imageheader', component:ImageHeader},
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
Vue.component('Header', require('./components/Header.vue'));
Vue.component('BankProducts', require('./components/BankProducts.vue'));
Vue.component('Carts', require('./components/Cards.vue'));
Vue.component('CurrentOffers', require('./components/CurrentOffers.vue'));
Vue.component('calculators', require('./components/Calculators.vue'));
Vue.component('BankServices', require('./components/BankServices.vue'));
Vue.component('DepositCards', require('./components/DepositCards.vue'));
Vue.component('BankLoans', require('./components/BankLoans.vue'));
Vue.component('BankCards', require('./components/BankCards.vue'));
Vue.component('RemittancesCards', require('./components/RemittancesCards.vue'));
Vue.component('LoansCalculatorForm', require('./components/LoansCalculatorForm.vue'));
Vue.component('DepositCalculatorForm', require('./components/DepositCalculatorForm.vue'));
Vue.component('OnlineServices', require('./components/OnlineServices.vue'));
Vue.component('News', require('./components/News.vue'));
Vue.component('Feedback', require('./components/Feedback.vue'));
Vue.component('Work', require('./components/Work.vue'));
Vue.component('Vacancy', require('./components/Vacancy.vue'));
Vue.component('ImageHeader', require('./components/ImageHeader.vue'));


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router: router
});
