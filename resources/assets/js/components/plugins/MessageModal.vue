<template>
<!-- Modal -->
<div v-if="show" class="modal fade in show"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Message</h4>
        </div>
        <div class="modal-body">
            <form ref="editForm">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                           <textarea v-model="message"></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default"  @click="show = false" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" v-on:click="saveChanges">Save changes</button>
        </div>
        </div>
    </div>
</div> <!-- End Message Modal -->
</template>
<script>
export default{
    created(){},
    props:['showMessageModal'],
    data(){
        return{
            message:'',
            show : this.showMessageModal
        }
    }
}
</script>