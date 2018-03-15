<template>
    <form-wizard @on-complete="submit"
                :start-index.sync="activeIndex"
                shape="circle"
                color="#3498db"
                title="Profile Setup Wizard"
                subtitle="Give us some more information about yourself so that we can build a cv for you!">
        <wizard-step
            slot-scope="props"
            slot="step"
            :tab="props.tab"
            :transition="props.transition"
            :index="props.index">
            <div slot="active-step" style="display: flex; justify-content:center; align-items: center;">
                <i class="fa fa-info" aria-hidden="true" v-if="props.index == 0"></i>
                <i class="fa fa-graduation-cap" aria-hidden="true" v-if="props.index == 1"></i>
                <i class="fa fa-cog" aria-hidden="true" v-if="props.index == 2"></i>
                <i class="fa fa-user" aria-hidden="true" v-if="props.index == 3"></i>
                <lottie v-if="props.index == 4"
                :options="defaultOptions"
                :height="65"
                :width="65"/>
            </div>
        </wizard-step>

        <tab-content title="Personal details"
                    icon="fa fa-info"
                    :before-change="()=>validateStep('step1')">
            <div class="col-md-12">
                <div class="flex-container-column col-md-4">
                    <div class="form-group">
                        <h2>Personal</h2>
                    </div>

                    <div class="form-group" v-bind:class="{ 'has-error': $v.firstname.$error }">
                        <label class="control-label">First Name</label>
                        <input v-model.trim="firstname"  class="form-control" placeholder="First Name" name="firstname" @input="$v.firstname.$touch()">
                        <span class="help-block" v-if="$v.firstname.$error && !$v.firstname.required">First name is required</span>
                    </div>


                    <div class="form-group" v-bind:class="{ 'has-error': $v.lastname.$error }">
                        <label class="control-label">Last Name</label>
                        <input v-model.trim="lastname" class="form-control" placeholder="Last Name" name="lastname" @input="$v.lastname.$touch()">
                        <span class="help-block" v-if="$v.lastname.$error && !$v.lastname.required">Last name is required</span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Date of Birth</label>
                        <input v-model="dob" class="form-control" type="date">
                    </div>

                    <div class="form-group" v-bind:class="{ 'has-error': $v.id_number.$error }">
                        <label class="control-label">ID/Passport Number</label>
                        <input v-model.trim="id_number" class="form-control" placeholder="ID/Passport Number" name="id_number" @input="$v.id_number.$touch()">
                        <span class="help-block" v-if="$v.id_number.$error && !$v.id_number.required">ID number is required</span>

                        <!-- <label class="control-label">First Name</label>
                        <input v-model.trim="firstname"  class="form-control" placeholder="First Name" name="firstname" @input="$v.firstname.$touch()">
                        <span class="help-block" v-if="$v.firstname.$error && !$v.firstname.required">First name is required</span> -->
                    </div>
                </div>

                <div class="flex-container-column col-md-4">
                    <div class="form-group">
                        <h2>Contact</h2>
                    </div>

                    <div class="form-group" v-bind:class="{ 'has-error': $v.email.$error }">
                        <label class="control-label">Email</label>
                        <input  v-model="email" class="form-control" placeholder="Email" name="email" @input="$v.email.$touch()">
                        <span class="help-block" v-if="$v.email.$error && !$v.email.required">Email is required</span>
                        <span class="help-block" v-if="$v.email.$error && !$v.email.email">This is not a valid email!</span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Mobile Number</label>
                        <input v-model="contact" class="form-control" placeholder="Mobile Number" name="contact">
                    </div>
                </div>

                <div class="flex-container-column col-md-4">
                    <div class="form-group">
                        <h2>Residence</h2>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Province</label>
                        <v-select :options="southAfricanProvinces" v-model="province"></v-select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Town/City</label>
                        <input v-model="town" class="form-control" placeholder="Town" name="town">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Address</label>
                        <input v-model="address" class="form-control" placeholder="Street Address" name="address">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="flex-container-column col-md-4">
                    <div class="form-group">
                        <h2>About yourself...</h2>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Tagline</label>
                        <textarea v-model="tagline" class="form-control" placeholder="In one or two sentences, briefly describe yourself..." name="tagline"></textarea>
                    </div>
                </div>
            </div>
        </tab-content>

        <tab-content title="Education"
                    icon="fa fa-graduation-cap">
            <div class="col-md-12">

                <div class="flex-container-column col-md-4">
                    <div class="form-group">
                        <h2>School</h2>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Name</label>
                        <input v-model="school" class="form-control" placeholder="School name" name="school">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Grade</label>
                        <select class="form-control" v-model="grade">
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Subjects</label>
                        <v-select multiple :options="subjectOptions" v-model="subjects"></v-select>
                    </div>
                </div>

                <div class="flex-container-column col-md-4">
                    <div class="form-group">
                        <h2>Post School</h2>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Varsity Exemption</label>
                        <select class="form-control" v-model="varsity_exempt">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Preferred Study Location(s)</label>
                        <v-select multiple :options="studyLocations" v-model="preferred_study_locations"></v-select>
                    </div>
                </div>

            </div>
        </tab-content>

        <tab-content title="Additional Info"
                    icon="fa fa-cog">
            <div class="col-md-12">

                <div class="flex-container-column col-md-4">
                    <div class="form-group">
                        <h2>Engagement</h2>
                        <label>Give yourself a point out of 10 for the following engagement activities</label>
                    </div>

                    <div class="form-group">
                        <label class="control-label"><i class="fa fa-paint-brush"></i> Arts and Culture activities</label>
                        <el-rate
                            :max="10"
                            v-model="arts"
                            :colors="['#99A9BF', '#F7BA2A', '#FF9900']">
                        </el-rate>

                        <label class="control-label"><i class="fa fa-futbol-o"></i> Sport activities</label>
                        <el-rate
                            :max="10"
                            v-model="sports"
                            :colors="['#99A9BF', '#F7BA2A', '#FF9900']">
                        </el-rate>

                        <label class="control-label"><i class="fa fa-ticket"></i> Events</label>
                        <el-rate
                            :max="10"
                            v-model="events"
                            :colors="['#99A9BF', '#F7BA2A', '#FF9900']">
                        </el-rate>
                    </div>
                </div>

                <div class="flex-container-column col-md-4">
                    <div class="form-group">
                        <h2>Experience</h2>
                        <label>Rate yourself for the following experiences</label>
                    </div>

                    <div class="form-group">
                        <label class="control-label"><i class="fa fa-comments-o"></i> Communication</label>
                        <el-rate
                            :max="10"
                            v-model="communication"
                            :colors="['#99A9BF', '#F7BA2A', '#FF9900']">
                        </el-rate>


                        <label class="control-label"><i class="fa fa-lightbulb-o"></i> Conceptualization</label>
                        <el-rate
                            :max="10"
                            v-model="conceptualization"
                            :colors="['#99A9BF', '#F7BA2A', '#FF9900']">
                        </el-rate>

                        <label class="control-label"><i class="fa fa-magic"></i> Creativity</label>
                        <el-rate
                            :max="10"
                            v-model="creativity"
                            :colors="['#99A9BF', '#F7BA2A', '#FF9900']">
                        </el-rate>

                        <label class="control-label"><i class="fa fa-users"></i> Leadership</label>
                        <el-rate
                            :max="10"
                            v-model="leadership"
                            :colors="['#99A9BF', '#F7BA2A', '#FF9900']">
                        </el-rate>
                    </div>
                </div>

                <div class="flex-container-column col-md-4">
                    <div class="form-group">
                        <h2>Interests</h2>
                        <label>Tell us a bit about your general and career interests</label>
                    </div>

                    <label class="control-label">Career Interests</label>
                    <v-select multiple :options="career_interest_options" v-model="career_interests"></v-select>

                    <label class="control-label">General Interests</label>
                    <textarea v-model="general_interests" class="form-control" placeholder="(Tech, Photography, Video Production, Nature, Astronomy)" name="general_interests"></textarea>
                </div>
            </div>
        </tab-content>

        <tab-content title="Profile Image"
                    icon="fa fa-user">

            <h2>Add a Profile Picture</h2>
            <div class="callout callout-info">
                <h4>Tip!</h4>
                <p>Adding a profile image improves your profile. Tertiary companies are more likely to notice you if your profile stands out from the crowd.</p>
            </div>

            <div class="form-group">
                <label for="name" class="col-lg-2 col-sm-2 control-label">Profile Picture</label>
                <div class="form-group">
                    <div><button style="margin-top:20px; margin-bottom:15px" class="btn btn-info" type="button" @click="toggleShow">Choose Image</button></div>
                        <my-upload v-show="show" field="img"
                            @crop-success="cropSuccess"
                            @crop-upload-success="cropUploadSuccess"
                            @crop-upload-fail="cropUploadFail"
                            v-model="show"
                            :width="200"
                            :height="200"
                            url="/student-upload-profilepic"
                            :params="params"
                            :headers="headers"
                            img-format="png"
                            lang-type="en"></my-upload>
                        <img :src="imgDataUrl">
                    </div>
            </div>
        </tab-content>

        <tab-content title="Last step"
                    icon="fa fa-check">
            <div class="body-of-tab flex-container-column">
                <h2>Great! That's it!</h2>
                <lottie v-if="activeIndex == 4"
                        :options="defaultOptions"
                        :height="200"
                        :width="200" />
                <h4>Go back to review/change any information. When ready, use the finish button to submit your details.</h4>
            </div>
        </tab-content>

    </form-wizard>

