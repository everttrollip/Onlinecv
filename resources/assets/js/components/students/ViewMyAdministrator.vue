<template>
    <div class="container" style="margin-top:15px;">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border"></div>
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" style="min-height:200px; min-width:200px;" :src="baseUrl + avatar" alt="User profile picture">
                        <h3 class="profile-username text-center">{{admin['firstname']}} {{admin['lastname']}}</h3>
                        <p class="text-muted text-center">{{admin['email']}}</p>
                        <hr>
                        <p class="text-muted text-center">{{admin['town']}}, {{admin['province']}}</p>
                        <p class="text-muted text-center"> {{admin['contact']}}</p>
                        <p class="text-muted text-center">{{studentCount}} Students</p>
                        <p class="text-muted text-center"> {{admin['job_title']}}</p>
                        <p class="text-muted text-center"> "{{admin['bio']}}"</p>
                        <p class="text-center"><button v-on:click="messageModal = !messageModal" class="btn btn-info"><i class="fa fa-envelope"></i> Message</button></p>
                    </div>
                </div>
            </div>
            <!-- MODAL Message -->
            <div v-if="messageModal" class="modal fade in show"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"  @click="messageModal = false" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Send Message to {{admin['firstname']}} {{admin['lastname']}}</h4>
                    </div>
                    <div class="modal-body">
                        <form ref="voucherForm">
                            <div class="form-group">
                                <label class="control-label">Subject</label>
                                <input class="form-control" v-model="messagetitle" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Message</label>
                                <textarea class="form-control" v-model="messagebody"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"  @click="messageModal = false" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" v-on:click="sendMessage"> <i v-show="loading" class="fa fa-spinner fa-spin"></i> Submit</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    created(){

    },
    mounted(){
        this.admin = JSON.parse(this.administrator);
        this.getAvatar();
        this.getStudents();

    },
    props:['administrator'],
    data(){
      return{
          admin:[],
          avatar:'',
          baseUrl:'../storage/images/administrator/',
          noImage:'../storage/images/no-image.jpeg',
          studentCount: 0,
          messageModal:false,
          messagebody:'',
          messagetitle:'',
      }
  },
  methods:{
      getAvatar(){
          axios.get('/get-admin-avatar/'+this.admin['id']).then((response)=>{
              this.avatar = response.data;
          });
      },
      getStudents(){
          axios.get('/get-student-count-for-admin/' + this.admin['id']).then((response)=>{
              this.studentCount = response.data;
          });
      },
      sendMessage(){
          axios.post('/student/send-message-to-admin', {message:this.messagebody, title:this.messagetitle, admin: this.admin}).then((response)=>{
            if(response.data['success']){
                this.messageModal = false;
                bootbox.alert({
                    title:'Success!',
                    message:'Your message was successfully sent.'
                });
            }
          }).catch((Exception)=>{
              boobox.alert({
                  title:'Oops!',
                  message:'Something went wrong. We could not send your message at this time. Please try again.'
              })
          });
      }
  }
}
</script>
