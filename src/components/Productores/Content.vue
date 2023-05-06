<template>
    <div class="contenido-productores">
        <div>
            <Mapa/>
        </div>
        <div>
            <h3>Y así como ellos,</h3>
            <h1>MÁS DE 7000</h1>
            <h2>PRODUCTORES</h2>
            <h3>entregando  esfuerzo, dedicación y amor por la caña.</h3>
            <img src="@/assets/img/GraficosBlancos.svg" alt="">
        </div>
    </div>
</template>

<script>
    import Mapa from './svg/Mapa.vue';

    export default {

        components: {
            Mapa
        }

    }

</script>

<style>
    @import url(@/assets/css/parts/componets/Productores/content.css);
</style>