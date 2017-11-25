import Vue from 'vue';
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'
Vue.use(ElementUI)

require('./bootstrap');

// HEADER
import CvHeader from './components/cv/CvHeader.vue'

// INTRODUCTION
// Left-hand column components
import CvBasicDetails from './components/cv/CvBasicDetails.vue'
import CvLocation from './components/cv/CvLocation.vue'
import CvEngagement from './components/cv/CvEngagement.vue'
import CvInterests from './components/cv/CvInterests.vue'

// Right-hand column components
import CvSummary from './components/cv/CvSummary.vue'
import CvExperience from './components/cv/CvExperience.vue'
import CvVocation from './components/cv/CvVocation.vue'
import CvPostSchool from './components/cv/CvPostSchool.vue'
import CvCareerInterests from './components/cv/CvCareerInterests.vue'

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
        CvEngagement,
        CvInterests,

        // Right-hand column components
        CvSummary,
        CvExperience,
        CvVocation,
        CvPostSchool,
        CvCareerInterests

        // ACHIEVEMENTS
    }
})