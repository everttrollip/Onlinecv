<template>
      <div class="container">
          <div class="row">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">View Message History</h3>
                            <!-- /.box-header -->
                <div class="box-body">
                    <div class="group-rom" :style="isUser(msg)" v-for="(msg,index) in message" :key="index">
                        <div class="first-part odd">{{msg.firstname}} {{msg.lastname}}</div>
                        <div class="second-part">{{msg.body}}</div>
                        <div class="third-part">{{msg.created_at}}</div>
                    </div>
                    <hr>
                    <br>
                    <div>
                            <textarea v-model="reply_msg" type="text" class="form-control"></textarea>
                            <button class="btn btn-danger pull-right" style="margin-top:10px;" v-on:click="replyMessage()">Send</button>
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
       this.message = JSON.parse(this.mainmessage);
    },
    props:['mainmessage', 'userid'],
    data(){
        return{
            message:[],
            reply_msg:'',
            type:'Message'
        }
    },
    methods:{
       replyMessage(){
           axios.post('/reply-to-message', this.$data).then((response)=>{
               console.log(response.data);
               if(response.data['success']){
                   axios.get('/get-this-thread-messages/' + this.message[0]['thread_id']).then((response)=>{
                       this.message = response.data['messages'];
                       this.reply_msg ='';
                   });
               }else{
                   bootbox.alert({
                       title: 'Oops!',
                       message:'Something went wronf. We could not send your message at this time. Please try again'
                   })
               }
           });

       },
       isUser(message){
           if(message.user_id == this.userid){
               return "background-color:#d9eff9; padding:5px; text-align:right"
           }else{
               return 'background-color:#dbfcd9; padding:5px;'
           }
       }
    },
    computed:{

    }
}
</script>
<style>
.group-rom{
    margin-bottom:15px;
}
</style>
