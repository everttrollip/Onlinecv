<template>
    <div class="container">
         <div class="row">
                <div class="col-md-12" style="margin-top:15px">
                    <button id="buy" class="btn btn-success pull-right" v-on:click="buyCreditModal=true">Buy Credits</button>
                </div>
            </div>
        <div class="row">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">All Credits</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table">
                        <table class="table table-default">
                            <thead>
                                <tr>
                                    <th>Credit</th>
                                    <th>Purchase Date</th>
                                    <th>Available for Use</th>
                                    <th>Used On</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="credit in allcredits" :key="credit.id">
                                    <td><a  href="javascript:;">{{credit['credit_token']}}</a></td>
                                    <td><a  href="javascript:;">{{credit['created_at']}}</a></td>
                                    <td><a id="awaiting" v-if="credit.available == 1 && isUnpaid(credit.order_id)"  href="javascript:;">Awaiting Payment</a>
                                        <a v-if="credit.available == 1 && !isUnpaid(credit.order_id)" id="available">Yes</a>
                                        <a v-if="credit.available == 0" id="unavailable">No</a>
                                    </td>
                                    <td><a  href="javascript:;">{{credit['updated_at']}}</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p v-if="allcredits.length == 0 ">No credits to display</p>
                </div>
            </div>
            <!-- Modal Start-->
            <div v-if="buyCreditModal" class="modal fade in show"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"  @click="buyCreditModal = false" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Buy Vouchers</h4>
                    </div>
                    <div class="modal-body">
                        <form ref="voucherForm">
                            <div class="form-group">
                                <h4>Please select the total vouchers you'd like to purchase</h4>
                                 <el-input-number v-model="totalCredits" :min="1" :max="100"></el-input-number>
                            </div>
                            <div class="form-group">
                                <h4> Purchase Price per Credit: R {{price}}</h4>
                                <h4> Total Amount = <span style="color:#3097D1">R {{price*totalCredits}}</span></h4>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"  @click="buyCreditModal = false" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" v-on:click="submit"> <i v-show="loading" class="fa fa-spinner fa-spin"></i> Submit</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
  created(){},
  mounted(){
      this.allcredits = JSON.parse(this.credits);
      this.unpaidCredits = JSON.parse(this.unpaid);
      this.getCreditPrice();
  },
  props:['credits', 'unpaid'],
  data(){
      return{
          allcredits : [],
          unpaidCredits :[],
          buyCreditModal: false,
          totalCredits:'',
          price:'',
          loading:false,

      }
  },
  methods:{
      getAllCredits(){
          axios.get('/student/get-my-credits').then((response)=>{
              this.allcredits = response.data['credits'];
              this.unpaidCredits = response.data['unpaid'];
          });
      },
      getCreditPrice(){
          axios.get('/get-credit-price/edit').then((response)=>{
              this.price = response.data[0]['price'];
          });
      },
      increment(){
          this.totalCredits++;
      },
      decrement(){
          this.totalCredits--;
      },
      submit(){
        this.loading = true;
        var total_amount = parseFloat(this.totalCredits * this.price);
        axios.post('/student/buy-credits', {totalCredits: this.totalCredits, total_amount: total_amount}).then((response)=>{
             if(response.data['success']){
                this.buyCreditModal = false;
                this.getAllCredits();
                 bootbox.alert({
                     title:'Success',
                     message:'Your credits has been successfully purchased. Please complete the EFT payment to activate them. Check you email for EFT payment details and reference codes or view it under orders.'
                 });
             }else{
                 bootbox.alert({
                     title:'Oops!',
                     message:'Something went wrong. We could not generate your credits at this moment. Please try again or contact us if the issue persists.'
                 })
             }
             this.loading = false;
         });
      },
      isUnpaid(order_id){
         var flag = 0;
         for(var i =0; i < this.unpaidCredits.length; i++){
             if(this.unpaidCredits[i].order_id == order_id){
                 flag = true;
             }
         }
         console.log(flag);
         return flag;
      }
  }

}
</script>
<style>
    #unavailable{
        color:red;
    }
    #available{
        color:green;
    }
    #awaiting{
        color:orange;
    }
    #buy{
        margin-bottom:15px;
    }
</style>
