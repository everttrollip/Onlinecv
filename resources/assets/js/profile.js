require('./bootstrap');
import vueResource from 'vue-resource';
import VueFormWizard from 'vue-form-wizard'
import ElementUI from 'element-ui'

import 'vue-form-wizard/dist/vue-form-wizard.min.css'
import 'element-ui/lib/theme-chalk/index.css'

window.Vue = require('vue');

Vue.use(vueResource);
Vue.use(VueFormWizard)
Vue.use(ElementUI)

Vue.component('studentprofile', require('./components/StudentProfile.vue'));

const app = new Vue({
    el: '#profile',
});

