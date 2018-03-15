<template>
<div>
    <div class="box">
        <div class="box-header with-border">
            <i class="fa fa-map-marker"></i>
            <h1 class="box-title large-font">Where I Live</h1>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="location flex-container-column">
                <img :src="this.provinceMapping[this.student.province]">
            </div>
        </div>
    </div>
</div>
</template>

<script>
    import easterncape from '../../../../../public/images/cv/province/easterncape.png'
    import freestate from '../../../../../public/images/cv/province/freestate.png'
    import gauteng from '../../../../../public/images/cv/province/gauteng.png'
    import kwazulunatal from '../../../../../public/images/cv/province/kwazulu-natal.png'
    import limpopo from '../../../../../public/images/cv/province/limpopo.png'
    import mpumalanga from '../../../../../public/images/cv/province/mpumalanga.png'
    import northerncape from '../../../../../public/images/cv/province/northerncape.png'
    import northwest from '../../../../../public/images/cv/province/northwest.png'
    import westerncape from '../../../../../public/images/cv/province/westerncape.png'
    export default {
        props: ['student'],
        data() {
            return {
                provinceMapping: {
                    "Eastern Cape": easterncape,
                    "Free State": freestate,
                    "Gauteng": gauteng,
                    "KwaZulu-Natal": kwazulunatal,
                    "Limpopo": limpopo,
                    "Mpumalanga": mpumalanga,
                    "Northern Cape": northerncape,
                    "North West": northwest,
                    "Western Cape": westerncape
                },
                provinceImage: "",
            }
        },
        mounted() {
        }
    }
</script>

<style lang="scss">
    .location{
        img {
            width: 100%;
        }
    }
</style>
