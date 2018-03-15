
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
                                    <input v-model="name" id="name" type="text" class="form-control" name="name" v-validate="'required|max:45'" autofocus>
                                    <span v-show="errors.has('name')" class="help is-danger">{{ errors.first('name') }}</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="surname" class="col-md-4 control-label">Surname</label>
                                <div class="col-md-6">
                                    <input v-model="surname" id="surname" type="text" class="form-control" name="surname" v-validate="'required|max:45'" autofocus>
                                    <span v-show="errors.has('surname')" class="help is-danger">{{ errors.first('surname') }}</span>
                                </div>
                            </div>

                            <div class="form-group" v-if="role === 'hub'">
                                <label for="password-confirm" class="col-md-4 control-label">Company Name</label>
                                <div class="col-md-6">
                                    <input v-model="company" id="company" type="text" class="form-control" name="company" v-validate="role=='hub' ? 'required|max:45' : ''">
                                    <span v-show="errors.has('company')" class="help is-danger">{{ errors.first('company') }}</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input v-model="email" id="email" type="email" class="form-control" name="email" v-validate="'required|email'">
                                    <span v-show="errors.has('email')" class="help is-danger">{{ errors.first('email') }}</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <input v-model="password" id="password" type="password" class="form-control" name="password" v-validate="'required|min:6|max:12'">
                                    <span v-show="errors.has('password')" class="help is-danger">{{ errors.first('password') }}</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                <div class="col-md-6">
                                    <input v-model="passwordconfirm" id="password-confirm" type="password" class="form-control" name="password confirm"  v-validate="'required|min:6|max:12'">
                                    <span v-show="errors.has('password confirm')" class="help is-danger">{{ errors.first('password confirm') }}</span>
                                </div>
                            </div>

                            <div class="form-group" v-if="role === 'student'">
                                <label for="password-confirm" class="col-md-4 control-label">Voucher Code</label>
                                <div class="col-md-6">
                                    <input v-model="voucher" id="voucher" type="text" class="form-control" name="voucher"  v-validate="role=='student' ? 'required' : ''">
                                    <span v-show="errors.has('voucher')" class="help is-danger">{{ errors.first('voucher') }}</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="button" v-on:click="submit()" class="btn btn-primary">
                                        <i v-show="loading" class="fa fa-spinner fa-spin"></i> Register
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
      role: this.userrole,
      company:'',
      loading:false,
      voucher: '',
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    }
  },
  props: ['userrole'],
  created(){
      this.loading = false;
  },
  methods: {
    register() {
      console.log('Register now as' + this.role);
    },
    submit() {
        var vm = this;
        vm.loading = true;
        this.$validator.validateAll().then((result) => {
            if(result){
                if(this.password == this.passwordconfirm){
                    axios.post('/registersubmit', this.$data).then((response)=>{
                            if (response.data['success']) {
                                bootbox.alert({
                                    title:'Notification',
                                    message:'You are successfully registered. Please check your email to activate your account.',
                                    callback: function(result) {
                                        window.location.href="/" ;
                                    }
                                });
                            }
                            else if(response.data['voucher_exists'] === false && this.role != 'administrator'){
                                bootbox.alert({
                                    title:'Invalid Voucher',
                                    message:'It seems that the voucher you have entered is invalid. Please check your voucher and try again. Contact us if the problem persists.'
                                });
                            }else{
                                bootbox.alert({
                                    title:'Notification',
                                    message:'Something went wrong. We could not register you. Please try again or contact the administrators at info@onlinecv.co.za if the issue persists.'
                                });
                            }
                            vm.loading = false;
                        });
                }else{
                    vm.loading = false;
                    bootbox.alert({
                        title:'Passwords doesn\'t match',
                        message:'Passwords entered are not the same. Please ensure both password fields contains the same password.'
                    });
                }
            }else{
                vm.loading = false;
                bootbox.alert({
                    title:'Some fields are required',
                    message:'Please make sure all required fields are completed before registering.'
                });
            }
        });
    },//end submit
}
}
</script>