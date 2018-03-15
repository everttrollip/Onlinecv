<template>
        <div class="box">
            <div class="box-header with-border">
                <i class="fa fa-lightbulb-o"></i>
                <h1 class="box-title large-font">Experience</h1>
            </div>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <span class="edit-icons">
                    <i class="fa fa-spinner fa-spin" v-show="loading"></i>
                    <i class="fa fa-floppy-o" v-show="experienceEditable" v-on:click="editExperience()"></i>
                    <i class="fa fa-times" v-show="experienceEditable" v-on:click="editExperience = !experienceEditable"></i>
                    <i class="fa fa-pencil-square-o" v-show="!experienceEditable & !loading" v-on:click="experienceEditable = true;"></i>
                </span>
            </div>
            <div class="box-body">
                <div class="col-md-12">
                    <div class="col-md-12 col-lg-4 col-xs-12">
                        <span class="category">Communication</span>
                    </div>
                    <div class="col-md-11 col-lg-7 col-xs-12" id="rating">
                        <el-rate
                            :disabled="!experienceEditable"
                            :max="maxValue"
                            show-score
                            score-template="{value} / 10"
                            v-model="student.communication"
                            :colors="['#99A9BF', '#F7BA2A', '#FF9900']">
                        </el-rate>
                    </div>
                    <div class="col-md-1 col-lg-1 hidden-xs">
                        <i id="ratingIcon" class="fa fa-comments"></i>
                    </div>
                </div>
                <div class="col-md-12">
                   <div class="col-md-12 col-lg-4 col-xs-12">
                        <span class="category">Conceptualization</span>
                    </div>
                     <div class="col-md-11 col-lg-7 col-xs-12" id="rating">
                        <el-rate
                            :disabled="!experienceEditable"
                            :max="maxValue"
                            show-score
                            score-template="{value} / 10"
                           v-model="student.conceptualization"
                            :colors="['#99A9BF', '#F7BA2A', '#FF9900']">
                        </el-rate>
                    </div>
                   <div class="col-md-1 col-lg-1 hidden-xs">
                        <i id="ratingIcon" class="fa fa-lightbulb-o"></i>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-12 col-lg-4 col-xs-12">
                        <span class="category">Creative</span>
                    </div>
                   <div class="col-md-11 col-lg-7 col-xs-12" id="rating">
                        <el-rate
                            :disabled="!experienceEditable"
                            :max="maxValue"
                            show-score
                            score-template="{value} / 10"
                           v-model="student.creativity"
                            :colors="['#99A9BF', '#F7BA2A', '#FF9900']">
                        </el-rate>
                    </div>
                   <div class="col-md-1 col-lg-1 hidden-xs">
                        <i id="ratingIcon" class="fa fa-paintbrush"></i>
                    </div>
                </div>
                <div class="col-md-12">
                     <div class="col-md-12 col-lg-4 col-xs-12">
                        <span class="category">Leadership</span>
                    </div>
                   <div class="col-md-11 col-lg-7 col-xs-12" id="rating">
                        <el-rate
                            :disabled="!experienceEditable"
                            :max="maxValue"
                            show-score
                            score-template="{value} / 10"
                           v-model="student.leadership"
                            :colors="['#99A9BF', '#F7BA2A', '#FF9900']">
                        </el-rate>
                    </div>
                    <div class="col-md-1 col-lg-1 hidden-xs">
                        <i id="ratingIcon" class="fa fa-users"></i>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
    export default {
        props: ['student'],
        data() {
            return {
                experienceEditable: false,
                loading: false,
                maxValue: 10
            }
        },
        methods: {
            editExperience() {
                this.experienceEditable = false;
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
        }
    }
</script>

<style lang="scss" scoped>
    @import '../../../sass/mixins';


@media only screen and (max-width: 768px) {
    /* For mobile phones: */
    #rating{
        margin-top:10px;
        margin-bottom:10px;
        padding:0px;
    }
    #ratingIcon{
        font-size: 24px;
    }
    .el-rate > i{
        font-size: 10px;
    }
}

    #rating{
        margin-top:10px;
        margin-bottom:10px;
    }
    #ratingIcon{
        font-size: 30px;
    }
    .ratings > div > i.fa {
        font-size: 30px;
    }

    .category {
        font: {
            size: 22px;
        }
    }

    .flex-container-row {
        @include flexbox-container(row, wrap, flex-start);
        align-items: center;

        & > span {
            // border: 2px solid green;
            width: 40%;
        }

        & > i {
            // border: 2px solid blue;
            margin-left: auto;
        }

        & > div {
            // border: 2px solid red;
            width: 40%;
        }
    }

    .flex-container-column {
        @include flexbox-container(column, wrap, space-between);
    }
</style>
