<template>
<div>
  <div v-if="hasCredit">
    <section class="content-header">
        <h1> Add New Achievements and Edit Existing Achievements </h1>
       <div style="margin-top:15px;" class="callout callout-info">
            <h4>Reminder!</h4>
            <p>After adding and editing your achievements click on the submit for review button in the right bottom corner of the page. This will submit them for reiew and display them on your CV after it has been reviewed. Remember this will lock your acheivements and you won't be able to edit or add new achievements without purchasing a credit.</p>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <h2> Add New Achievements</h2>
                    <div class="box box-primary" id="addNew">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add New Achievement</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="form-horizontal col-md-12">
                                <div class="form-group col-md-12">
                                    <label class="control-label">Achievement Title</label>
                                    <input type="text" class="form-control" placeholder="Title" v-model="title">
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label">Achievement Title</label>
                                    <input type="date" class="form-control" v-model="date">
                                </div>
                                 <div class="form-group col-md-12">
                                    <label class="control-label">Category</label>
                                        <select class="form-control" v-model="category">
                                            <option value="">Please Select</option>
                                            <option v-for="cat in categories" :key="cat.id" :value="cat.id">{{cat.name}}</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label">Add a description of this achievement</label>
                                    <textarea class="form-control" v-model="description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button class="btn btn-success pull-right" v-on:click="saveNew()"><i v-if="!loading" class="fa fa-floppy-o"></i><i v-if="loading" class="fa fa-spin fa-spinner"></i> Save</button>
                        </div>
                    </div>
                    <h2>Edit Existing Achievements</h2>
                    <div class="box box-primary" id="addNew">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Existing Achievements</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div v-for="(item, index) in achievements" :key="index">
                                <div class="panel">
                                    <div class="panel-body">
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
                                                <select class="form-control"  v-model="item['category']">
                                                    <option v-for="cat in categories" :value="cat.id" :key="cat.id">{{cat.name}}</option>
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
                    <button v-on:click="submitForReview()" class="btn btn-info pull-right">Submit For Review</button>
                </div>
            </div>
        </div>
    </section>
  </div>
    <div v-else>
        <section class="content-header">
        <h1> Add New Achievements and Edit Existing Achievements </h1>
       <div style="margin-top:15px;" class="callout callout-danger">
            <h4>No Credits Found!</h4>
            <p>To edit your achivements or to add new achievements you need to first purchase credits from your local administrator. You can purchase credits by heading over to the "Credits" section on the menu on the left</p>
        </div>
    </section>
    </div>
  </div>
</template>
<script>
export default {
  created(){
      this.CheckIfCanEdit();
      this.getAllCategories();
  },
  props:['achievements'],
  data(){
      return{
          title:'',
          description:'',
          category:'',
          date:'',
          loading:false,
          loadingAll:false,
          categories:[],
          hasCredit:'',
      }
  },
  methods:{
       getAllCategories(){
            axios.get('/get-all-achievement-categories').then((response)=>{
                this.categories = response.data;
            });
        },
      CheckIfCanEdit(){
        axios.get('/check-student-credit').then((response)=>{
           this.hasCredit = response.data['credit'];
        });
      },
       getStudentAchievements() {
                axios.get('/student/achievements').then((result)=>{
                    this.achievements = result.data;
                });
            },
      saveNew(){
          this.loading = true;
          axios.post('/student/submit-new-achievement', {title: this.title, description: this.description, date:this.date, category: this.category}).then((response)=>{
              if(response.data['success']){
                  this.getStudentAchievements();
                  this.loading = false;
                  this.title ='';
                  this.date = '';
                  this.description = '';
              }else{
                  bootbox.alert({
                      title: 'Oops!',
                      message:'Something went wrong, we could not save your achievement at this time. Please try again.'
                  });
              }
          }).catch((error)=>{
               bootbox.alert({
                      title: 'Oops!',
                      message:'Something went wrong, we could not save your achievement at this time. Please try again.'
                  });
          });
      },
      saveChanges(achievement){
          axios.post('/student/update-achievement', achievement).then((response)=>{
              if(response.data['success']){
                  bootbox.alert({
                      title: 'Success!',
                      message:'Your changes has been successfully saved.'
                  });
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
      submitForReview(){
          axios.get('/submit-review-request').then((response)=>{
              if(response.data['success']){
                  bootbox.alert({
                      title:'Success!',
                      message:'Your changes has been submitted for review al will shortly be visible on your CV.'
                  });
              }else{
                  bootbox.alert({
                      title:'Oops!',
                      message:'Something went wrong. We could not submit your changes for review at this time. Please try again.'
                  });
              }
          }).catch((Exception)=>{
               bootbox.alert({
                      title:'Oops!',
                      message:'Something went wrong. We could not submit your changes for review at this time. Please try again.'
                  });
          });
      }
  }

}
</script>
<style>
    #addNew{
        margin-top:25px;
    }
</style>


