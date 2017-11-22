<template>
    <!-- Short I am -->
    <div class="box">
        <div class="box-header with-border">
            <h1 class="box-title large-font">I am <span class="primary-text-color">Grade {{ studentGrade }}</span></h1>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <i class="fa fa-pencil-square-o"></i>
            </div>
        </div>

        <div class="box-body">
            Serious about making the best of every moment and opportunity that comes my way.
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                studentGrade: 12
            }
        }
    }
</script>
