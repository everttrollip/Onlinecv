<template>
    <div class="cv-row">
        <div class="box">
            <div class="box-header with-border">
                <i class="fa fa-map-marker"></i>
                <h1 class="box-title large-font">Where I Live</h1>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                    <i class="fa fa-pencil-square-o"></i>
                </div>
            </div>
            <div class="box-body">
                <div id="world-map" style="width: 100em; height: 400px;"></div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {

            }
        }

    }
</script>