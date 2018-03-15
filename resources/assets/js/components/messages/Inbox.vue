<style>
#firstcol{
    width: 30px;
}
</style>
<template>
    <div class="container">
        <div class="row">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">All Messages</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table">
                        <table class="table table-default">
                            <thead>
                            </thead>
                            <tbody>
                                <tr v-for="message in messages" :key="message.id">
                                    <td id="firstcol">
                                        <i v-if="isUnread(message)"  class="fa fa-envelope"></i>
                                        <i v-else class="fa fa fa-envelope-open"></i>
                                    </td>
                                    <td><a v-on:click="viewMessageHistory(message.thread_id)" href="javascript:;">{{message['title']}}</a></td>
                                    <td><a v-on:click="viewMessageHistory(message.thread_id)" href="javascript:;">{{message['date_added']}}</a></td>
                                    <td>
                                        <!-- <button class="btn btn-info" v-on:click="viewMessage(message)">Quick View</button> -->
                                        <button class="btn btn-info" v-on:click="viewMessageHistory(message.thread_id)">View</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p v-if="messages.length ==0 ">No messages to display</p>
                </div>
            </div>

            <!-- View More Modal-->
            <div v-if="showDetails" class="modal fade in show" id="addNewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"  @click="showDetails = false" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">View Message</h4>
                        </div>
                        <div class="modal-body" style="text-align:center;">
                            <h4>{{messageToShow['message_subject']}}</h4>
                            <br>
                            <p>{{messageToShow['message']}}</p>
                            <p>Sender - {{messageToShow['name']}}, {{messageToShow['email']}}</p>
                        </div>
                        <hr>
                        <div style="text-align:center;">
                            <h4>Your Reply</h4>
                            <textarea v-model="reply" class="form-control" style="width:100%"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" type="button" @click="showDetails = false">Cancel</button>
                            <button class="btn btn-success" type="button" v-on:click="replyMessage(messageToShow)"><i v-if="loading" class='fa fa-spinner fa-spin'></i> Send Reply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</template>
<script>
    export default{
        mounted(){
           this.getUnread();
           this.messages = JSON.parse(this.msglist);
        },
        props:['msglist'],
        data(){
            return{
                messages:[],
                showDetails:false,
                messageToShow:'',
                reply:'',
                loading:false,
                threads:[],
                reply_msgs:[],
                unread_messages:[],
                user_id:''
            }
        },
        methods:{
            markAsRead(id){
                var replies = [];
                reply_msgs.array.forEach(element => {
                    if(element.reply_to == id){
                        replies.push(element);
                    }
                });
                axios.get('/mark-message-as-read/', {id:id, replies: replies }).then((response)=>{
                    this.getMessages();
                });
            },
            getUnread(){
                axios.get('/get-all-my-messages').then((response)=>{
                            var msg = response.data;
                            if(msg != undefined && msg != null){
                                for(var i = 0; i < msg.length; i++){
                                    if(msg[i] != null && msg[i] != undefined){
                                        this.unread_messages.push(msg[i])
                                    }
                                }
                            }
                        });
            },
            viewMessage(message){
                this.showDetails = true;
                this.messageToShow = message
            },
            viewMessageHistory(id){
                var url = '/view-message-history/' + id;
                window.location = url;
            },
            deleteMessage(id){
                axios.get('/delete-message-by-id/' + id).then((response)=>{
                    if(response.data['success']){
                        bootbox.alert({
                            title:'Success',
                            message:'Conversation has been successfully deleted'
                        });
                    }else{
                         bootbox.alert({
                            title:'Oops!',
                            message:'Something went wrong. Conversation could not be deleted at this time. Please try again.'
                        });
                    }
                });
            },
            replyMessage(message){
                this.loading = true;
                var vm = this;
               axios.post('/reply-to-message', {user_id: message.sender_user_id, id: message.id, message: this.reply, type:'Reply'}).then((response)=>{
                   this.showDetails = false;
                   this.loading=false;
                   if(response.data['success']){
                       bootbox.alert({
                           title:'Success',
                           message:'Your reply has been sent.'
                       });
                       vm.getMessages();
                   }else{
                       bootbox.alert({
                           title:'Oops!',
                           message:'Something went wrong. Your message could not be sent at this time. Please try again.'
                       })
                   }
               });
            },
            isUnread(message){
                var flag = false;
                for(var i = 0; i < this.unread_messages.length; i++){
                    if(message.thread_id == this.unread_messages[i].thread_id){
                        flag = true;
                    }
                }
                return flag;
            }
        },
            filters: {
            capitalize: function (value) {
            if (!value) return ''
            value = value.toString()
            return value.charAt(0).toUpperCase() + value.slice(1)
            }

        },
        computed:{

        }
    }
</script>