<template>
    <div>
        <section class="content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="box box-primary">
                            <div class="box-header with-border">
                            <h3 class="box-title">Contact Us</h3>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <form>
                                    <div class="form-group">
                                        <label class="control-label">Subject</label>
                                        <input class="form-control" placeholder="Subject" v-model="subject">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Message</label>
                                        <textarea style="height:280px" class="form-control" v-model="message"></textarea>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary" type="button" v-on:click="submit"> <i v-if="loading" class='fa fa-spinner fa-spin'></i> Send</button>
                                    </div>
                                </form>
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

    },
    data(){
        return{
            message:'',
            subject:'',
            loading:false,
        }
    },
    methods:{
        submit(){
            this.loading = true;
            axios.post('/send-contact-us-message', {message: this.message, subject: this.subject}).then((response)=>{
                if(response.data['success']){
                    bootbox.alert({
                        title:'Success',
                        message:'Your message has been successfully sent. Please allow up to 3 days for us to get back to you - OnlineCV Team'
                    });
                }else{
                    bootbox.alert({
                        title:'Oops',
                        message:'Something went wrong, we could not deliver your message at this time. Please try again or alternatively contact us at it@microhub.co.za.'
                    });
                }
                this.loading = false;
            });
        }
    }
}
</script>