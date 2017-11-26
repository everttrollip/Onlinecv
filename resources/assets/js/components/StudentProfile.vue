<template>
    <form-wizard @on-complete="submit"
                        shape="circle"
                        color="#3498db"
                        title="Profile Setup Wizard"
                        subtitle="Give us some more information about yourself in multiple steps">

        <tab-content title="Personal details"
                    icon="fa fa-info">
            <div class="col-md-12">
                <div class="form-group col-md-2">
                    <label class="control-label">First Name</label>
                    <input v-model="firstname"  class="form-control" placeholder="First Name" name="firstname">
                </div>
                <div class="form-group col-md-2">
                    <label class="control-label">Last Name</label>
                    <input  v-model="lastname" class="form-control" placeholder="Last Name" name="lastname">
                </div>
                <div class="form-group col-md-2">
                    <label class="control-label">Email</label>
                    <input v-bind:value="email" v-model="email" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="form-group col-md-2">
                    <label class="control-label">Mobile Number</label>
                    <input v-bind:value="contact" v-model="contact" class="form-control" placeholder="Mobile Number" name="contact">
                </div>
                <div class="form-group col-md-2">
                    <label class="control-label">Town / City </label>
                    <input  v-model="town" class="form-control" placeholder="Town" name="town">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">Tagline</label>
                    <textarea v-model="tagline" class="form-control" placeholder="In one or two sentences, briefly describe yourself..." name="tagline"></textarea>
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
                        <select class="form-control" v-model="studyLocations">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
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
    export default {
        data() {
            return {
                firstname: '',
                lastname: '',
                email: '',
                contact:'',
                sports: '',
                interests: [],
                arts: '',
                school: '',
                grade: '',
                tagline: '',
                town:'',
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        },
        mounted(){
            axios.get('/student').then((result)=>{
                this.firstname = result.data.firstname;
                this.lastname = result.data.lastname;
                this.email = result.data.email;
                this.grade = result.data.grade;
                this.town = result.data.town;
                this.sports = result.data.sports;
                this.arts = result.data.arts;
                this.tagline = result.data.tagline;
                this.contact = result.data.contact;
            });
        },
        methods: {
            submit() {
                axios.post('/student/profile/update', this.$data).then(
                    function (response) {
                        if(response.data['firstname'] != ''){
                            bootbox.alert({
                                title:'Notification', message:'Youre profile was successfully update.'
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
