<template>
    <!-- CV Header -->
    <div class="box">
        <div class="box-body flex-container-row">
            <div class="student-image">
                <img v-if="image != '/images/student/'" class="thumbnail" :src="image">
                 <img v-else class="thumbnail" :src="noimage">
            </div>

            <div class="student-name">
                <span class="firstname">{{this.student.firstname}}</span>
                <span class="surname">{{this.student.lastname}}</span>
            </div>

            <div class="student-basic-details">
                <div class="flex-container-row">
                    <div class="flex-container-column">
                        <span class="large-font" v-show="!dobEditable">{{this.student.dob}}</span>
                        <input v-show="dobEditable" v-model="student.dob" class="form-control" type="date">
                        <div class="flex-container-row space-between">
                            <label>Birthdate</label>
                            <span class="edit-icons">
                                <i class="fa fa-spinner fa-spin" v-show="dobLoading"></i>
                                <i class="fa fa-floppy-o" v-show="dobEditable" v-on:click="dobEditable = false; editDob()"></i>
                                <i class="fa fa-pencil-square-o" v-show="!dobEditable & !dobLoading" v-on:click="dobEditable = true"></i>
                            </span>
                        </div>
                    </div>

                    <div class="flex-container-column">
                        <span class="large-font" v-show="!provinceEditable">{{this.student.province}}</span>
                        <v-select v-show="provinceEditable" :options="southAfricanProvinces" v-model="student.province"></v-select>
                        <div class="flex-container-row space-between">
                            <label class="flex-container-row">Province</label>
                            <span class="edit-icons">
                                <i class="fa fa-spinner fa-spin" v-show="provinceLoading" ></i>
                                <i class="fa fa-floppy-o" v-show="provinceEditable" v-on:click="provinceEditable = false; editProvince()"></i>
                                <i class="fa fa-pencil-square-o" v-show="!provinceEditable & !provinceLoading" v-on:click="provinceEditable = true"></i>
                            </span>
                        </div>
                    </div>

                    <div class="flex-container-column">
                        <span :contenteditable="languagesEditable" class="large-font">English, Afrikaans</span>
                        <div class="flex-container-row space-between">
                            <label>Languages spoken</label>
                            <span class="edit-icons">
                                <i class="fa fa-spinner fa-spin" v-show="languagesLoading"></i>
                                <i class="fa fa-floppy-o" v-show="languagesEditable" v-on:click="languagesEditable = false; editLanguages()"></i>
                                <i class="fa fa-pencil-square-o" v-show="!languagesEditable & !languagesLoading" v-on:click="languagesEditable = true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="student-contact-details">
                <div class="info-box email">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text" v-show="!emailEditable">{{this.student.email}}</span>

                        <div class="form-group" v-show="emailEditable" v-bind:class="{ 'has-error': $v.email.$error }">
                            <input v-model="email" class="form-control" placeholder="Email" name="email" @input="$v.email.$touch()">
                            <span class="help-block" v-if="$v.email.$error && !$v.email.required">Email is required</span>
                            <span class="help-block" v-if="$v.email.$error && !$v.email.email">This is not a valid email!</span>
                        </div>

                        <span class="edit-icons">
                            <i class="fa fa-spinner fa-spin" v-show="emailLoading"></i>
                            <i class="fa fa-floppy-o" v-show="emailEditable" v-on:click="editEmail()"></i>
                            <i class="fa fa-pencil-square-o" v-show="!emailEditable & !emailLoading" v-on:click="emailEditable = true"></i>
                        </span>
                    </div>
                </div>

                <div class="info-box phone">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-phone"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text" v-show="!contactEditable">{{this.student.contact}}</span>

                        <div class="form-group" v-show="contactEditable" v-bind:class="{ 'has-error': $v.contact.$error }">
                            <input v-model="contact" class="form-control" placeholder="Mobile Number" name="contact" @input="$v.contact.$touch()">
                            <span class="help-block" v-if="$v.contact.$error && !$v.contact.required">Contact details are required</span>
                            <span class="help-block" v-if="$v.contact.$error && !$v.contact.numeric">Invalid contact details!</span>
                            <span class="help-block" v-if="$v.contact.$error && !$v.contact.maxLength">Contact number is too long</span>
                        </div>

                        <span class="edit-icons">
                            <i class="fa fa-spinner fa-spin" v-show="contactLoading"></i>
                            <i class="fa fa-floppy-o" v-show="contactEditable" v-on:click="editContact()"></i>
                            <i class="fa fa-pencil-square-o" v-show="!contactEditable & !contactLoading" v-on:click="contactEditable = true"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { required, email, maxLength, numeric } from 'vuelidate/lib/validators'
    export default {
        props: ['student'],
        data() {
            return {
                image: null,
                noimage:'../../images/no-image.jpeg',
                loading: false,

                dobEditable: false,
                dobLoading: false,
                provinceEditable: false,
                provinceLoading: false,
                southAfricanProvinces: [
                    'Eastern Cape', 'Free State', 'Gauteng', 'KwaZulu-Natal', 'Limpopo', 'Mpumalanga',
                    'North West', 'Northern Cape', 'Western Cape'
                ],
                languagesEditable: false,
                languagesLoading: false,

                email: '',
                emailEditable: false,
                emailLoading: false,

                contact: 0,
                contactEditable: false,
                contactLoading: false,
            }
        },
        mounted() {
            this.getStudentProfilePic()
        },
        validations: {
            email: {
                required,
                email
            },
            contact: {
                required,
                numeric,
                maxLength: maxLength(10)
            },
            form: ['email', 'contact']
        },
        methods: {
            getStudentProfilePic() {
                axios.get('/student/profile/image').then(
                    (result)=>{
                        this.image = result.data;
                    }
                );
            },

            editDob() {
                var vm = this;
                vm.dobLoading = true;
                this.updateStudent().then(
                    function () {
                        vm.dobLoading = false;
                    },
                    function () {
                        vm.dobLoading = false;
                    }
                );
            },

            editProvince() {
                var vm = this;
                vm.provinceLoading = true;
                this.updateStudent().then(
                    function () {
                        vm.provinceLoading = false;
                    },
                    function () {
                        vm.provinceLoading = false;
                    }
                );
            },

            editLanguages() {
                var vm = this;
                vm.languagesLoading = true;
                this.updateStudent().then(
                    function () {
                        vm.languagesLoading = false;
                    },
                    function () {
                        vm.languagesLoading = false;
                    }
                );
            },

            editEmail() {
                // Validate Email first
                var isValid = this.validate();
                if (isValid) {
                    this.emailEditable = false;
                    this.student.email = this.email;
                    var vm = this;
                    vm.emailLoading = true;
                    this.updateStudent().then(
                        function () {
                            vm.emailLoading = false;
                        },
                        function () {
                            vm.emailLoading = false;
                        }
                    );
                }
            },

            editContact() {
                var isValid = this.validate();
                if (isValid) {
                    this.contactEditable = false;
                    this.student.contact = this.contact;
                    var vm = this;
                    vm.contactLoading = true;
                    this.updateStudent().then(
                        function () {
                            vm.contactLoading = false;
                        },
                        function () {
                            vm.contactLoading = false;
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
    @import '../../../sass/variables';

    .student-image {
        // border: 2px solid blue;
        margin-right: 10px;
        .thumbnail {
            align-self: center;
            display: inline-block;
            max-height: 140px;
            margin-bottom: 0px;
        }
    }

    .student-name {
        // border: 2px solid blue;
        @include flexbox-container(column, wrap, flex-start);

        .firstname,
        .surname {
            font: {
                size: 2.5em;
                weight: bold;
            }
        }

        .firstname {
            color: $brand-primary;
        }

        .surname {
            color: $brand-info-dark;
        }
    }

    .student-basic-details {
        // border: 2px solid blue;
        @include flexbox-container(column, wrap, flex-start);
        flex-grow: 1;
        padding: 0 80px;

        & > .flex-container-row {
            // border: 2px solid red;
            @include flexbox-container(row, wrap, space-between);
            align-items: flex-start;
            & > .flex-container-column {
                // border: 2px solid green;
                align-self: flex-start;
                padding-top: 10px;
            }
        }
    }

    .student-contact-details {
        // border: 2px solid blue;
        @include flexbox-container(row, wrap, center);
        width: 25%;

        .info-box {
            // border: 2px solid red;
            @include flexbox-container(row, wrap, flex-start);
            align-self: center;
            min-height: 30px;
            .info-box-icon {
                // border: 2px solid green;
                @include flexbox-container(column, wrap, center);
                line-height: 60px;
                width: 60px;
                height: 50px;
            }

            .info-box-content {
                // border: 2px solid green;
                @include flexbox-container(row, wrap, space-between);
                // width: 100%;
                flex-grow: 1;
                margin-left: 0;
                .info-box-text {
                    align-self: center;
                    // border: 2px solid red;
                    font: {
                        size: 1.5em;
                    }
                }
            }
        }
    }
</style>
