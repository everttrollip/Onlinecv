<template>
    <div class="box">
        <div class="box-header with-border">
            <i class="fa fa-graduation-cap"></i>
            <div class="box-title large-font">Post School</div>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body flex-container-column">
            <div class="flex-container-row full-width box-title">
                <span class="primary-text-color large-font">Varsity Exemption</span>
                <label class="primary large-font" v-if="student['varsity_exempt'] == 1">YES</label>
                <label class="primary large-font" v-else>NO</label>
            </div>

            <div class="full-width box-title">
                <span class="full-width primary-text-color large-font">Preferred Study Location(s)</span>
                <label class="full-width primary large-font"  v-for="(location, index) in studyLocations">
                    <span v-if="index == studyLocations.length - 1">{{ location }}</span>
                    <span v-if="index != studyLocations.length - 1">{{ location }}, </span>
                </label>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        created(){},
        mounted(){

        },
        props:['student', 'studyLocations'],
        data () {
            return {
            }
        },
        methods: {

        },
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

