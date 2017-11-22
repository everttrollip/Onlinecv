import Vue from 'vue';
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'
Vue.use(ElementUI)

// HEADER
import CvHeader from './components/cv/CvHeader.vue'

// INTRODUCTION
// Left-hand column components
import CvBasicDetails from './components/cv/CvBasicDetails.vue'
import CvLocation from './components/cv/CvLocation.vue'

// Right-hand column components
import CvSummary from './components/cv/CvSummary.vue'
import CvExperience from './components/cv/CvExperience.vue'
import CvVocation from './components/cv/CvVocation.vue'

// ACHIEVEMENTS

new Vue({
    el: '#cv',
    components: {
        // HEADER
        CvHeader,

        // INTRODUCTION
        // Left-hand column components
        CvBasicDetails,
        CvLocation,

        // Right-hand column components
        CvSummary,
        CvExperience,
        CvVocation

        // ACHIEVEMENTS
    }
})