
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import vueResource from 'vue-resource';

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(vueResource);

Vue.component('example', require('./components/Example.vue'));
Vue.component('register', require('./components/Register.vue'));

//ADMINISTRATOR COMPONENTS
Vue.component('admin-profile', require('./components/profile/AdminProfile.vue'));
Vue.component('view-vouchers', require('./components/vouchers/ViewVouchers.vue'));
Vue.component('administrator-students', require('./components/students/AdministratorStudents.vue'));

//MESSAGES
Vue.component('nav-messages', require('./components/dashboard/NavbarMessages.vue'));
Vue.component('inbox', require('./components/messages/Inbox.vue'));

//CONTACT US
Vue.component('inbox', require('./components/messages/ContactUs.vue'));

const app = new Vue({
    el: '#app',
});


