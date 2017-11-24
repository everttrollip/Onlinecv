<template>
    <form method="POST" >
        <input type="hidden" name="_token" :value="csrf">
        <div class="col-md-8">
            <!-- PERSONAL & CONTACT DETAILS -->
            <h4>Personal and Contact Details</h4>
            <div class="form-group ">
                <label class="control-label">First Name</label>
                <input v-model="firstname"  class="form-control" placeholder="First Name" name="firstname">
            </div>
            <div class="form-group ">
                <label class="control-label">Last Name</label>
                <input  v-model="lastname" class="form-control" placeholder="Last Name" name="lastname">
            </div>
            <div class="form-group ">
                <label class="control-label">Email</label>
                <input v-bind:value="email" v-model="email" class="form-control" placeholder="Email" name="email">
            </div>
            <div class="form-group ">
                <label class="control-label">Mobile Number</label>
                <input v-bind:value="contact" v-model="contact" class="form-control" placeholder="Mobile Number" name="contact">
            </div>

            <!-- CV DETAILS -->
            <h4>CV Details</h4>
            <div class="form-group ">
                <label class="control-label">Tagline</label>
                <input v-model="tagline" class="form-control" placeholder="I am..." name="tagline">
            </div>
            <div class="form-group ">
                <label class="control-label">Town / City </label>
                <input  v-model="town" class="form-control" placeholder="Town" name="town">
            </div>
            <div class="form-group ">
                <label class="control-label">Grade</label>
                <select class="form-control" v-model="grade">
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                </select>
            </div>
            <label class="control-label">Engagement</label>
            <div class="form-group">
                <label class="control-label">Give yourself a point out of 10 for engagement in Arts and Culture activities</label>
                <input  v-model="arts" class="form-control" placeholder="" name="arts">

                <label class="control-label">Give yourself a point out of 10 for engagement in Sport activities</label>
                <input  v-model="sports" class="form-control" placeholder="" name="sport">
            </div>
            <div class="form-group ">
                <label class="control-label">Career Interests</label>
                <select class="form-control select2" style="width:100%" multiple="multiple" v-model="interests">
                    <option>Arts and Performance</option>
                    <option>Beauty and Cosmetics</option>
                    <option>Finanaces and Bussiness</option>
                    <option>Technoglogy and Science</option>
                    <option>Agriculture</option>
                </select>
            </div>

            <!-- CV IMAGE & PROFILE PICTURE -->
            <div class="form-group">
                <label class="control-label">CV Image and Profile Picture</label>
                <div align="center">
                    <img alt="User Pic" width="150" class="img-circle img-responsive">
                    <br>
                    <input name="avatar" type="file" class="form-control upload-file" data-max-size="2000000">
                </div>
            </div>

            <!-- SAVE DETAILS -->
            <div class="box-footer">
                <button type="button" v-on:click="submit()" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
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
            debugger
            axios.get('/get-student').then((result)=>{
                debugger
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