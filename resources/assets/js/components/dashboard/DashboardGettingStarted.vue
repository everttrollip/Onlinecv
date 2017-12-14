<template>
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

            <div class="body-of-tab flex-container-column profile-step">
                <h2>Update your Profile!</h2>
                <div class="thumbnail-image" v-on:mouseover="profileStepMouseOver" v-on:mouseleave="profileStepMouseLeave">
                    <img class="thumbnail blur" v-bind:class="{'blur-heavy': profileUpdated}" :src="profileImage">
                    <a type="button" :href="profilehref" v-show="!profileUpdated" class="btn btn-primary navigate">
                        Update now!
                    </a>
                    <a type="button" :href="profilehref" v-show="profileUpdated" class="btn btn-primary navigate">
                        Update
                    </a>
                    <i class="fa fa-check-circle" aria-hidden="true" v-show="profileUpdated"></i>
                </div>
                <h3 v-show="profileUpdated">Great stuff!</h3>
                <h4 v-show="profileUpdated">Your profile was successfully updated. Feel free to update it again at any stage by clicking the update button!</h4>
            </div>

        </tab-content>

        <tab-content title="CV"
                    icon="fa fa-cogs">

            <div class="body-of-tab flex-container-column cv-step">
                <h2>View and Edit your CV!</h2>
                <div class="thumbnail-image" v-on:mouseover="cvStepMouseOver" v-on:mouseleave="cvStepMouseLeave">
                    <img class="thumbnail blur" v-bind:class="{'blur-heavy': cvSubmitted}" :src="cvImage">
                    <a type="button" :href="cvhref" v-show="!cvSubmitted" class="btn btn-primary navigate">
                        View/Edit now!
                    </a>
                    <button type="button" v-on:click="submit()" v-show="!cvSubmitted" class="btn btn-primary submit">
                        <i v-show="loading" class="fa fa-spinner fa-spin"></i> Submit
                    </button>
                    <i class="fa fa-lock" aria-hidden="true" v-show="cvSubmitted"></i>
                </div>
                <h3 v-show="cvSubmitted">Nice one!</h3>
                <h4 v-show="cvSubmitted">Your CV has been successfully submitted to the administrators.</h4>
            </div>

        </tab-content>

        <tab-content title="That's it!"
                    icon="fa fa-check">
            <div class="body-of-tab flex-container-column">
                <h2>That's it! Well done</h2>
                <lottie v-if="activeIndex == 2"
                    :options="defaultOptions"
                    :height="200"
                    :width="200" />
                <h4>Click finish to go to your dashboard view where you will find out more ways to interact with administrators and purchase vouchers for adding more detail to your CV. </h4>
            </div>
        </tab-content>

    </form-wizard>

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
                loading: false
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
            submit() {
                this.loading = true;
                this.cvSubmitted = true;
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
    }

    .profile-step, .cv-step {
        i.fa {
            font-size: 80px;
            position: absolute;
            bottom: 40px;
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
        right: 40px;
    }

    .submit {
        // border: 2px solid green;
        position: absolute;
        bottom: 40px;
        right: 180px;
    }

    .blur {
        filter: blur(2px);
    }

    .blur-heavy {
        filter: blur(5px);
    }
</style>


