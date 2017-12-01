<style>
    #datatable > table{
        width: 100%;
    }
</style>
<template>
    <div>
        <datatable id="datatable" :columns="columns" :rows="voucher_list"></datatable>
    </div>
</template>
<script>
import DataTable from '../plugins/VoucherDataTable.vue';

export default {
 created(){},
 mounted(){
     this.voucher_list = JSON.parse(this.vouchers);
 },
 components:{
     datatable : DataTable
 },
 props:['vouchers'],
 data(){
     return{
         voucher_list:[],
         columns:[
                {
                    label: 'Voucher',  // Column name
                    field: 'voucher',  // Field name from row
                    numeric: true, // Affects sorting
                    html: false,    // Escapes output if false.
                },
                {
                    label: 'Active',  // Column name
                    field: 'active',  // Field name from row
                    numeric: false, // Affects sorting
                     html: false,    // Escapes output if false.
                },
                {
                    label: 'In Use By',  // Column name
                    field: 'user',  // Field name from row
                    numeric: false, // Affects sorting
                    html: false,    // Escapes output if false.
                },
                {
                    label: 'Date Generated',  // Column name
                    field: 'created_at',  // Field name from row
                    numeric: false, // Affects sorting
                    html: false,    // Escapes output if false.
                },
         ]
     }
 },
 methods:{

 }
}
</script>