</template>
<script>
    import { required, email } from 'vuelidate/lib/validators'
    import myUpload from 'vue-image-crop-upload';
    import Lottie from 'vue-lottie';
    import animationData from './../../../animation.js'

    export default {
        data() {
            return {
                logo:'',
                show: false,
                status: false,
                activeIndex: 0,
                defaultOptions: {animationData: animationData, loop:false},
                animationSpeed: 1,

                // Personal Details
                firstname: '',
                lastname: '',
                email: '',
                contact: '',
                id_number: '',
                dob: '',
                province: '',
                southAfricanProvinces: [
                    'Eastern Cape', 'Free State', 'Gauteng', 'KwaZulu-Natal', 'Limpopo', 'Mpumalanga', 'North West',
                    'Northern Cape', 'Western Cape'
                ],
                town: '',
                address: '',
                tagline: '',

                // Education
                school: '',
                grade: '',
                subjectOptions: [
                    'English', 'Afrikaans', 'Mathematics', 'Life Orientation', 'Accounting', 'Geography', 'Biology', 'Life Sciences',
                    'Natural Sciences', 'Art', 'Music', 'Technology', 'Economics', 'Other'
                ],
                subjects: [],
                varsity_exempt: '',
                studyLocations: [
                    'Alice', 'Bellville', 'Bhisho', 'Bloemfontein', 'Cape Town', 'Durban', 'East London', 'Ga-Rankuwa',
                    'Grahamstown', 'Johannesburg', 'Mafikeng', 'Mankwe', 'Pietermaritzburg', 'Pinetown', 'Polokwane',
                    'Potchefstroom', 'Pretoria', 'QwaQwa', 'Saldanha Bay', 'Stellenbosch', 'Tygerberg', 'Vanderbijlpark',
                    'Westville'
                ],
                preferred_study_locations: [],

                // Additional Information
                arts: 0,
                sports: 0,
                events: 0,
                communication: 0,
                conceptualization: 0,
                creativity: 0,
                leadership: 0,
                career_interest_options: [
                    "Arts and Performance",
                    "Beauty and Cosmetics",
                    "Finanaces and Bussiness",
                    "Technoglogy and Science",
                    "Agriculture"
                ],
                career_interests: [],
                general_interests: '',

                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                params: {
                    _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    name: 'avatar'
                },
                headers: {
                    smail: '*_~'
                },
                imgDataUrl: '',
            }
        },
        mounted(){
            axios.get('/student').then((result)=>{
                this.firstname = result.data.firstname;
                this.lastname = result.data.lastname;
                this.email = result.data.email;
                this.contact = result.data.contact;
                this.id_number = result.data.id_number;
                this.dob = result.data.dob;
                this.province = result.data.province;
                this.town = result.data.town;
                this.address = result.data.address;
                this.tagline = result.data.tagline;

                this.school = result.data.school;
                this.grade = result.data.grade;
                if (result.data.subjects == "") {
                    this.subjects = [];
                }
                else {
                    this.subjects = Array.from(result.data.subjects.split(','));
                }
                if (result.data.varsity_exempt) {
                    this.varsity_exempt = 'Yes';
                }
                else {
                    this.varsity_exempt = 'No';
                }
                if (result.data.preferred_study_locations == "") {
                    this.preferred_study_locations = [];
                }
                else {
                    this.preferred_study_locations = Array.from(result.data.preferred_study_locations.split(','));
                }

                this.arts = result.data.arts;
                this.sports = result.data.sports;
                this.events = result.data.events;
                this.communication = result.data.communication;
                this.conceptualization = result.data.conceptualization;
                this.creativity = result.data.creativity;
                this.leadership = result.data.leadership;
                if (result.data.career_interests == "") {
                    this.career_interests = [];
                }
                else {
                    this.career_interests = Array.from(result.data.career_interests.split(','));
                }
                this.general_interests = result.data.general_interests;
            });
        },
        components: {
            'my-upload': myUpload,
            Lottie
        },
        validations: {
            firstname: {
                required
            },
            lastname: {
                required
            },
            id_number: {
                required
            },
            email: {
                required,
                email
            },
            form: ['firstname', 'lastname', 'id_number', 'email']
        },
        methods: {
            validateStep(name) {
                return this.validate();
            },
            validate() {
                this.$v.form.$touch();
                var isValid = !this.$v.form.$invalid
                this.$emit('on-validate', this.$data, isValid)
                return isValid
            },
            toggleShow() {
                this.show = true;
            },
            cropSuccess(imgDataUrl, field){
                console.log('-------- crop success --------');
                this.imgDataUrl = imgDataUrl;
            },
            cropUploadSuccess(jsonData, field){
                console.log('-------- upload success --------');
                console.log(jsonData);
                console.log('field: ' + field);
            },
            cropUploadFail(status, field){
                console.log('-------- upload fail --------');
                console.log(status);
                console.log('field: ' + field);
            },
            submit() {
                axios.post('/student/profile/update', this.$data).then(
                    function (response) {
                        bootbox.alert({
                            title:'Notification',
                            message:'Your profile was successfully updated.',
                            callback: function(){
                                window.location.href = '/student/dashboard';
                            }
                        });

                    },
                    function (response) {
                        bootbox.alert({
                            title:'Notification', message:'Something went wrong. We could not update your profile. Please try again or contact the administrators at info@onlinecv.co.za if the issue persists.'
                        });
                    }
                );
            }
        }
    }
</script>

<style lang="scss" scoped>
    .body-of-tab {
        justify-content: center;
        align-items: center;
    }
</style>
