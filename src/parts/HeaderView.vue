<template>
  <div>
    <LaicaLogo />
    <RedesSociales />

    <header>

    <button @click="showModal = true" class="play_modal">
        <img src="@/assets/img/play.png" alt="">
    </button>

      <n-modal
        v-model:show="showModal"
        class="custom-card"
        preset="card"
        :style="bodyStyle"
        :bordered="false"
        size="huge"
        :segmented="segmented"
      >
        <iframe width="560" height="315" src="https://www.youtube.com/embed/uxSzw3XsVkY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </n-modal>

      <section class="title_header" title="Detras de la dulzura">
        <img src="@/assets/img/tipografia.png" alt="">
      </section>


    </header>
  </div>
</template>

<script>
import LaicaLogo from "@/components/Header/LaicaLogo.vue";
import RedesSociales from "@/components/Header/RedesSociales.vue";
import { ref } from 'vue'


export default {
  components: {
    LaicaLogo,
    RedesSociales,
  },
  setup () {
    return {
        bodyStyle: {
            maxWidth: '1000px',
        },
        showModal: ref(false),
        segmented: true
    }
  },
};
</script>

<style>
@import url(@/assets/css/parts/page/HeaderPage.css);
</style>
