<template>
    <div class="lluvia">
        <div class="lineas" ref="lines"></div>
    </div>
</template>

<script>

    export default{
        methods: {
            linesAnimation(){
                const container = this.$refs.lines;
                const widthContainer = container.offsetWidth;
                const classLine = 'line-thanks';

                // Create lines
                for(let i = 0; i < widthContainer; i++){
                    if(i % 40 === 0){
                        const newElement = document.createElement('div');
                        newElement.classList.add(classLine);
                        newElement.classList.add(`line-${i}`);
                        container.appendChild(newElement)
                    }
                }
                
            }
        },
        mounted(){
            this.linesAnimation();
        }
    }

</script>

<style>
    @import url(@/assets/css/parts/componets/Agredecimiento/lluvia.css);
</style>