require('./bootstrap');
import Vue from 'vue';
import ElementUI from 'element-ui'
import VueFormWizard from 'vue-form-wizard'

import 'vue-form-wizard/dist/vue-form-wizard.min.css'
import 'element-ui/lib/theme-chalk/index.css'

window.Vue = require('vue');

Vue.use(ElementUI)
Vue.use(VueFormWizard)

Vue.component('dashboard-header', require('./components/dashboard/DashboardHeader.vue'));
Vue.component('dashboard-getting-started', require('./components/dashboard/DashboardGettingStarted.vue'));

new Vue({
    el: '#dashboard',
});
