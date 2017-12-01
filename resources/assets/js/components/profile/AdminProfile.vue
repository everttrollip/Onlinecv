
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
                    <div class="panel panel-default">
                        <div class="panel-heading">Update Your Details</div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                                    <label for="name" class="col-lg-2 col-sm-2 control-label"> First Name</label>
                                    <div class="col-lg-10">
                                    <input v-model="admin_details['firstname']" type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname"></div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-lg-2 col-sm-2 control-label">Last Name</label>
                                    <div class="col-lg-10">
                                    <input v-model="admin_details['lastname']" type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname"></div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-lg-2 col-sm-2 control-label">Date of Birth</label>
                                    <div class="col-lg-10">
                                    <input v-model="admin_details['dob']" type="date" class="form-control" name="dob" id="dob" placeholder="Date of Birth"></div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-lg-2 col-sm-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                    <input v-model="admin_details['email']" type="text" class="form-control" name="email" id="email" placeholder="Email"></div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-lg-2 col-sm-2 control-label">Contact Number</label>
                                    <div class="col-lg-10">
                                    <input v-model="admin_details['contact']" type="text" class="form-control" name="contact" id="contact" placeholder="Contact Number"></div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-lg-2 col-sm-2 control-label">Address</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" style="margin-top:15px;" v-model="admin_details['address']" placeholder="Address"></input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-lg-2 col-sm-2 control-label">Town/City</label>
                                    <div class="col-lg-10">
                                    <input v-model="admin_details['town']" type="text" class="form-control" name="town" id="town" placeholder="Town"></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2 col-sm-2">Province</label>
                                    <div class="col-lg-10">
                                        <select  class="form-control" v-model="admin_details['province']">
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
                                        </div>
                                </div>
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
                                                url="/admin-upload-profilepic"
                                                :params="params"
                                                :headers="headers"
                                                img-format="png"
                                                lang-type="en"></my-upload>
                                            <img :src="imgDataUrl">
                                        </div>
                                </div>
                                <div style="text-align:center;">
                                    <button type="button" id="save" v-on:click="submitChanges()" class="btn btn-success">Save Changes</button>
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
    props:['admin'],
    mounted(){
        this.admin_details = JSON.parse(this.admin);
    },
    components:{
        'my-upload': myUpload,
    },
    data(){
        return{
            admin_details:{},
            logo:'',
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
        submitChanges:function(){
          axios.post('/update-administrator', {data: this.admin_details}).then((response)=>{
              if(response.data['success'] != false){
                  bootbox.alert({
                      title:'Success',
                      message:'Your changes was successfully saved'
                  });
              }else{
                  bootbox.alert({
                      title:'Oops!',
                      message:'Something went wrong. Your changes was not successfully saved. Please try again'
                  });
              }
          })
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
			},
			cropUploadFail(status, field){
				console.log('-------- upload fail --------');
				console.log(status);
				console.log('field: ' + field);
			}
    }

}
</script>>