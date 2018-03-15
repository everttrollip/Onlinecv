require('./bootstrap');

import Vue from 'vue';
import ElementUI from 'element-ui'
import vSelect from 'vue-select'
import Vuelidate from 'vuelidate'

import 'element-ui/lib/theme-chalk/index.css'

window.Vue = require('vue');

Vue.use(ElementUI)
Vue.use(Vuelidate)
Vue.component('v-select', vSelect)

// HEADER
Vue.component('cv-header', require('./components/cv/CvHeader.vue'));

// INTRODUCTION
// Left-hand column components
Vue.component('cv-location', require('./components/cv/CvLocation.vue'));
Vue.component('cv-engagement', require('./components/cv/CvEngagement.vue'));
Vue.component('cv-interests', require('./components/cv/CvInterests.vue'));

// Right-hand column components
Vue.component('cv-summary', require('./components/cv/CvSummary.vue'));
Vue.component('cv-experience', require('./components/cv/CvExperience.vue'));
Vue.component('cv-vocation', require('./components/cv/CvVocation.vue'));
Vue.component('cv-post-school', require('./components/cv/CvPostSchool.vue'));
Vue.component('cv-career-interests', require('./components/cv/CvCareerInterests.vue'));

// ACHIEVEMENTS
Vue.component('cv-achievements', require('./components/cv/CvAchievements.vue'));
Vue.component('cv-edit-achievements', require('./components/cv/CvEditAchievements.vue'));

//ADMIN
Vue.component('admin-tasks-header', require('./components/administrators/HeaderTasks.vue'));
Vue.component('admin-notifications-header', require('./components/administrators/HeaderNotifications.vue'));

//UPLOADS
Vue.component('uploads', require('./components/students/Uploads.vue'));

//CV PUBLIC
Vue.component('view-student-cv', require('./components/cv/cvViewStudentCV.vue'));

const app = new Vue({
    el: '#cv',
    data() {
        return {
            student: {},
        }
    },
    methods: {
        getStudent() {
            axios.get('/student').then((result)=>{
                this.student = result.data;
            });
        }
    },
    mounted() {
        this.getStudent();
    }
})