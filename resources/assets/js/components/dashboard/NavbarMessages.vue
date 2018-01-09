<template>
    <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">{{messageCount}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have {{messageCount}} messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                      <!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                       <i class="fa fa-envelope"></i>
                      </div>
                      <h4>
                        New Message
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p v-if="messages[0]">{{messages[0].message}}</p>
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
    created(){},
    mounted(){
        axios.get('/get-my-messages').then((response)=>{
            this.messages = response.data['unread_messages'];
            this.messageCount = response.data['unread_count'];
        });
    },
    data(){
        return{
            messages:'',
            messageCount: 0,
        }
    },

}
</script>