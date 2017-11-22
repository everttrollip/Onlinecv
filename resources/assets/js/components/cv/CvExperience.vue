<template>
    <div class="box">
        <div class="box-header with-border">
            <i class="fa fa-lightbulb-o"></i>
            <h1 class="box-title large-font">Experience</h1>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <i class="fa fa-pencil-square-o"></i>
            </div>
        </div>
        <div class="box-body flex-container-column ratings">
            <div class="flex-container-row full-width">
                <span class="category">Communication</span>
                <el-rate
                    :max="maxValue"
                    v-model="communicationValue"
                    :colors="['#99A9BF', '#F7BA2A', '#FF9900']">
                </el-rate>
            </div>

            <div class="flex-container-row full-width">
                <span class="category">Conceptualization</span>
                <el-rate
                    :max="maxValue"
                    v-model="conceptualizationValue"
                    :colors="['#99A9BF', '#F7BA2A', '#FF9900']">
                </el-rate>
            </div>

            <div class="flex-container-row full-width">
                <span class="category">Creative</span>
                <el-rate
                    :max="maxValue"
                    v-model="creativityValue"
                    :colors="['#99A9BF', '#F7BA2A', '#FF9900']">
                </el-rate>
            </div>

            <div class="flex-container-row full-width">
                <span class="category">Leadership</span>
                <el-rate
                    :max="maxValue"
                    v-model="leadershipValue"
                    :colors="['#99A9BF', '#F7BA2A', '#FF9900']">
                </el-rate>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                communicationValue: null,
                conceptualizationValue: null,
                creativityValue: null,
                leadershipValue: null,
                maxValue: 10
            }
        }
    }
</script>

<style lang="scss">
    .category {
        font: {
            size: 24px;
        }
    }
</style>
