import Vue from 'vue';
import CvHeader from './components/CvHeader.vue'
import CvBasicDetails from './components/CvBasicDetails.vue'
import CvLocation from './components/CvLocation.vue'

new Vue({
    el: '#cv',

    components: {
        CvHeader,
        CvBasicDetails,
        CvLocation
    }
})