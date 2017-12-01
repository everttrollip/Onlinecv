<style>
    #datatable > table{
        width: 100%;
    }
</style>
<template>
    <div>
        <div class="row">
            <button class="btn btn-success pull-right" v-on:click="buyVoucherModal=true">Buy Vouchers</button>
        </div>
        <datatable id="datatable" :columns="columns" :rows="voucher_list" :users="users"></datatable>
<!-- Modal Start-->
    <div v-if="buyVoucherModal" class="modal fade in show"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"  @click="buyVoucherModal = false" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Buy Vouchers</h4>
            </div>
            <div class="modal-body">
                <form ref="voucherForm">
                    <div class="form-group">
                        <label class="control-label">Please Select Total Vouchers You'd like to Purchase</label>
                        <span><input type="text" v-model="totalvouchers"><button type="button" v-on:click="increment"><i class="fa fa-arrow-up"></i></button><button type="button" v-on:click="decrement"><i class="fa fa-arrow-down"></i></button></span>
                    </div>
                    <div class="form-group">
                        <p>Amount: {{voucher_price}} x {{totalvouchers}} <h4> Total = R {{voucher_price*totalvouchers}}</h4></p>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"  @click="buyVoucherModal = false" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" v-on:click="submit"> <i v-show="loading" class="fa fa-spinner fa-spin"></i> Submit</button>
            </div>
            </div>
        </div>
    </div>
</div>
</template>
<script>
import DataTable from '../plugins/VoucherDataTable.vue';

export default {
 created(){},
 mounted(){
     this.voucher_list = JSON.parse(this.vouchers);
     axios.get('/users').then((response)=>{
         this.users = response.data;
     });
     axios.get('/get-voucher-price-for-admin').then((response)=>{
         this.voucher_price = response.data[0]['price'];
     });
 },
 components:{
     datatable : DataTable
 },
 props:['vouchers'],
 data(){
     return{
         voucher_list:[],
         users:[],
         buyVoucherModal:false,
         totalvouchers: 0,
         voucher_price:'',
         loading: false,
         columns:[
                {
                    label: 'Voucher',  // Column name
                    field: 'voucher',  // Field name from row
                    numeric: true, // Affects sorting
                    html: false,    // Escapes output if false.
                },
                {
                    label: 'Used',  // Column name
                    field: 'active',  // Field name from row
                    numeric: false, // Affects sorting
                     html: false,    // Escapes output if false.
                },
                {
                    label: 'In Use By',  // Column name
                    field: 'user_using_voucher',  // Field name from row
                    numeric: false, // Affects sorting
                    html: false,    // Escapes output if false.
                },
                {
                    label: 'Date Generated',  // Column name
                    field: 'created_at',  // Field name from row
                    numeric: false, // Affects sorting
                    html: false,    // Escapes output if false.
                },
                {
                    label: 'Payment Status',  // Column name
                    field: 'payment_status',  // Field name from row
                    numeric: false, // Affects sorting
                     html: false,    // Escapes output if false.
                },
         ]
     }
 },
 methods:{
     buyVouchers(){

     },
     increment(){
         this.totalvouchers++;
     },
     decrement(){
         this.totalvouchers--;
     },
     submit(){
         this.loading = true;
         var total_amount = parseFloat(this.totalvouchers * this.voucher_price);
         axios.post('/buy-vouchers', {total_vouchers: this.totalvouchers, total_amount: total_amount}).then((response)=>{
             if(response.data['success']){
                 this.buyVoucherModal = false;
                 bootbox.alert({
                     title:'Success',
                     message:'Your vouchers has been successfully purchased. Please complete the EFT payment to activate them. Check you email for EFT payment details and reference codes or view it under orders.'
                 });
             }else{
                 bootbox.alert({
                     title:'Oops!',
                     message:'Something went wrong. We could not generate your vouchers at this moment. Please try again or contact us if the issue persists.'
                 })
             }
             this.loading = false;
         });
     }
 }
}
</script>

