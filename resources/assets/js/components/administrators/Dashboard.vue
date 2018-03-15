<template>
  <div class="col-md-12">
        <h1 class="col-md-12">Your latest students</h1>
        <div class="col-md-3 col-xs-6 col-lg-2" v-for="student in students" :key="student.student_id">
            <el-card :body-style="{ padding: '0px' }">
            <img v-if="student.avatar != undefined && student.avatar != '' && student.avatar != null" :src="imageUrl + '/student/' + student.avatar" class="image">
            <img v-else :src="noImage" class="image">
            <div style="padding: 14px;">
                <h5 id="nameHeading">{{student.firstname}} {{student.lastname}}</h5>
                <div class="bottom clearfix">
                <p>
                    <strong>CV Activated:</strong>
                    <span v-if="student.active == '0'">No</span>
                    <span v-else>Yes</span>

                </p>
                <time class="time"><strong>Joined:</strong> {{ student.created_at }}</time>
                <button class="btn btn-block btn-primary" style="margin-top:10px;">View <i class="fa fa-chevron-right"></i></button>
            </div>
            </div>
            </el-card>
        </div>
      <h1 class="col-md-12">Latest Online CV users</h1>
      <div class="col-md-3 col-xs-6 col-lg-2" v-for="user in users" :key="user.id">
            <el-card :body-style="{ padding: '0px' }">
            <img :src="imageUrl + user.role + '/' + user.avatar" class="image">
            <div style="padding: 14px;">
                <h5 id="nameHeading">{{user.firstname}} {{user.lastname}}</h5>
                <div class="bottom clearfix">
                <time class="time"><strong>Joined:</strong> {{ user.created_at }}</time>
            </div>
            </div>
            </el-card>
        </div>
  </div>
</template>

<script>
export default {
    ready(){

    },
    mounted(){
        this.getMyStudents();
        this.getUsers();
    },
    data(){
        return{
            students:[],
            users:[],
            imageUrl:'./storage/images/',
            noImage: 'http://www.microhub.co.za/wp-content/uploads/2018/02/no-image.jpeg',
        }
    },
    methods:{
        getMyStudents(){
            axios.get('/admin/get-my-students-list').then((response)=>{
                this.students = response.data;
            });
        },
        getUsers(){
            axios.get('/users/get-latest').then((response)=>{
                this.users = response.data;
            });
        },
        viewStudent(id){
            var url = '/view-student-cv/' + id;
            window.location = url;
        }
    }
}
</script>

<style>
#viewbutton{
    float:right;
}
#nameHeading{
    font-size:16px;
    font-weight: bold;
}
.image {
    width: 100%;
    display: block;
  }
</style>
