<template>
    <div class="protagonistasItems">
        <div v-for="(item, index) in data" class="items-protagonistas" :class="`progranista-${index}`">
            <button @click="showModal[index] = true" class="content-protagonista">
                <div class="image-protagonistas" :style="{ 'background-image': `url(${require(`@/assets/img/protagonistas/${item.img}`)})` }">
                </div>
                <p class="name-protagonista">{{ item.name }}</p>
            </button>
            <n-modal v-model:show="showModal[index]">
                <n-card
                    :bordered="false"
                    size="huge"
                    role="dialog"
                    aria-modal="true"
                    class="card-protagonista"
                >
                    <div class="img-logo-modal-protagonista">
                        <img src="@/assets/img/very-box.png" alt="">
                    </div>

                    <button @click="showModal[index] = false" class="close-modal-protagonista">
                        <img src="@/assets/img/equis.svg" alt="">
                    </button>

                    <div class="content-modal-protagonista">
                        
                        <div class="video-iframe-youtuve" v-html="item.iframe"></div>
                        <h3>{{ item.name }}</h3>

                    </div>
                </n-card>
            </n-modal>
        </div>
    </div>
</template>

<script>

import ContentProtagonisas from '../../assets/content/protagonistas.json'

export default {
    data() {
        const showModal = [];
        for (let i = 0; i < ContentProtagonisas.data.length; i++) {
        showModal.push(false);
        }
        return {
        data: ContentProtagonisas.data,
        showModal,
        };
    },
};

</script>

<style>
    @import url(@/assets/css/parts/componets/Protagonistas/protagonistas.css);
</style>