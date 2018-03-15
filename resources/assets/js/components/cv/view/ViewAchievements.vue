<template>
    <div class="box">
        <div class="box-header with-border">
            <i class="fa fa-map-signs"></i>
            <div class="box-title large-font">Achievements</div>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div v-if="achievements.length == 0">
                No achievements to display
            </div>
            <div v-else style="width:100%">
                <timeline :achievements="achievements"></timeline>
            </div>
        </div>
    </div>
</template>
<script>
import timeline from '../../plugins/AchievementsTimeLine';

export default {
    created(){},
    components:{
        timeline
    },
    props:['achievements'],
    data() {
            return {
                credit:'',
                canEdit:false,
                canAdd:false,
                title:'',
                description:'',
                date:'',
            }
        },
        methods: {

        },
        mounted() {

        }

}
</script>
<style>

</style>

