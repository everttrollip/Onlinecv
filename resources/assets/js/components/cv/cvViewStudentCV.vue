
<template>
<div>
<!-- CV Header -->
<div style="margin-top:15px">
    <div v-if="activation != null && activation.length != 0 && user['role'] == 'administrator'" style="text-align:right">
        <button class="btn btn-success" v-on:click="activateCV()">Activate CV</button>
    </div>
        <div class="box" style="margin-top:15px">
            <div class="box-body">
                <div class="student-image col-md-2 col-xs-12 col-sm-12" id="imageHolder">
                    <img v-if="image != '/storage/images/student/'" class="thumbnail" :src="image">
                    <img v-else class="thumbnail" :src="noImage">
                </div>

                <div class="col-md-2 col-xs-12" id="nameHolder">
                    <div class="student-name">
                        <span class="firstname">{{student.firstname}}</span>
                        <span class="surname">{{student.lastname}}</span>
                    </div>
                </div>

                <div class="student-basic-details col-md-4 col-xs-12">
                            <div class="col-md-12 col-xs-12">
                            <span class="large-font" >{{student.dob}}</span>

                            <div class="flex-container-row space-between">
                                <label>Birthdate</label>
                            </div>
                        </div>

                        <div class="col-md-12 col-xs-12">
                            <span class="large-font">{{student.province}}</span>
                            <div class="flex-container-row space-between">
                                <label class="flex-container-row">Province</label>
                            </div>
                        </div>

                    <div class="col-md-12 col-xs-12">
                            <span  class="large-font">English, Afrikaans</span>
                            <div class="flex-container-row space-between">
                                <label>Languages spoken</label>
                            </div>
                        </div>
                    </div>
            <div class="student-contact-details col-md-4 col-xs-12" v-if="!contactPermission">
                    <div class="info-box email col-md-12 col-xs-12">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i>
                        </span>

                        <div class="info-box-content" id="contactBox">
                            <span class="info-box-text"></span>
                        </div>
                    </div>

                    <div class="info-box phone col-md-12 col-xs-12">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-phone"></i>
                        </span>

                        <div class="info-box-content" id="contactBox">
                            <span class="info-box-text">}</span>
                        </div>
                    </div>
                    <a href="javascript:;" class="unlockText">Get student contact details</a>
                </div>
                <div class="student-contact-details col-md-4 col-xs-12" v-else>
                    <div class="info-box email col-md-12 col-xs-12">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">{{this.student.email}}</span>
                        </div>
                    </div>

                    <div class="info-box phone col-md-12 col-xs-12">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-phone"></i>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">{{this.student.contact}}</span>
                        </div>
                    </div>
                    <a href="javascript:;" v-on:click="sendContactRequest(student)" class="unlockText">Get student contact details</a>
                </div>
            </div>
        </div>
    </div>

    <!-- CV Header Ends-->
    <!-- Introduction -->
    <div class="introduction">
       <div class="col-md-6 col-xs-12">
            <!-- Location -->
            <cv-location :student="student"></cv-location>
            <!-- Location Ends -->

            <!-- Engagement -->
           <view-engagement :data="engagementdata"></view-engagement>
            <!-- Engagement end -->

            <!-- Interests -->
            <div class="box">
                <div class="box-header with-border">
                    <i class="fa fa-check"></i>
                    <h1 class="box-title large-font">General Interests</h1>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body flex-container-row">
                    <div class="box-text" v-for="(interest, index) in generalInterests" :key="index">
                        <span v-if="index == generalInterests.length - 1">{{ interest }}</span>
                        <span v-if="index != generalInterests.length - 1">{{ interest }},&nbsp;</span>
                    </div>
                </div>
            </div>
            <!-- Interests End -->
        </div>
         <div class="col-md-6 col-xs-12">
             <!-- Summary -->
            <div class="box">
                <div class="box-header with-border">
                    <h1 class="flexbox-container-row box-title large-font">
                        <div>
                            <span>I am</span>
                            <span class="primary-text-color">Grade {{ this.student.grade }}</span>
                        </div>
                    </h1>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body flex-container-row">
                    <div class="tagline-text" >{{this.student.tagline}}</div>
                </div>
            </div>
             <!-- Summary -->

             <!-- Experience Starts -->
            <view-experience :student="student"></view-experience>
             <!-- Experience Ends -->

             <!-- Vocation Starts -->
            <view-vocation></view-vocation>
             <!-- -->

             <!-- Post School Start -->
            <view-post-school :student="student" :studyLocations="preferredLocationsForStudy"></view-post-school>
            <!-- Post School Ends -->

            <!-- Career Interests Starts-->
            <div class="box">
                <div class="box-header with-border">
                    <i class="fa fa-map-signs"></i>
                    <div class="box-title large-font">Career Interests</div>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="full-width box-title large-font primary-text-color" v-for="item in careerInterests" :key="item" >
                        {{item}}
                    </div>
                </div>
            </div>
            <!-- Career Interests Ends-->
        </div>
    </div>
    <!-- Introduction Ends -->
        <div class="achievements col-md-12 col-xs-12">
            <view-achievements :achievements="achievements"></view-achievements>
        </div>
    </div>
</template>
<script>
import CvLocation from '../cv/CvLocation.vue';
import ViewExperience from '../cv/view/ViewExperience.vue';
import ViewEngagement from '../cv/view/ViewEngagement.vue';
import ViewVocation from '../cv/view/ViewVocation.vue';
import ViewPostSchool from '../cv/view/ViewPostSchool.vue';
import ViewAchievements from '../cv/view/ViewAchievements.vue';

