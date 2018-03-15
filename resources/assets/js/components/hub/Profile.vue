
<style>
.control-label{
    font-weight: normal;
    margin-top:15px;
}
.form-control{
    margin-top:15px;
}
#address{
    height:100px;
}
#description{
    height:150px;
}
.panel-heading{
    font-weight:bold;
    font-size:22px;
}
#save{
    margin-top:20px;
    margin-bottom:10px;
}
#quill-container{
    height:120px;
}
</style>
<template>
        <div class="container">
            <div class="row">
                 <div class="col-md-12">
                     <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Update Your Details</h3>
                            <!-- /.box-header -->
                        </div>
                        <div class="box-body">
                            <img v-if="avatar != '' && avatar != null && avatar != undefined" class="profile-user-img img-responsive img-circle" style="min-height:200px; min-width:200px;" :src="baseUrl + avatar" alt="User profile picture">
                            <img v-if="avatar == '' || avatar == null || avatar == undefined" class="profile-user-img img-responsive img-circle" style="min-height:200px; min-width:200px;" :src="noImage" alt="User profile picture">
                            <form>
                                <div class="form-group">
                                    <label for="name" class="col-lg-2 col-sm-2 control-label">Profile Picture</label>
                                    <div class="form-group">
                                        <div><button style="margin-top:20px; margin-bottom:15px" class="btn btn-info" type="button" @click="toggleShow">Choose Image</button></div>
                                            <my-upload v-show="show" field="img"
                                                @crop-success="cropSuccess"
                                                @crop-upload-success="cropUploadSuccess"
                                                @crop-upload-fail="cropUploadFail"
                                                v-model="show"
                                                :width="200"
                                                :height="200"
                                                url="/hub-upload-profilepic"
                                                :params="params"
                                                :headers="headers"
                                                img-format="png"
                                                lang-type="en"></my-upload>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-lg-2 col-sm-2 control-label"> First Name</label>
                                    <div class="col-lg-10">
                                        <input v-model="hub_details['firstname']" type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname" v-validate="'required|max:45'">
                                        <span v-show="errors.has('firstname')" class="help is-danger">{{ errors.first('firstname') }}</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-lg-2 col-sm-2 control-label">Last Name</label>
                                    <div class="col-lg-10">
                                        <input v-model="hub_details['lastname']" type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname" v-validate="'required|max:45'">
                                        <span v-show="errors.has('lastname')" class="help is-danger">{{ errors.first('lastname') }}</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-lg-2 col-sm-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input v-model="hub_details['email']" type="text" class="form-control" name="email" id="email" placeholder="Email" v-validate="'required|email'">
                                        <span v-show="errors.has('email')" class="help is-danger">{{ errors.first('email') }}</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-lg-2 col-sm-2 control-label">Contact Number</label>
                                    <div class="col-lg-10">
                                        <input v-model="hub_details['contact']" type="text" class="form-control" name="contact" id="contact" placeholder="Contact Number" v-validate="'required|numeric|max:10|min:10'">
                                        <span v-show="errors.has('contact')" class="help is-danger">{{ errors.first('contact') }}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-lg-2 col-sm-2 control-label">Address</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" style="margin-top:15px;" v-model="hub_details['address']" placeholder="Address" v-validate="'required|max:100'" name="address">
                                        <span v-show="errors.has('address')" class="help is-danger">{{ errors.first('address') }}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-lg-2 col-sm-2 control-label">Town/City</label>
                                    <div class="col-lg-10">
                                        <input v-model="hub_details['town']" type="text" class="form-control" name="town" id="town" placeholder="Town" v-validate="'required|max:45'">
                                        <span v-show="errors.has('town')" class="help is-danger">{{ errors.first('town') }}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2 col-sm-2">Province</label>
                                    <div class="col-lg-10">
                                        <select  class="form-control" v-model="hub_details['province']" v-validate="'required'" name="province">
                                            <option>Please Select</option>
                                            <option value="Eastern Cape">Eastern Cape</option>
                                            <option value="Free State">Free State</option>
                                            <option value="Gauteng">Gauteng</option>
                                            <option value="KwaZulu-Natal">KwaZulu-Natal</option>
                                            <option value="Limpopo">Limpopo</option>
                                            <option value="Mpumulanga">Mpumulanga</option>
                                            <option value="Northern Cape">Northern Cape</option>
                                            <option value="North West">North West</option>
                                            <option value="Western Cape">Western Cape</option>
                                            <option value="Nationwide">Nationwide</option>
                                        </select>
                                         <span v-show="errors.has('province')" class="help is-danger">{{ errors.first('province') }}</span>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-lg-2 col-sm-2 control-label">Company Name</label>
                                    <div class="col-lg-10">
                                        <input v-model="hub_details['company']" type="text" class="form-control" name="company" id="company" placeholder="company" v-validate="'required|max:45'">
                                        <span v-show="errors.has('company')" class="help is-danger">{{ errors.first('company') }}</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-lg-2 col-sm-2 control-label">Company description</label>
                                    <div class="col-lg-10">
                                        <div style="width:100%">
                                            <textarea class="form-control" name="description" style="margin-top:15px; height:140px;" type="text" v-model="hub_details['company_description']" v-validate="'max:450'"></textarea>
                                            <span v-show="errors.has('description')" class="help is-danger">{{ errors.first('description') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div style="text-align:center;">
                                    <button type="button" id="save" v-on:click="submitChanges()" class="btn btn-success"><i v-if="loading" class="fa fa-spinner fa-spin"></i> Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</template>

<script>
import myUpload from 'vue-image-crop-upload';
export default{
    created(){},
    props:['hub'],
    mounted(){
        this.hub_details = JSON.parse(this.hub);
        this.getAvatar();
    },
    components:{
        'my-upload': myUpload,
    },
    data(){
        return{
            hub_details:{},
            loading:false,
            logo:'',
            avatar:'',
            baseUrl:'../storage/images/hub/',
            noImage: 'http://www.microhub.co.za/wp-content/uploads/2018/02/no-image.jpeg',
            show: false,
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            params: {
                    _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    name: 'avatar'
			    },
                headers: {
                    smail: '*_~'
                },
                imgDataUrl: '',
        }

    },
    methods:{
         getAvatar(){
          axios.get('/get-hub-avatar/'+this.hub_details['id']).then((response)=>{
              this.avatar = response.data;
          });
        },
        submitChanges:function(){
        var vm = this;
        this.loading = true;
        this.$validator.validateAll().then((result) => {
            if(result){
                axios.post('/update-hub', {data: this.hub_details}).then((response)=>{
                    if(response.data['success'] != false){
                        this.loading = false;
                        bootbox.alert({
                            title:'Success',
                            message:'Your changes was successfully saved'
                        });
                    }else{
                        bootbox.alert({
                            title:'Oops!',
                            message:'Something went wrong. Your changes was not successfully saved. Please try again'
                        });
                        this.loading = false;
                    }
                });
            }else{
                vm.loading = false;
                bootbox.alert({
                    title:'Some fields are required',
                    message:'Please ensure all required fields are completed before submitting'
                });
            }
        });
        },
        toggleShow() {
                this.show = true;
			},
			cropSuccess(imgDataUrl, field){
				console.log('-------- crop success --------');
				this.imgDataUrl = imgDataUrl;
			},
			cropUploadSuccess(jsonData, field){
				console.log('-------- upload success --------');
				console.log(jsonData);
                console.log('field: ' + field);
                this.getAvatar();
			},
			cropUploadFail(status, field){
				console.log('-------- upload fail --------');
				console.log(status);
				console.log('field: ' + field);
			}
    }

}
</script>>