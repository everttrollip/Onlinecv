<template>
<div class="col-md-12 col-xs-12">
    <form-wizard @on-complete="submit"
                :start-index.sync="activeIndex"
                shape="circle"
                color="#3498db"
                title=""
                subtitle="">
        <wizard-step
            slot-scope="props"
            slot="step"
            :tab="props.tab"
            :transition="props.transition"
            :index="props.index">
            <div slot="active-step" style="display: flex; justify-content:center; align-items: center;">
                <i class="fa fa-user" aria-hidden="true" v-if="props.index == 0"></i>
                <i class="fa fa-cogs" aria-hidden="true" v-if="props.index == 1"></i>
                <lottie v-if="props.index == 2"
                :options="defaultOptions"
                :height="65"
                :width="65"/>
            </div>
        </wizard-step>

        <tab-content title="Profile"
                    icon="fa fa-user">

            <div class="body-of-tab profile-step col-md-12 col-xs-12">
                <h2>Update your Profile!</h2>
                <div class="thumbnail-image" v-on:mouseover="profileStepMouseOver" v-on:mouseleave="profileStepMouseLeave">
                    <img class="thumbnail blur" v-bind:class="{'blur-heavy': profileUpdated}" :src="profileImage">
                        <div class="submit">
                            <a type="button" :href="profilehref" v-show="!profileUpdated" class="btn btn-primary navigate">
                                Update now!
                            </a>
                            <a type="button" :href="profilehref" v-show="profileUpdated" class="btn btn-primary navigate">
                                Update
                            </a>
                        </div>
                    <i id="check" class="fa fa-check-circle" aria-hidden="true" v-show="profileUpdated"></i>
                </div>
                <h3 v-show="profileUpdated">Great stuff!</h3>
                <h4 v-show="profileUpdated">Your profile was successfully updated. Feel free to update it again at any stage by clicking the update button!</h4>
            </div>

        </tab-content>

        <tab-content class="col-md-12 col-xs-12" title="CV"
                    icon="fa fa-cogs">

            <div class="body-of-tab cv-step col-md-12 col-xs-12">
                <h2>View and Edit your CV!</h2>
                <div class="thumbnail-image col-md-12 col-xs-12" v-on:mouseover="cvStepMouseOver" v-on:mouseleave="cvStepMouseLeave">
                    <img class="thumbnail blur" v-bind:class="{'blur-heavy': cvSubmitted}" :src="cvImage">
                    <div class="edit-submit">
                        <a type="button" :href="cvhref" v-show="!cvSubmitted" class="btn btn-primary ">
                            View/Edit now!
                        </a>
                        <button type="button" v-on:click="submitCV()" v-show="!cvSubmitted" class="btn btn-primary">
                            <i v-show="loading" class="fa fa-spinner fa-spin"></i> Submit
                        </button>
                    </div>
                    <i id="lock" class="fa fa-lock" aria-hidden="true" v-show="cvSubmitted"></i>
                </div>
                <h3 v-show="cvSubmitted">Nice one!</h3>
                <div v-show="cvSubmitted">
                    <h4>Your CV has been successfully submitted to the administrators.</h4>
                    <h4 v-if="cvSubmissionActioned">Status: <span style="color:green">Actioned</span></h4>
                    <h4 v-else>Status: <span style="color:red">Pending</span></h4>
                </div>
            </div>

        </tab-content>

        <tab-content title="That's it!"
                    icon="fa fa-check">
            <div class="body-of-tab col-md-12">
                <h2>That's it! Well done</h2>
                <lottie v-if="activeIndex == 2"
                    :options="defaultOptions"
                    :height="200"
                    :width="200" />
                <h4>Click finish to go to your dashboard view where you will find out more ways to interact with administrators and purchase vouchers for adding more detail to your CV. </h4>
            </div>
        </tab-content>

    </form-wizard>
</div>
</template>

