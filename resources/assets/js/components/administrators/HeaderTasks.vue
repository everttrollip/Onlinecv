<template>
   <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">{{tasks.length + submission_requests.length}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have {{tasks.length + submission_requests.length}} tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li v-for="task in tasks" :key="task.id"><!-- Task item -->
                    <a v-on:click="review(task)" href="javascript:;">
                      <h3>
                         Achievements review request from {{task.firstname}} {{task.lastname}}
                        <small class="pull-right">{{task.created_at | time}}</small>
                      </h3>
                    </a>
                  </li>
                  <li v-for="req in submission_requests" :key="req.id"><!-- Task item -->
                    <a v-on:click="activate(req)" href="javascript:;">
                      <h3>
                         Activation request from {{req.firstname}} {{req.lastname}}
                        <small class="pull-right">{{req.created_at | time}}</small>
                      </h3>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
</template>
<script>
export default {
    created () {
    },
    mounted(){
         this.getAllTasks();
         this.getAllSubmissions();
    },
    data(){
        return{
            tasks:[],
            submission_requests:[],
        }
    },
    methods:{
        getAllTasks(){
            axios.get('/get-admin-tasks').then((response)=>{
                if(response.data != null && response.data != undefined){
                    this.tasks = response.data;
                }
            });
        },
        getAllSubmissions(){
             axios.get('/submission-reviews').then((response)=>{
                if(response.data != null && response.data != undefined){
                    this.submission_requests = response.data;
                }
            });
        },
        review(request){
            var url = '/review/' + request.student_id;
            window.location= url;
        },
        activate(request){
            var url = '/view-student-cv/' + request.student_id;
            window.location = url;
        }
    },
    filters:{
          time(string){
                 console.log(string);
                return string.substring(11, 16);
            }
    }
}
</script>

