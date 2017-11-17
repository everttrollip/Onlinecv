import Vue from 'vue';
import slider from '../../../public/adminlte/plugins/bootstrap-slider/bootstrap-slider'
import CvHeader from './components/CvHeader.vue'
import CvBasicDetails from './components/CvBasicDetails.vue'
import CvLocation from './components/CvLocation.vue'
import CvExperience from './components/CvExperience.vue'

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