export default {
 created(){},
 components: {
     CvLocation,
     ViewExperience,
     ViewVocation,
     ViewPostSchool,
     ViewAchievements,
     ViewEngagement
 },
 mounted(){
    this.student = JSON.parse(this.studentdata);
    this.user = JSON.parse(this.userdata);
    this.image = '/storage/images/student/'+ this.student['avatar'];
    this.generalInterests = this.student['general_interests'].split(",");
    this.preferredLocationsForStudy = this.student['preferred_study_locations'].split(",");
    this.careerInterests = this.student['career_interests'].split(',');
    this.engagementdata.push(this.student['arts']);
    this.engagementdata.push(this.student['sports']);
    this.engagementdata.push(this.student['events']);
    this.getStudentAchievements();
    if(this.user['role'] == 'administrator'){
        this.checkIfActivated();
    }

 },
 props:['userdata', 'studentdata'],
 data(){
     return{
        imageBase: '/storage/images/student/',
        noImage: 'http://www.microhub.co.za/wp-content/uploads/2018/02/no-image.jpeg',
        student:[],
        user:[],
        image:'/images/student/',
        engagementdata:[],
        generalInterests:[],
        preferredLocationsForStudy:[],
        careerInterests: [],
        achievements:[],
        locked:true,
        contactPermission:false,
        activation: '',
        activateLoading: true,
     }
 },
 methods:{
    getStudentAchievements() {
        axios.get('/student/reviewed-achievements-by-id/' + this.student['student_id']).then((result)=>{
            this.achievements = result.data;
        });
    },
    checkIfActivated(){
        axios.get('/check-if-cv-needs-activation/' + this.student['student_id']).then((response)=>{
            this.activation = response.data['activation'];
        });
    },
    sendContactRequest(student){
        axios.get('/send-contact-request/' + student.student_id).then((response)=>{
            if(response.data['success']){
                bootbox.alert({
                    title: 'Success',
                    message:'Your request to contact ' + student.firstname + ' has been successfully sent.'
                });
            }else if(response.data['has_credits']){
                bootbox.alert({
                    title: 'Oops!',
                    message:'Something went wrong. Your request to contact ' + student.firstname + 'could not be sent. Please try again.'
                });
            }else{
                 bootbox.alert({
                    title: 'Insuffucient Credits!',
                    message:'You do not have suficient credits to send a contact request. Your request to contact ' + student.firstname + 'could not be sent. Please buy some credits and try again'
                });
            }
        });
    },
    activateCV(){
        var vm  = this;
        vm.activateLoading = true;
        axios.get('/mark-cv-activated/' + this.student['student_id']).then((response)=>{
            if(response.data['success']){
                bootbox.alert({
                    title:'Success',
                    message : 'You have successfully activated ' + this.student.firstname + '\'s CV',
                    callback(result){
                        vm.checkIfActivated();
                    }
                });
            }else{
                bootbox.alert({
                    title: 'Oops!',
                    message:'Something went wrong. We could not activate the CV at this time. Please try again.'
                });
            }
        }).catch((error)=>{
             bootbox.alert({
                    title: 'Oops!',
                    message:'Something went wrong. We could not activate the CV at this time. Please try again.'
                });
        });
    }
 }
}
</script>
<style lang="scss" scoped>
    @import '../../../sass/mixins';
    @import '../../../sass/variables';

    #contactBox{
         filter: blur(6px);
    }

    #contactBox > .unlockText{

    }
    .student-image {
        // border: 2px solid blue;
        margin-right: 10px;
        .thumbnail {
            align-self: center;
            display: inline-block;
            max-height: 140px;
            margin-bottom: 0px;
        }
    }

    .student-name {
        // border: 2px solid blue;
        @include flexbox-container(column, wrap, flex-start);

        .firstname,
        .surname {
            font: {
                size: 2.5em;
                weight: bold;
            }
        }

        .firstname {
            color: $brand-primary;
        }

        .surname {
            color: $brand-info-dark;
        }
    }

    .student-basic-details {
        // border: 2px solid blue;
        @include flexbox-container(column, wrap, flex-start);
        flex-grow: 1;
        padding: 0 80px;

        & > .flex-container-row {
            // border: 2px solid red;
            @include flexbox-container(row, wrap, space-between);
            align-items: flex-start;
            & > .flex-container-column {
                // border: 2px solid green;
                align-self: flex-start;
                padding-top: 10px;
            }
        }
    }

    .student-contact-details {
        // border: 2px solid blue;
        @include flexbox-container(row, wrap, center);
        width: 25%;

        .info-box {
            // border: 2px solid red;
            @include flexbox-container(row, wrap, flex-start);
            align-self: center;
            min-height: 30px;
            .info-box-icon {
                // border: 2px solid green;
                @include flexbox-container(column, wrap, center);
                line-height: 60px;
                width: 60px;
                height: 50px;
            }

            .info-box-content {
                // border: 2px solid green;
                @include flexbox-container(row, wrap, space-between);
                // width: 100%;
                flex-grow: 1;
                margin-left: 0;
                .info-box-text {
                    align-self: center;
                    // border: 2px solid red;
                    font: {
                        size: 1.5em;
                    }
                }
            }
        }
    }

    .flex-container-row {
        @include flexbox-container(row, wrap, flex-start);
        align-items: center;

        & > span {
            // border: 2px solid green;
            width: 40%;
        }

        & > i {
            // border: 2px solid blue;
            margin-left: auto;
        }

        & > div {
            // border: 2px solid red;
            width: 40%;
        }
    }

    .flex-container-column {
        @include flexbox-container(column, wrap, space-between);
    }

.unlockText{
    font-size: 18px;
}
</style>
