<template>
    <div class="box">
        <div class="box-header with-border">
            <i class="fa fa-map-signs"></i>
            <div class="box-title large-font">Career Interests</div>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <i class="fa fa-pencil-square-o"></i>
            </div>
        </div>
        <div class="box-body">
            <div class="full-width box-title large-font primary-text-color" v-for="item in careerInterests" >
                {{item}}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                careerInterests: []
            }
        },
        methods: {
            getStudentCareerInterests() {
                axios.get('/student/careerinterests').then((result)=>{
                    this.careerInterests = result.data.split(',');
                });
            }
        },
        mounted() {
            this.getStudentCareerInterests();
        }
    }
</script>
