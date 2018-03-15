<template>
<div class="row">
    <div class="box">
        <div class="box-header with-border">
            <i class="fa fa-map-signs"></i>
            <div class="box-title large-font">Achievements</div>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <i v-show="!canEdit && !loading" v-on:click="editAchievements()" class="btn btn-box-tool fa fa-pencil-square-o"></i>
            </div>
        </div>
        <div class="box-body">
            <div v-if="achievements.length == 0 && !canEdit && !canAdd">
                No achievements to display
            </div>
            <div v-else style="width:100%">
                <timeline :achievements="achievements"></timeline>
            </div>
        </div>
    </div>
</div>
</template>
<script>
import timeline from '../plugins/AchievementsTimeLine';

export default {
    created(){},
    components:{
        timeline
    },
    data() {
            return {
                achievements: [],
                credit:'',
                canEdit:false,
                canAdd:false,
                title:'',
                description:'',
                date:'',
            }
        },
        methods: {
            getStudentAchievements() {
                axios.get('/student/reviewed-achievements').then((result)=>{
                    this.achievements = result.data;
                });
            },
            editAchievements(){
                var url = '/student/edit-achievements';
                window.location = url;
            },
        },
        mounted() {
            this.getStudentAchievements();
        }

}
</script>
<style>

</style>

