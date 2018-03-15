<template>
<div>
     <section class="content-header">
        <h1> Review {{achievements[0].firstname}} {{achievements[0].lastname}}'s Achievements </h1>
       <div style="margin-top:15px;" class="callout callout-info">
            <h4>Reminder!</h4>
            <p>When you are done reviewing {{achievements[0].firstname}} {{achievements[0].lastname}}'s Achievements click on the Complete Review button at the bottom right corner to mark this review as completed.</p>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="box box-primary" id="addNew">
                        <div class="box-header with-border">
                            <h3 class="box-title">Review Achievements</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div v-for="(item, index) in achievements" :key="index">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div>
                                            <i class="fa fa-check" style="color:green; font-size:24px;" v-if="item.reviewed == 1"></i>
                                            <i class="fa fa-warning" style="color:red; font-size:24px;" v-else></i>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="control-label col-md-3">Achievement Title</label>
                                            <div class="col-md-9">
                                                <input class="form-control" v-model="item['title']">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="control-label col-md-3">Date</label>
                                            <div class="col-md-9">
                                                <input class="form-control"  type="text" v-model="item['date']">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="control-label col-md-3">Category</label>
                                            <div class="col-md-9">
                                                <select class="form-control" v-model="item['category']">
                                                    <option value="">Please Select</option>
                                                    <option v-for="cat in categories" :key="cat.id" :value="cat.id">{{cat.name}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="control-label col-md-3">Description</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" v-model="item['description']"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                <div class="panel-footer" style="background-color:white; border-bottom:1px solid #d3e0e9;border-top:none; text-align:right">
                                     <button class="btn btn-success" v-on:click="saveChanges(item)"><i v-if="!loadingAll" class="fa fa-floppy-o"></i><i v-if="loadingAll" class="fa fa-spin fa-spinner"></i> Save Changes</button>
                                </div>
                         </div>
                    </div>
                </div>
            </div>
            <button v-on:click="completeReview()" class="btn btn-info pull-right">Complete Review</button>
        </div>
    </div>
</div>
</template>
<script>
export default {
    created () {
        this.getAllCategories();
    },
    props: ['achievements'],
    data(){
        return{
            loading:false,
            loadingAll:false,
            categories:[],
        }
    },
    methods:{
        getAllCategories(){
            axios.get('/get-all-achievement-categories').then((response)=>{
                this.categories = response.data;
            });
        },
        saveChanges(achievement){
          axios.post('/admin/update-achievement', achievement).then((response)=>{
              if(response.data['success']){
                  bootbox.alert({
                      title: 'Success!',
                      message:'Your changes has been successfully saved.'
                  });
                 this.getStudentAchievements();
              }else{
                  bootbox.alert({
                      title: 'Oops!',
                      message:'Something went wrong, we could not save your changes at this time. Please try again.'
                  });
              }
          }).catch((Exception)=>{
              bootbox.alert({
                      title: 'Oops!',
                      message:'Something went wrong, we could not save your changes at this time. Please try again.'
                  });
          });
        },
        getStudentAchievements() {
            axios.get('/admin/achievements/'+this.achievements[0].student_id).then((result)=>{
                this.achievements = result.data;
            });
        },
        completeReview(){
            axios.get('/submit-review/' + this.achievements[0].student_id).then((response)=>{
                if(response.data['success']){
                    bootbox.alert({
                      title: 'Success!',
                      message:'This request has been completed and marked as reviewed. The achievements will now be displayed on the student\'s dashboard. Thank you!',
                      callback(result){
                          window.location = '../../home';
                      }
                  });
                }
            });
        }
    }
}
</script>