<script>
    import {VueTabs, VTab} from 'vue-nav-tabs'
    import 'vue-nav-tabs/themes/vue-tabs.css'
    import profileImage from '../../../../../public/images/dashboard/Profile.png'
    import cvImage from '../../../../../public/images/dashboard/CV.png'
    import Lottie from 'vue-lottie';
    import animationData from './../../../animation.js'

    const Child = {
        template: '#childarea'
    };

    export default {
        data() {
            return {
                activeIndex: 0,
                defaultOptions: {animationData: animationData, loop:false},
                animationSpeed: 1,

                profileImage: profileImage,
                profileUpdated: false,
                profileStepBlur: false,

                cvImage: cvImage,
                cvSubmitted: false,
                cvStepBlur: false,

                cvhref: '/student/cv',
                profilehref: '/profile/',
                userId: -1,
                loading: false,
                cvSubmissionActioned:false,
            }
        },
        mounted() {
            axios.get('/user').then((result)=>{
                this.userId = result.data.user_id;
                this.profilehref = this.profilehref + this.userId;
                this.profileUpdated = result.data.profile_updated;
                if (this.profileUpdated) {
                    this.profileStepBlur = true;
                }
                this.cvSubmitted = result.data.cv_submitted;
                if(this.cvSubmitted){
                    var vm = this;
                    axios.get('/student/get-my-cv-submission').then((response)=>{
                        vm.cvSubmissionActioned = response.data['actioned'];
                    });
                }
            });
        },
        components: {
            VueTabs,
            VTab,
            appChild: Child,
            Lottie
        },
        methods: {
            profileStepMouseOver() {
                this.profileStepBlur = true;
            },
            profileStepMouseLeave() {
                if (this.profileUpdated) {
                    this.profileStepBlur = true;
                }
                else {
                    this.profileStepBlur = false;
                }
            },
            cvStepMouseOver() {
                this.cvStepBlur = true;
            },
            cvStepMouseLeave() {
                if (this.cvSubmitted) {
                    this.cvStepBlur = true;
                }
                else {
                    this.cvStepBlur = false;
                }
            },
            submitCV() {
                this.loading = true;
                var vm = this;
                axios.get('/student/submit-cv').then((response)=>{
                    if(response.data['success']){
                        vm.cvSubmitted = true;
                    }else{
                        bootbox.alert({
                            title:'Oops!',
                            message:'Something went wrong. We could not submit your CV at this time. Please try again'
                        });
                    }
                }).catch((error)=>{
                    bootbox.alert({
                            title:'Oops!',
                            message:'Something went wrong. We could not submit your CV at this time. Please try again'
                        });
                })
            },
            submit(){
                var url = '/student/cv';
                window.location = url;
            }
        }
    }
</script>

<style lang="scss" scoped>
    @import '../../../sass/variables';
    .tab-content {
        // border: 2px solid blue;
        padding-left: 10px;
        width: 100%;
    }

    .tab-container {
        // border: 2px solid orange;
        height: 100%;
    }

    .body-of-tab {
        // border: 2px solid blue;
        justify-content: center;
        align-items: center;
        text-align:center;
    }

    .profile-step, .cv-step {
        i.fa {
            font-size: 80px;
            position: absolute;
            bottom: 100px;
            right: 45%;
        }
    }

    .thumbnail-image {
        // border: 2px solid red;
        padding-top: 10px;
        position: relative;

        img {
            border: 3px solid $light-border;
            max-width: 800px;
            overflow: hidden;
            padding:auto;
            margin:auto;
        }
    }

    .thumbnail-image:hover {
        img {
            border: 3px solid $light-border;
        }
    }

    .navigate {
        // border: 2px solid green;
        position: absolute;
        bottom: 40px;
        right: 45%;
        margin-left:15px;
    }

    .submit {
        // border: 2px solid green;
        position: absolute;
        bottom: 10px;
        right: 45%;
    }

    .edit-submit{
        position: absolute;
        bottom: 40px;
        right: 45%;
    }

    .blur {
        filter: blur(2px);
    }

    .blur-heavy {
        filter: blur(5px);
    }

@media only screen and (max-width: 768px) {

    .tab-content {
        padding-left: 10px;
        padding-right: 10px;
        width: 100%;
    }

    .tab-container {
        height: 100%;
    }

    .body-of-tab {
        justify-content: center;
        align-items: center;
        text-align:center;
    }

   #lock{
            font-size: 80px;
            position: absolute;
            bottom: 40px;
            right: 35%;
        }

    #check{
                font-size: 80px;
                position: absolute;
                bottom: 120px;
                right: 35%;
            }

    .thumbnail-image {
        // border: 2px solid red;
        padding-top: 10px;
        position: relative;
        text-align: center;

        img {
            border: 3px solid $light-border;
            max-width: 450px;
            overflow: hidden;
            padding:auto;
            margin:auto;
        }
    }

    .thumbnail-image:hover {
        img {
            border: 3px solid $light-border;
        }
    }

    .submit {
        // border: 2px solid green;
        position: absolute;
        bottom: 20px;
        right: 35%;
    }

    .edit-submit{
        position: absolute;
        bottom: 40px;
        right: 10%;
        padding:10px;
    }

    .blur {
        filter: blur(2px);
    }

    .blur-heavy {
        filter: blur(5px);
    }

}
</style>


