<template>
    <div>
        <Vue3Marquee class="line-style-mensajes-one" :duration="40" direction="reverse">
            <div v-for="(item, index) in allMensaje" class="items-message" :class="`messaje-${index}`">
                <h2>{{ item.name }}</h2>
                <p class="mensaje">{{ item.message }}</p>
            </div>
        </Vue3Marquee>
    </div>
</template>

<script>
    
    import mensaje from '@/assets/content/mensaje.json';

    export default{
        data(){
            return{
                allMensaje: mensaje.data.row1,
            }
        },
    }

</script>

<style>

    @import url(@/assets/css/parts/componets/Messages/Messages.css);

</style>