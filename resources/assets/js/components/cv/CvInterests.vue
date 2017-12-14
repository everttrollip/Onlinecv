<template>
    <div class="box">
        <div class="box-header with-border">
            <i class="fa fa-check"></i>
            <h1 class="box-title large-font">General Interests</h1>

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
            <div class="box-text" v-show="!editable">
                {{generalInterests}}
            </div>
            <textarea v-show="editable" v-model="generalInterests" class="form-control" placeholder="(Tech, Photography, Video Production, Nature, Astronomy)" name="tagline"></textarea>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                student: {},
                generalInterests: '',

                editable: false,
                loading: false
            }
        },
        methods: {
            getStudent() {
                axios.get('/student').then((result)=>{
                    this.student = result.data;
                    this.generalInterests = result.data.general_interests;
                });
            },

            edit() {
                this.editable = false;
                this.student.general_interests = this.generalInterests;
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
            }
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

