<template>
    <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">{{messages.length}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have {{messages.length}} messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li v-for="message in messages" :key="message.id"><!-- start message -->
                    <a :href="messageUrl + message.thread_id">
                      <div class="pull-left">

                      </div>
                      <h4 style="margin-bottom:10px;">
                        <small><i class="fa fa-clock-o"></i>{{message.created_at}}</small>
                      </h4>
                     <p>{{message.body | truncate(25)}}</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="./my-inbox">See All Messages</a></li>
            </ul>
          </li>
</template>
<script>
export default {
   mounted(){
       this.getAllMessages();
   },
  data(){
      return{
          messages:[],
          messageUrl:'../../view-message-history/',
      }
  },
  methods:{
      getAllMessages(){
        axios.get('/get-all-my-unread-messages').then((response)=>{
                var msg = response.data;
                if(msg != undefined && msg != null){
                    for(var i = 0; i < msg.length; i++){
                        if(msg[i] != null && msg[i] != undefined){
                            this.messages.push(msg[i])
                        }
                    }
                }

            });
      }
  },
  filters:{
    truncate(string, value){
                    return string.substring(0, value) + '...';
                },
  }
}
</script>
