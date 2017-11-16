<template>
    <!-- CV Header -->
    <!-- <div class="row"> -->
        <div class="box">
            <div class="box-body">
                <div class="student-image">
                    <!-- <img class="thumbnail" src="{{ asset('images/students/thumbnail_evert.png') }}"> -->
                    <img class="thumbnail" :src="image">
                </div>

                <div class="student-name">
                    <span class="firstname">Evert</span>
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
    <!-- </div> -->
</template>

<script>
    import image from './thumbnail_evert.png'
    // import image from 'app/public/images/students/thumbnail_evert.png'
    export default {
        data() {
            return {
                image: image
            }
        }
    }
</script>
