<template>
    <!-- CV Header -->
    <div class="cv-row">
        <div class="box">
            <div class="box-body">
                <div class="student-image">
                    <img class="thumbnail" :src="image">
                </div>

                <div class="student-name">
                    <span class="firstname">Evert Frederick</span>
                    <span class="surname">Trollip</span>
                </div>

                <div class="student-contact-details">
                    <div class="info-box email">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">trollip.evert@gmail.com</span>
                        </div>
                    </div>

                    <div class="info-box phone">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-phone"></i>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">+27 (72) 997 5230</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import image from './thumbnail_evert.png'
    // import image from 'public/images/students/thumbnail_evert.png'
    export default {
        data() {
            return {
                image: image
            }
        }
    }
</script>

<style lang="scss">
    @import '../../sass/mixins';
    @import '../../sass/variables';
    .student-image {
        border: 2px solid blue;
        margin-right: 10px;
        .thumbnail {
            align-self: center;
            display: inline-block;
            max-height: 200px;
            margin-bottom: 0px;
        }
    }

    .student-name {
        border: 2px solid blue;
        @include flexbox-container(column, wrap, flex-start);

        .firstname {
            font: {
                size: 3em;
                weight: bold;
            }
            color: $brand-primary;
        }

        .surname {
            font: {
                size: 3em;
                weight: bold;
            }
            color: $brand-info-dark;
        }
    }

    .student-contact-details {
        border: 2px solid blue;
        margin-left: auto;
        width: 40%;

        .info-box {
            border: 2px solid red;
            @include flexbox-container(row, wrap, space-between);
            min-height: 60px;
            .info-box-icon {
                border: 2px solid green;
                line-height: 80px;
                width: 80px;
                height: 80px;
            }

            .info-box-content {
                border: 2px solid green;
                width: 80%;
                margin-left: 0;
                .info-box-text {
                    font: {
                        size: 1.5em;
                    }
                }
            }
        }
    }
</style>
