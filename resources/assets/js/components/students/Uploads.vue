
<template>
  <div>
    <div class="upload">
      <ul style="margin-top:15px; margin-left:15px">
        <li v-for="(file, index) in files" :key="file.id">
          <span>{{file.name}}</span> -
          <span>{{file.size}}</span> -
          <span v-if="file.error">{{file.error}}</span>
          <span v-else-if="file.success">success</span>
          <span v-else-if="file.active">active</span>
          <span v-else-if="file.active">active</span>
          <span v-else></span>
        </li>
      </ul>
      <div class="example-btn" style="margin-top:15px; margin-left:15px;">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
        <file-upload
            :headers="headers"
            :data="params"
            class="btn btn-primary"
            post-action="/student-upload-file"
            extensions="gif,jpg,jpeg,png,webp,pdf"
            accept="image/png,image/gif,image/jpeg,image/webp,application/pdf"
            :multiple="false"
            :size="1024 * 1024 * 10"
            v-model="files"
            @input-filter="inputFilter"
            @input-file="inputFile"
            ref="upload">
          <i class="fa fa-plus"></i>
          Select File
        </file-upload>
        <button type="button" class="btn btn-success" v-if="!$refs.upload || !$refs.upload.active" @click.prevent="$refs.upload.active = true">
          <i class="fa fa-arrow-up" aria-hidden="true"></i>
          Start Upload
        </button>
        <button type="button" class="btn btn-danger"  v-else @click.prevent="$refs.upload.active = false">
          <i class="fa fa-stop" aria-hidden="true"></i>
          Stop Upload
        </button>
      </div>
    </div>
    <div style="margin-top:25px; margin-left:15px">
        <h4>Uploaded Files</h4>
        <div class="table">
            <table class="table table-responsive">
            <thead class="thead">
                <tr>
                <th>#</th>
                <th>File Name</th>
                <th>File Size</th>
                <th>Uploaded On</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(file, index) in uploads" :key="file.id">
                    <td></td>
                    <td>{{file.file}}</td>
                    <td>{{file.filesize}} bytes</td>
                    <td>{{file.created_at}}</td>
                    <td>
                        <a href="javascript:;" v-on:click="getFile(file.file)" style="margin-right:10px;"><i class="fa fa-file"></i> View</a>
                        <a href="javascript:;" v-on:click="remove(file)"><i class="fa fa-times"></i> Remove</a>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
    <el-dialog
    :visible.sync="dialogVisible"
    width="80%"
    title="File Preview"
    >
        <div style="text-align:center; width:100%">
            <div id="imageViewer">
                <img :src="retrieved">
            </div>
        </div>
         <span slot="footer" class="dialog-footer">
            <el-button @click="dialogVisible = false">Close</el-button>
            <el-button type="primary" v-on:click="downloadFile(fileToDownload)">Download</el-button>
        </span>
    </el-dialog>
    </div>
  </div>
</template>
<style>
.example-simple label.btn {
  margin-bottom: 0;
  margin-right: 1rem;
}
</style>

<script>
import FileUpload from 'vue-upload-component'
export default {
  components: {
    FileUpload,
  },
  mounted(){
      this.uploads = JSON.parse(this.fileuploads);
      this.user = JSON.parse(this.userdata);
  },
  props:['fileuploads', 'userdata'],
  data() {
    return {
      files: [],
      retrieved:'',
      fileToDownload:'',
      user:'',
      uploads:[],
       dialogVisible: false,
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      params: {
        _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      },
       headers: {
            smail: '*_~'
        },
    }
  },
  methods: {
    inputFilter(newFile, oldFile, prevent) {
      if (newFile && !oldFile) {
        if (/(\/|^)(Thumbs\.db|desktop\.ini|\..+)$/.test(newFile.name)) {
          return prevent()
        }
        if (/\.(php5?|html?|jsx?)$/i.test(newFile.name)) {
          return prevent()
        }
      }
    },
    inputFile(newFile, oldFile) {
      if (newFile && !oldFile) {
        // add
        console.log('add', newFile)
      }
      if (newFile && oldFile) {
        // update
        console.log('update', newFile)
      }
      if (!newFile && oldFile) {
        // remove
        console.log('remove', oldFile)
      }
    },
    downloadFile(fileToDownload){
        axios.get('/get-file/' + fileToDownload, {responseType: 'arraybuffer'}).then(function(response) {
                        let blob = new Blob([response.data], { type:   'application/pdf' } )
                        let link = document.createElement('a')
                        link.href = window.URL.createObjectURL(blob)
                        link.download = fileToDownload
                        link.click();
        });
        this.dialogVisible = false;
    },
    getFile(filename){
        var vm = this;
        this.fileToDownload = filename;
        if (!filename.includes('.pdf')){
            this.retrieved = '/storage/uploads/user/' + this.user.id + '/' + filename;
            this.dialogVisible = true;
        }else{
            bootbox.confirm({
                title:'Can\'t preview pdfs',
                message:'We\'re sorry but pdfs can\'t be previewed. Do you want to download this file instead?',
                callback(result){
                    if(result){
                        vm.downloadFile(vm.fileToDownload);
                    }
                }
            });
        }
    },
    remove(file){
        var vm = this;
       axios.post('/remove-file', {file: file}).then((response)=>{
           if(response.data['success']){
               bootbox.alert({
                   title:'Success',
                   message:'The selected file has been successfully removed'
               });
               vm.reloadFiles();
           }else{
               bootbox.alert({
                   title:'Oops!',
                   message:'Something went wrong. We could not remove the selected file. Please try again.'
               });
           }
       });
    },
    reloadFiles(){
        axios.get('/get-user-uploads').then((response)=>{
            this.fileuploads = response.data;
        });
    }
  }
}
</script>
<style>
#imageViewer{
    text-align:center;
    width: 600px;
    padding:auto;
    margin:auto;
}

#imageViewer > img{
    width: 600px;
    padding:auto;
    margin:auto;
}
</style>