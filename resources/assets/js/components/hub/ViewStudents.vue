<template>
    <div class="col-md-12">
        <div id="filterForm" style="margin-bottom:25px">
            <div class="form-group col-md-12">
                <h4 class="col-md-12 col-xs-12">Search All Students</h4>
                <div class="col-md-6 col-xs-6">
                    <div class="input-group">
                        <input name="criteria" type="text" class="form-control" value="" v-model="filter">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button" v-on:click="filterData" id="filter_search">
                            <i style="color:white" v-show="loading" class="fa fa-spinner fa-spin"></i> Search Students</button>
                         </span>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6">
                    <div class="input-group">
                        <select name="criteria" type="text" class="form-control" value="" v-model="provinceFilter">
                                <option value="">All</option>
                                <option value="Eastern Cape">Eastern Cape</option>
                                <option value="Free State">Free State</option>
                                <option value="Gauteng">Gauteng</option>
                                <option value="KwaZulu-Natal">KwaZulu-Natal</option>
                                <option value="Limpopo">Limpopo</option>
                                <option value="Mpumalanga">Mpumulanga</option>
                                <option value="Northern Cape">Northern Cape</option>
                                <option value="North West">North West</option>
                                <option value="Western Cape">Western Cape</option>
                                <option value="Nationwide">Nationwide</option>
                        </select>
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button" v-on:click="filterDataByProvince" id="filter_search">
                            <i style="color:white" v-show="loading" class="fa fa-spinner fa-spin"></i> Search By Province</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-xs-6 col-lg-2" v-for="student in students" v-if="student.active == '1'" :key="student.id">
            <el-card :body-style="{ padding: '0px' }">
                <img v-if="student.avatar != null && student.avatar != undefined && student.avatar!= ''" :src="imageUrl + '/student/' + student.avatar" class="image">
                <img v-else :src="noImage" class="image">
                <div style="padding: 14px;">
                    <h5 id="nameHeading">{{student.firstname}} {{student.lastname}}</h5>
                    <div class="bottom clearfix">
                        <button class="btn btn-block btn-primary" style="margin-top:10px;" v-on:click="viewCV(student.student_id)">View CV <i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
            </el-card>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.students = JSON.parse(this.studentdata);
            this.all_students = JSON.parse(this.studentdata);

        },
        props: ['studentdata'],
        data() {
            return {
                students: [],
                all_students:[],
                imageUrl: './storage/images/',
                noImage: 'http://www.microhub.co.za/wp-content/uploads/2018/02/no-image.jpeg',
                filter:'',
                provinceFilter:'',
            }
        },
        methods: {
            getAllStudents() {
                axios.get('/get-all-students').then((response) => {
                    this.students = response.data;
                });
            },
            viewCV(id) {
                var url = '/view-student-cv/' + id;
                window.location = url;
            },
            filterData(){
                var students = this.all_students;
                var filtered = new Array();
                var vm = this;
                if(this.filter != "" && this.filter != null){
                    for(var i = 0; i < students.length; i++){
                        var student = students[i];
                        if(student.firstname == this.filter || student.firstname.toLowerCase() == this.filter.toLowerCase() || student.firstname.includes(this.filter) || student.lastname.toLowerCase() == this.filter.toLowerCase()){
                            filtered.push(student);
                        }
                    }
                      vm.students = filtered;
                }else{
                    vm.students = vm.all_students;
                }
            },
            filterDataByProvince(){
                var students = this.all_students;
                var filtered = new Array();
                var vm = this;
                if(this.provinceFilter != "" && this.provinceFilter != null){
                    for(var i = 0; i < students.length; i++){
                        var student = students[i];
                        if(student.province == this.provinceFilter){
                            filtered.push(student);
                        }
                    }
                      vm.students = filtered;
                }else{
                    vm.students = vm.all_students;

                }
            }
        }
    }
</script>

<style>
    #viewbutton {
        float: right;
    }

    #nameHeading {
        font-size: 16px;
        font-weight: bold;
    }

    .image {
        width: 100%;
        display: block;
        padding: auto;
        margin: auto;
    }
</style>