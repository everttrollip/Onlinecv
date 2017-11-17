<template>
    <div class="cv-row">
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
            <div class="box-body">
                <slider name="distance" :min="0" :max="3" :value="distance.value" :ticks="distance.ticks"
                                :ticks-labels="distance.ticks_labels" :tooltip="false"
                                change-event-name="onDistanceChange"></slider>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                distance: {
                    ticks: [0, 1, 2, 3],
                    ticks_labels: ['2 km', '5 km', '10 km', '25 km'],
                    value: 1
                },
                events: {
                'onDistanceChange': function (value) {
                            console.log(value);
                        }
                }

            }
        }
    }
</script>