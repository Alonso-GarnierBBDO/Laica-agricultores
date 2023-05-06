<template>
    <div class="agradecimiento">
        <Lluvia/>

        <div class="content-agradecimiento">
            <div>
                <Form @mensaje="getMessage" />
            </div>
            <div>
                <Content/>
            </div>
        </div>

    </div>
</template>

<script>
    import Lluvia from '@/components/Agradecimiento/Lluvia.vue';
    import Form from '@/components/Agradecimiento/Form.vue';
    import Content from '@/components/Agradecimiento/Content.vue';

    export default{
        components: {
            Lluvia,
            Form,
            Content
        },
        methods: {
            getMessage(mensage) {
                this.$emit('mensage', mensage)
            }
        }
    }
</script>

<style>
    @import url(@/assets/css/parts/page/Agradecimiento.css);
</style>