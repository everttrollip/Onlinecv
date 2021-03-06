require('./bootstrap');
import vueResource from 'vue-resource';
import VueFormWizard from 'vue-form-wizard'
import ElementUI from 'element-ui'
import vSelect from 'vue-select'
import Vuelidate from 'vuelidate'

import 'vue-form-wizard/dist/vue-form-wizard.min.css'
import 'element-ui/lib/theme-chalk/index.css'

window.Vue = require('vue');

Vue.use(Vuelidate)
Vue.use(vueResource)
Vue.use(VueFormWizard)
Vue.use(ElementUI)

Vue.component('v-select', vSelect)

Vue.component('profile-header', require('./components/profile/ProfileHeader.vue'));
Vue.component('studentprofile', require('./components/profile/StudentProfile.vue'));

const app = new Vue({
    el: '#profile',
});


