import { Doughnut, mixins } from 'vue-chartjs'
const { reactiveProp } = mixins

export default {
  extends: Doughnut,
  mixins: [reactiveProp],
  data() {
      return {
        options: {
            responsive: true,
            maintainAspectRatio: false,
            pieceLabel: {
                render: 'percentage',
                fontColor: ['green', 'white', 'red'],
                precision: 2
              }
        }
      }
  },
  mounted () {
    // this.chartData is created in the mixin.
    // If you want to pass options please create a local options object
    this.renderChart(this.chartData, this.options)
  }
}