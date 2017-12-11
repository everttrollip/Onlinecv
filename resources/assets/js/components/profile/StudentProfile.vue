<template>
    <form-wizard @on-complete="submit"
                        shape="circle"
                        color="#3498db"
                        title="Profile Setup Wizard"
                        subtitle="Give us some more information about yourself so that we can build a cv for you!">

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

                    <div class="form-group" v-bind:class="{ 'has-error': $v.idNumber.$error }">
                        <label class="control-label">ID/Passport Number</label>
                        <input v-model.trim="idNumber" class="form-control" placeholder="ID/Passport Number" name="idNumber" @input="$v.idNumber.$touch()">
                        <span class="help-block" v-if="$v.idNumber.$error && !$v.idNumber.required">ID number is required</span>

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
                        <input v-bind:value="email" v-model="email" class="form-control" placeholder="Email" name="email" @input="$v.email.$touch()">
                        <span class="help-block" v-if="$v.email.$error && !$v.email.required">Email is required</span>
                        <span class="help-block" v-if="$v.email.$error && !$v.email.email">This is not a valid email!</span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Mobile Number</label>
                        <input v-bind:value="contact" v-model="contact" class="form-control" placeholder="Mobile Number" name="contact">
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
                        <select class="form-control select2" style="width:100%" multiple="multiple" max="8" v-model="subjects">
                            <option>Afrikaans</option>
                            <option>English</option>
                            <option>Accounting</option>
                            <option>Maths</option>
                            <option>Geography</option>
                            <option>Art</option>
                            <option>Music</option>
                            <option>Economy</option>
                            <option>Life Orientation</option>
                        </select>
                    </div>
                </div>

                <div class="flex-container-column col-md-4">
                    <div class="form-group">
                        <h2>Post School</h2>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Varsity Exemption</label>
                        <select class="form-control" v-model="varsityExempt">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Preferred Study Location(s)</label>
                        <v-select multiple :options="studyLocations" v-model="preferredStudyLocations"></v-select>
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
                    <select class="form-control select2" style="width:100%" multiple="multiple" v-model="careerInterests">
                        <option>Arts and Performance</option>
                        <option>Beauty and Cosmetics</option>
                        <option>Finanaces and Bussiness</option>
                        <option>Technoglogy and Science</option>
                        <option>Agriculture</option>
                    </select>

                    <label class="control-label">General Interests</label>
                    <textarea v-model="generalInterests" class="form-control" placeholder="(Tech, Photography, Video Production, Nature, Astronomy)" name="generalInterests"></textarea>
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
                <div align="center">
                    <img alt="User Picture Placeholder" width="150" class="img-circle img-responsive">
                    <br>
                    <input name="avatar" type="file" class="form-control upload-file" data-max-size="2000000">
                </div>
            </div>
        </tab-content>

        <tab-content title="Last step"
                    icon="fa fa-check">
            <h2>Great! That's it!</h2>
            <span>Go back to review/change any information. When ready, use the finish button to submit your details.</span>
        </tab-content>

    </form-wizard>

</template>
<script>
    import { required,email } from 'vuelidate/lib/validators'
    export default {
        data() {
            return {
                // Personal Details
                firstname: '',
                lastname: '',
                email: '',
                contact: '',
                idNumber: '',
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
                subjects: [],
                varsityExempt: '',
                studyLocations: [
                    'Alice', 'Bellville', 'Bhisho', 'Bloemfontein', 'Cape Town', 'Durban', 'East London', 'Ga-Rankuwa',
                    'Grahamstown', 'Johannesburg', 'Mafikeng', 'Mankwe', 'Pietermaritzburg', 'Pinetown', 'Polokwane',
                    'Potchefstroom', 'Pretoria', 'QwaQwa', 'Saldanha Bay', 'Stellenbosch', 'Tygerberg', 'Vanderbijlpark',
                    'Westville'
                ],
                preferredStudyLocations: [],

                // Additional Information
                arts: 0,
                sports: 0,
                events: 0,
                communication: 0,
                conceptualization: 0,
                creativity: 0,
                leadership: 0,
                careerInterests: [],
                generalInterests: '',

                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        },
        mounted(){
            axios.get('/student').then((result)=>{
                this.firstname = result.data.firstname;
                this.lastname = result.data.lastname;
                this.email = result.data.email;
                this.contact = result.data.contact;
                this.idNumber = result.data.id_number;
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
                    this.varsityExempt = 'Yes';
                }
                else {
                    this.varsityExempt = 'No';
                }
                if (result.data.preferred_study_locations == "") {
                    this.preferredStudyLocations = [];
                }
                else {
                    this.preferredStudyLocations = Array.from(result.data.preferred_study_locations.split(','));
                }

                this.arts = result.data.arts;
                this.sports = result.data.sports;
                this.events = result.data.events;
                this.communication = result.data.communication;
                this.conceptualization = result.data.conceptualization;
                this.creativity = result.data.creativity;
                this.leadership = result.data.leadership;
                if (result.data.career_interests == "") {
                    this.careerInterests = [];
                }
                else {
                    this.careerInterests = Array.from(result.data.career_interests.split(','));
                }
                this.generalInterests = result.data.general_interests;
            });
        },
        validations: {
            firstname: {
                required
            },
            lastname: {
                required
            },
            idNumber: {
                required
            },
            email: {
                required,
                email
            },
            form: ['firstname', 'lastname', 'idNumber', 'email']
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
            submit() {
                axios.post('/student/profile/update', this.$data).then(
                    function (response) {
                        if(response.data['firstname'] != ''){
                            bootbox.alert({
                                title:'Notification', message:'You\'re profile was successfully updated.'
                            });
                        }
                        else{
                            bootbox.alert({
                                title:'Notification', message:'Something went wrong. We could not update your profile. Please try again or contact the administrators at info@onlinecv.co.za if the issue persists.'
                            });
                        }
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
