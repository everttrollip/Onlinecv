<template>
<div>
    <div class="box">
        <div class="box-header with-border">
            <i class="fa fa-graduation-cap"></i>
            <div class="box-title large-font">Post School</div>

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
        <div class="box-body flex-container-column">
            <div class="flex-container-row full-width box-title">
                <span class="primary-text-color large-font">Varsity Exemption</span>
                <label class="primary large-font" v-show="varsityExempt=='YES' & !editable">YES</label>
                <label class="primary large-font" v-show="varsityExempt=='NO' & !editable">NO</label>
                <v-select v-show="editable" :options="exemptOptions" v-model="varsityExempt"></v-select>
            </div>

            <div class="full-width box-title">
                <span class="full-width primary-text-color large-font">Preferred Study Location(s)</span>
                <label class="full-width primary large-font" v-show="!editable" v-for="(location, index) in preferredLocationsForStudy">
                    <span v-if="index == preferredLocationsForStudy.length - 1">{{ location }}</span>
                    <span v-if="index != preferredLocationsForStudy.length - 1">{{ location }}, </span>
                </label>
                <v-select v-show="editable" multiple :options="studyLocations" v-model="preferredLocationsForStudy"></v-select>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        data () {
            return {
                student: {},
                exemptOptions: ["YES", "NO"],
                varsityExempt: "",
                studyLocations: [
                    'Alice', 'Bellville', 'Bhisho', 'Bloemfontein', 'Cape Town', 'Durban', 'East London', 'Ga-Rankuwa',
                    'Grahamstown', 'Johannesburg', 'Mafikeng', 'Mankwe', 'Pietermaritzburg', 'Pinetown', 'Polokwane',
                    'Potchefstroom', 'Pretoria', 'QwaQwa', 'Saldanha Bay', 'Stellenbosch', 'Tygerberg', 'Vanderbijlpark',
                    'Westville'
                ],
                preferredLocationsForStudy: [],

                editable: false,
                loading: false
            }
        },
        methods: {
            getStudent() {
                axios.get('/student').then((result)=>{
                    this.student = result.data;
                    if (result.data.varsity_exempt) {
                        this.varsityExempt = "YES";
                    }
                    else {
                        this.varsityExempt = "NO";
                    }

                    this.preferredLocationsForStudy = result.data.preferred_study_locations.split(",");
                });
            },

            edit() {
                this.editable = false;
                if (this.varsityExempt == "YES") {
                    this.student.varsityExempt = true;
                }
                else {
                    this.student.varsityExempt = false;
                }
                this.student.preferred_study_locations = this.preferredLocationsForStudy;

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
    .box-title {
        justify-content: space-between;
    }

    .box-title > label {
        text-align: right;
    }
</style>

