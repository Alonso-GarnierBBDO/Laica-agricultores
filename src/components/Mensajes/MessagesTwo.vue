<template>
    <div>
        <Vue3Marquee class="line-style-mensajes-two" :duration="40">
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
                allMensaje: mensaje.data.row2,
            }
        },
        props: {
            message: {
                type: String,
                required: true
            }
        },
        watch: {
            message(newValue, oldValue){
                const newElement = newValue;
                this.allMensaje = { ...this.allMensaje, newElement };
            }
        }
    }

</script>

<style>

    @import url(@/assets/css/parts/componets/Messages/Messages.css);

</style>