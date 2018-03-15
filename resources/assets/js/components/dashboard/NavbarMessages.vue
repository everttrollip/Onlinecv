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
                  <li>
                      <!-- start message -->
                    <a v-for="message in messages" :key="message.id" :href="viewMessageUrl + message.thread_id">
                      <div class="pull-left">
                       <i class="fa fa-envelope"></i>
                      </div>
                      <h4>
                        New Message
                      </h4>
                      <p>{{messages[0].created_at|date}} at {{ messages[0].created_at| time}}</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="/my-inbox">See All Messages</a></li>
            </ul>
          </li>
</template>
<script>
export default{
   created(){

    },
    mounted(){
        var vm = this;
        axios.get('/get-all-my-unread-messages').then((response)=>{
            var msg = response.data;
            if(msg != undefined && msg != null){
                for(var i = 0; i < msg.length; i++){
                    if(msg[i] != null && msg[i] != undefined){
                        vm.messages.push(msg[i])
                    }
                }
            }
        });
    },
    data(){
        return{
            messages:[],
            viewMessageUrl:'/view-message-history/'
        }
    },
    filters:{
        time(string){
                 console.log(string);
                return string.substring(11, 16);
            },
        date(string){
                 console.log(string);
                return string.substring(0, 10);
            }
    }

}
</script>