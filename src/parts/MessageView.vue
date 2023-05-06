<template>
    <div class="message-content">
        <MessageOne/>
        <MessgeTwo :message="mensaje" />
        <Lines/>

        <div class="icon">
            <img src="@/assets/img/laicaLogo.png" alt="">
            <a href="https://laica.cr/" target="_blank">CONOCÉ MÁS DE NOSOTROS</a>
        </div>

    </div>
</template>

<script>
    import MessageOne from '@/components/Mensajes/MessagesOne.vue';
    import MessgeTwo from '@/components/Mensajes/MessagesTwo.vue';
    import Lines from '@/components/Mensajes/Lines.vue';


    export default{
        components:{
            MessageOne,
            MessgeTwo,
            Lines
        },
        props: {
            mensaje: {
                type: String,
                required: true
            }
        }
    }

</script>

<style>
    @import url(@/assets/css/parts/page/Message.css);
</style>