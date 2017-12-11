<template>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Getting Started</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
        </div>

        <div class="box-body">
            <vue-tabs active-tab-color="#3498db"
                    active-text-color="white"
                    type="pills"
                    :start-index="1"
                    direction="vertical">
                <v-tab class="flex-container-column" icon="fa fa-user">
                    <div class="message">
                        Make sure all your profile details have been updated in order to help us generate your CV!
                    </div>
                    <div class="navigation-buttons">
                        <a :href="profilehref" class="btn btn-default btn-flat">Update Profile</a>
                    </div>
                </v-tab>

                <v-tab class="flex-container-column" icon="fa fa-cogs">
                    <div class="message">
                        View and edit your CV before submission
                    </div>
                    <div class="navigation-buttons">
                        <a :href="cvhref" class="btn btn-default btn-flat">View/Edit CV</a>
                    </div>
                </v-tab>

                <v-tab class="flex-container-column" icon="fa fa-check">
                    <div class="message">
                        If you are happy with your CV, and you've uploaded all the required documents, submit your CV for evaluation.
                    </div>
                    <div class="navigation-buttons">
                        <a :href="cvhref" class="btn btn-default btn-flat">Submit</a>
                    </div>
                </v-tab>
            </vue-tabs>
        </div>

        <div class="box-footer">
        </div>
    </div>
</template>

<script>
import {VueTabs, VTab} from 'vue-nav-tabs'

import 'vue-nav-tabs/themes/vue-tabs.css'
    export default {
        data() {
            return {
                activeItem: 'profile',

                cvhref: '/student/cv',
                profilehref: '/profile/',
                userId: -1
            }
        },
        mounted() {
            axios.get('/user').then((result)=>{
                this.userId = result.data.user_id;
                this.profilehref = this.profilehref + this.userId;
            });
        },
        components: {
            VueTabs,
            VTab
        },
        methods: {
            isActive(menuItem) {
                return this.activeItem === menuItem;
            },
            setActive(menuItem) {
                this.activeItem = menuItem;
            }
        }
    }
</script>

<style lang="scss">
    .tab-content {
        // border: 2px solid blue;
        padding-left: 10px;
        width: 100%;
    }

    .tab-container {
        // border: 2px solid orange;
        height: 100%;
    }

    .message {
        // border: 2px solid red;
    }

    .navigation-buttons {
        // border: 2px solid green;
    }
</style>


