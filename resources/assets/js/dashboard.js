require('./bootstrap'); // Has axios
import vueResource from 'vue-resource';

window.Vue = require('vue');
Vue.use(vueResource);

// HEADER
import DashboardHeader from './components/dashboard/DashboardHeader.vue'

new Vue({
    el: '#dashboard',
    components: {
        // HEADER
        DashboardHeader
    }
});
