<template>
    <div class="protagonistas">
        <Logo/>
        <Titles/>
        <Protagonista/>
        <Vue3Marquee class="line-style-protagonista" :duration="40">
            <img style="width: 100vw;" src="@/assets/img/line-blue.png" />
            <img style="width: 100vw;" src="@/assets/img/line-blue.png" />
        </Vue3Marquee>
    </div>
</template>

<script>
    import Logo from '@/components/Protagonista/Logo.vue';
    import Titles from '@/components/Protagonista/Titles.vue';
    import Protagonista from '@/components/Protagonista/Protagonistas.vue';

    export default{
        components:{
            Logo,
            Titles,
            Protagonista,
        }
    }

</script>

<style>

    @import url('@/assets/css/parts/page/Protagonistas.css');    

</style>