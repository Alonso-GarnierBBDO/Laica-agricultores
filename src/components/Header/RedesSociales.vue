<template>
    <div>
        <div class="redes-sociales">
            <!-- <a href="" target="_blank"></a> -->
            <n-tooltip trigger="hover" :style="{ backgroundColor: 'var(--color-primary)' }" placement="right-start" :show-arrow="d">
                <template #trigger>
                <a href="https://twitter.com/?lang=es" target="_blank">
                    <img src="@/assets/img/twitter.png" class="twitter" alt="">
                </a>
                </template>
                Twitter
            </n-tooltip>
            <n-tooltip trigger="hover" placement="right-start" :show-arrow="true">
                <template #trigger>
                <a href="https://www.facebook.com/laicacostarica" target="_blank">
                    <img src="@/assets/img/facebook.png" class="facebook" alt="">
                </a>
                </template>
                Facebook
            </n-tooltip>
            <n-tooltip trigger="hover" placement="right-start" :show-arrow="true">
                <template #trigger>
                <a href="https://twitter.com/?lang=es" target="_blank">
                    <img src="@/assets/img/instagram.png" alt="" class="instagram">
                </a>
                </template>
                Instragram
            </n-tooltip>
            <n-tooltip trigger="hover" placement="right-start" :show-arrow="true">
                <template #trigger>
                <a href="https://www.youtube.com/@laicacorporativo4291" target="_blank">
                    <img class="youtuve" src="@/assets/img/youtuve.png" alt="">
                </a>
                </template>
                YouTuve
            </n-tooltip>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import { NButton } from 'naive-ui'

    export default{
        components:{
            NButton
        }
    }

</script>

<style scoped>

    @import url(@/assets/css/parts/componets/Header/RedesSociales.css);

</style>