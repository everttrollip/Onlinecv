<template>
    <div>
            <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Inbox</h3>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                    <tbody>
                        <tr v-for="(message,index) in message_list" :key="message.id">
                            <td v-if="message.read === 0" class="mailbox-star"><a v-on:click="markAsRead(message.id)"><i class="fa fa-envelope text-yellow"></i></a></td>
                            <td v-else class="mailbox-star"><a href="#"><i class="fa fa-envelope-o text-yellow"></i></a></td>
                            <td v-for="(user,index) in users" :key="user.id" v-if="message.sender_id === user.id" class="mailbox-name"><a href="read-mail.html">{{user.firstname}} {{user.lastname}}</a></td>
                            <td class="mailbox-subject"><b>Message</b> - {{message.message}}
                            </td>
                            <td class="mailbox-attachment"></td>
                            <td class="mailbox-date">{{message.created_at}}</td>
                        </tr>
                    </tbody>
                  </table>
            </div>
              <!-- /.mail-box-messages -->
            </div>
          </div>
        </div>
    </div>
    </div>
    </section>
    </div>
</template>
<script>
export default{
    created(){},
    mounted(){
        this.message_list = JSON.parse(this.messages);
        axios.get('/users').then((response)=>{
         this.users = response.data;
     });
    },
    props:['messages'],
    data(){
        return{
            message_list:[],
            users:[]
        }
    },
    methods:{
        markAsRead(message_id){
            axios.get('/mark-message-as-read/' + message_id).then((response)=>{
                if(response.data['success']){
                    this.message_list = response.data['messages'];
                }
            });
        }
    }
}
</script>