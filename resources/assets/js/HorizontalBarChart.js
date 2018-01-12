import { HorizontalBar, mixins } from 'vue-chartjs'
const { reactiveProp } = mixins

export default {
  extends: HorizontalBar,
  props: ["data"],
  mounted() {
    this.renderBarChart()
  },
  computed: {
    chartData: function() {
      return this.data;
    }
  },
  methods: {
    renderBarChart: function() {
        this.renderChart(
            {
                datasets: [
                    {
                        backgroundColor: '#3097D1',
                        data: [this.chartData[0]]
                    },
                    {
                        backgroundColor: '#8eb4cb',
                        data: [this.chartData[1]]
                    },
                    {
                        backgroundColor: '#3097D1',
                        data: [this.chartData[2]]
                    }
                ]
            },
            this.options
        )
    }
  },
  watch: {
    data: function() {
      this.$data._chart.destroy();
      this.renderBarChart();
    }
  },
  data() {
      return {
          options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontSize: 32
                    }
                }],
                xAxes: [{
                    ticks: {
                        stepSize: 10,
                        maxTicksLimit: 10
                    },
                    display: false
                }]
            }
          }
      }
  }
}