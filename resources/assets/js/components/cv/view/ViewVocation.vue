<template>
    <div class="box">
        <div class="box-header with-border">
            <i class="fa fa-cogs"></i>
            <h1 id="headerText" class="box-title large-font">Vocation</h1>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <doughnut-chart id="chart" :chart-data="datacollection"></doughnut-chart>
        </div>
    </div>
</template>

<script>
    import DoughnutChart from './../../../DoughnutChart.js'
    export default {
        components: {
            DoughnutChart
        },
        data () {
            return {
                datacollection: {
                    labels: ['Practical', 'Theoretical'],
                    datasets: [
                        {
                            backgroundColor: ['#3097D1', '#8eb4cb'],
                            data: [75, 25]
                        }
                    ]
                }
            }
        }
    }
</script>
<style>
@media only screen and (max-width: 480px) {
#chart{
   max-width: 240px;
}
}
</style>

