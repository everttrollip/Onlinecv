<template>
    <div class="box">
        <div class="box-header with-border">
            <i class="fa fa-map-signs"></i>
            <div class="box-title large-font">Career Interests</div>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <span class="edit-icons">
                    <i class="fa fa-spinner fa-spin" v-show="loading"></i>
                    <i class="fa fa-floppy-o" v-show="editable" v-on:click="edit()"></i>
                    <i class="fa fa-pencil-square-o" v-show="!editable & !loading" v-on:click="editable = true;"></i>
                </span>
            </div>
        </div>
        <div class="box-body flex-container-row">
            <div class="box-text" v-show="!editable" v-for="(interest, index) in careerInterests">
                <span v-if="index == careerInterests.length - 1">{{ interest }}</span>
                <span v-if="index != careerInterests.length - 1">{{ interest }},&nbsp;</span>
            </div>
            <v-select v-show="editable" multiple :options="careerOptions" v-model="careerInterests"></v-select>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                student: {},
                careerOptions: [
                    "Arts and Performance",
                    "Beauty and Cosmetics",
                    "Finanaces and Bussiness",
                    "Technoglogy and Science",
                    "Agriculture"
                ],
                careerInterests: [],

                editable: false,
                loading: false
            }
        },
        methods: {
            getStudent() {
                axios.get('/student').then((result)=>{
                    this.student = result.data;
                    this.careerInterests = result.data.career_interests.split(',');
                });
            },

            edit() {
                this.editable = false;
                this.student.career_interests = this.careerInterests;
                var vm = this;
                vm.loading = true;
                this.updateStudent().then(
                    function () {
                        vm.loading = false;
                    },
                    function () {
                        vm.loading = false;
                    }
                );
            },

            updateStudent() {
                return new Promise((resolve, reject) => {
                    axios.post('/student/profile/update', this.student).then(
                        response => {
                            resolve(response);
                        },
                        error => {
                            bootbox.alert({
                                title:'Notification', message:'Something went wrong. We could not update your profile. Please try again or contact the administrators at info@onlinecv.co.za if the issue persists.'
                            });
                            reject(error);
                        }
                    );
                });
            },
        },
        mounted() {
            this.getStudent();
        }
    }
</script>

<style lang="scss" scoped>
    .flex-container-row {
        justify-content: flex-start;
    }
</style>

