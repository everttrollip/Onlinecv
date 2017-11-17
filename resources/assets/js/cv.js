import Vue from 'vue';
import slider from '../../../public/adminlte/plugins/bootstrap-slider/bootstrap-slider.js'
import CvHeader from './components/CvHeader.vue'
import CvBasicDetails from './components/CvBasicDetails.vue'
import CvLocation from './components/CvLocation.vue'
import CvExperience from './components/CvExperience.vue'

import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'

Vue.use(ElementUI)

new Vue({
    el: '#cv',
    components: {
        CvHeader,
        CvBasicDetails,
        CvLocation,
        CvExperience,
        slider
    }
})