require('./bootstrap');
import Vue from 'vue';
import ElementUI from 'element-ui'

import 'element-ui/lib/theme-chalk/index.css'

window.Vue = require('vue');

Vue.use(ElementUI)

// HEADER
import DashboardHeader from './components/dashboard/DashboardHeader.vue'

// MAIN CONTENT
import DashboardGettingStarted from './components/dashboard/DashboardGettingStarted.vue'

new Vue({
    el: '#dashboard',
    components: {
        // HEADER
        DashboardHeader,

        // MAIN CONTENT
        DashboardGettingStarted
    }
});
