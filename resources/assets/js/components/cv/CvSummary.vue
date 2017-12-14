<template>
    <!-- Short I am -->
    <div class="box">
        <div class="box-header with-border">
            <h1 class="flexbox-container-row box-title large-font">
                <div v-show="!gradeEditable">
                    <span>I am</span>
                    <span class="primary-text-color">Grade {{ this.student.grade }}</span>
                </div>
                <div class="flexbox-container-row" v-show="gradeEditable">
                    <span>I am</span>
                    <span class="primary-text-color">Grade </span>
                    <v-select :options="grades" v-model="grade"></v-select>
                </div>
            </h1>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <span class="edit-icons">
                    <i class="fa fa-spinner fa-spin" v-show="loading"></i>
                    <i class="fa fa-floppy-o" v-show="taglineEditable" v-on:click="editGradeAndTagline()"></i>
                    <i class="fa fa-pencil-square-o" v-show="!taglineEditable & !loading" v-on:click="taglineEditable = true; gradeEditable = true;"></i>
                </span>
            </div>
        </div>

        <div class="box-body flex-container-row">
            <div class="tagline-text" v-show="!taglineEditable">{{this.student.tagline}}</div>
            <div class="form-group" v-show="taglineEditable" v-bind:class="{ 'has-error': $v.tagline.$error }">
                <textarea v-model="tagline" class="form-control" placeholder="Tell us a bit about yourself..." name="tagline"></textarea>
                <span class="help-block" v-if="$v.tagline.$error && !$v.tagline.required">This is required</span>
                <span class="help-block" v-if="$v.tagline.$error && !$v.tagline.maxLength">Description can't be more than {{$v.tagline.$params.maxLength.max}} letters.</span>
            </div>
        </div>
    </div>
</template>

<script>
    import { required, maxLength } from 'vuelidate/lib/validators'
    export default {
        props: ['student'],
        data() {
            return {
                grade: '',
                grades: ['8', '9', '10', '11', '12'],
                gradeEditable: false,

                tagline: '',
                taglineEditable: false,

                loading: false
            }
        },
        validations: {
            tagline: {
                required,
                maxLength: maxLength(250)
            },
            form: ['tagline']
        },
        methods: {
            editGradeAndTagline() {
                var isValid = this.validate();
                if (isValid) {
                    this.gradeEditable = false;
                    this.taglineEditable = false;
                    this.student.grade = this.grade;
                    this.student.tagline = this.tagline;
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
                }
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

            validate() {
                this.$v.form.$touch();
                var isValid = !this.$v.form.$invalid
                this.$emit('on-validate', this.$data, isValid)
                return isValid
            }
        }
    }
</script>

<style lang="scss" scoped>
    @import '../../../sass/mixins';

    .flex-container-row {
        // border: 2px solid blue;
        @include flexbox-container(row, wrap, flex-start);
        width: 100%;
        // font-size: 18px;

        & > span {
            // border: 2px solid red;
            // width: 100%;
            padding-right: 5px;
        }
    }

    .tagline-text {
        font: {
            size: 24px;
        }
    }

    .form-group {
        // border: 2px solid red;
        width: 100%;
    }

</style>

