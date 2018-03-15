<template>
    <div class="box">
        <div class="box-header with-border">
            <i class="fa fa-link"></i>
            <h1 class="box-title large-font">Engagement</h1>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body flex-container-row">
            <div class="flex-container-column">
                <i class="fa fa-paint-brush"></i>
                <i class="fa fa-futbol-o"></i>
                <i class="fa fa-ticket"></i>
            </div>

            <div class="flex-container-column">
                <label class="primary">Arts and Culture activities</label>
                <label class="primary">Sports activities</label>
                <label class="primary">Events</label>
            </div>
            <horizontal-bar-chart id="chart" :data="data"></horizontal-bar-chart>
        </div>
    </div>
</template>

<script>
    import HorizontalBarChart from './../../../HorizontalBarChart.js'
    export default {
        components: {
            HorizontalBarChart
        },
        props:['data'],
        data () {
            return {
                arts: 0,
                sports: 0,
                events: 0,
                loading: false
            }
        },
        methods: {

        },
        mounted() {
        }
    }
</script>

<style lang="scss" scoped>
    .box-body > div > .fa {
        // border: 2px solid blue;
        font-size: 40px;
    }

    .box-body > div > label {
        // border: 2px solid blue;
        font-size: 24px;
    }

@media only screen and (max-width: 480px) {
    #chart{
        max-width: 240px;
    }
}
</style>


