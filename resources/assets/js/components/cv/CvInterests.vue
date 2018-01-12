<template>
    <div class="box">
        <div class="box-header with-border">
            <i class="fa fa-check"></i>
            <h1 class="box-title large-font">General Interests</h1>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <i class="fa fa-pencil-square-o"></i>
            </div>
        </div>
        <div class="box-body flex-container-row">
            <div class="box-text" v-for="(interest, index) in generalInterests">
                <span v-if="index == generalInterests.length - 1">{{ interest }}</span>
                <span v-if="index != generalInterests.length - 1">{{ interest }},&nbsp;</span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                student: {},
                generalInterests: []
            }
        },
        methods: {
            getStudent() {
                axios.get('/student').then((result)=>{
                    this.generalInterests = result.data.general_interests.split(",");
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

