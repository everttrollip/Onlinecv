<template>
    <div class="box">
        <div class="box-header with-border">
            <i class="fa fa-link"></i>
            <h1 class="box-title large-font">Engagement</h1>

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
            <div class="flex-container-column">
                <i class="fa fa-paint-brush"></i>
                <i class="fa fa-futbol-o"></i>
                <i class="fa fa-ticket"></i>
            </div>

            <div class="flex-container-column">
                <label class="primary" v-show="!editable">Arts and Culture activities</label>
                <input class="form-control" v-show="editable" v-model="arts" type="number" min="0" max="10">
                <label class="primary" v-show="!editable">Sports activities</label>
                <input class="form-control" v-show="editable" v-model="sports" type="number" min="0" max="10">
                <label class="primary" v-show="!editable">Events</label>
                <input class="form-control" v-show="editable" v-model="events" type="number" min="0" max="10">
            </div>
            <horizontal-bar-chart :data="data"></horizontal-bar-chart>
        </div>
    </div>
</template>

<script>
    import HorizontalBarChart from './../../HorizontalBarChart.js'
    export default {
        components: {
            HorizontalBarChart
        },
        data () {
            return {
                arts: 0,
                sports: 0,
                events: 0,
                student: {},
                data: [],

                editable: false,
                loading: false
            }
        },
        methods: {
            getStudent() {
                axios.get('/student').then((result)=>{
                    this.student = result.data;
                    this.arts = result.data.arts;
                    this.data.push(this.arts);

                    this.sports = result.data.sports;
                    this.data.push(this.sports);

                    this.events = result.data.events;
                    this.data.push(this.events);
                });
            },

            edit() {
                this.editable = false;
                this.student.arts = this.arts;
                this.student.sports = this.sports;
                this.student.events = this.events;

                this.data = [];
                this.data.push(this.arts);
                this.data.push(this.sports);
                this.data.push(this.events);

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
    .box-body > div > .fa {
        // border: 2px solid blue;
        font-size: 40px;
    }

    .box-body > div > label {
        // border: 2px solid blue;
        font-size: 24px;
    }
</style>


