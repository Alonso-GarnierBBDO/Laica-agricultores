<template>
    <div class="productores">
        <Flowers/>
        <Content/>
    </div>
</template>

<script>

    import Flowers from '@/components/Productores/Flowers';
    import Content from '@/components/Productores/Content.vue';

    export default{
        components: {
            Flowers,
            Content
        }
    }

</script>

<style>
    @import url(@/assets/css/parts/page/Productores.css);
</style>