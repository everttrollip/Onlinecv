
<template>
           <div class="container" id="body">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2" style="margin-top:10%">
                        <div class="panel panel-default">
                            <div class="panel-heading">Register</div>
            
                            <div class="panel-body">
                                <form class="form-horizontal" method="POST">
                               <input type="hidden" name="_token" :value="csrf">
                                    <div class="form-group">
                                        <label for="name" class="col-md-4 control-label">Name</label>
            
                                        <div class="col-md-6">
                                            <input v-model="name" id="name" type="text" class="form-control" name="name"  required autofocus>
            
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                            <label for="surname" class="col-md-4 control-label">Surname</label>
                
                                            <div class="col-md-6">
                                                <input v-model="surname" id="surname" type="text" class="form-control" name="surname"  required autofocus>
                
                                                
                                            </div>
                                        </div>
            
                                    <div class="form-group">
                                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>
            
                                        <div class="col-md-6">
                                            <input v-model="email" id="email" type="email" class="form-control" name="email" required>
            
                                
                                        </div>
                                    </div>
            
                                    <div class="form-group">
                                        <label for="password" class="col-md-4 control-label">Password</label>
            
                                        <div class="col-md-6">
                                            <input v-model="password" id="password" type="password" class="form-control" name="password" required>
            
                                            
                                        </div>
                                    </div>
            
                                    <div class="form-group">
                                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
            
                                        <div class="col-md-6">
                                            <input v-model="passwordconfirm" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="form-group" v-if="role === 'student'">
                                        <label for="password-confirm" class="col-md-4 control-label">Voucher Code</label>
                                        <div class="col-md-6">
                                            <input v-model="voucher" id="voucher" type="voucher" class="form-control" name="voucher" required>
                                        </div>
                                    </div>
            
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="button" v-on:click="submit()" class="btn btn-primary">
                                                Register
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</template>

<script>

export default {
  data() {
    return {
      name: '',
      surname: '',
      email: '',
      password:'',
      passwordconfirm:'',
      role: this.role,
      voucher: '',
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    }
  },
  props:['role'],
  methods: {
    register() {
      console.log('Register now as' + this.role);
    },
    submit() {
        alert(this.role);
        axios.post('/registersubmit', this.$data)
                    .then(function (response) {
                        if(response.data['name'] != ''){
                            bootbox.alert({
                                title:'Notification', message:'You are successfully registered. Please verify you e-mail address.',
                                callback: function(result)
                                {
                                    window.location.href="/" ;
                                }
                            });
                        }else{
                            bootbox.alert({title:'Notification', message:'Something went wrong. We could not register you. Please try again or contact the administrators at info@onlinecv.co.za if the issue persists.'});
                        }

                    }, function (response) {
                        bootbox.alert({title:'Notification', message:'Something went wrong. We could not register you. Please try again or contact the administrators at info@onlinecv.co.za if the issue persists.'});
                    });
    }
  }
}

</script>