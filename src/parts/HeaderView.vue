<template>
  <div>
    <RedesSociales />

    <header>
      <div class="person-img">
        <div class="background_imange"></div>
      </div>

      <section class="title_header" title="Detras de la dulzura">
        <div class="items destok">
          <img src="@/assets/img/nube.png" alt="" />
          <img src="@/assets/img/sol.png" alt="" />
        </div>
        <div class="logo destok">
          <img class="laica_logo" src="@/assets/img/Laica.svg" alt="" />
        </div>
        <h1 class="destok">Los protagonistas</h1>
        <img class="destok" src="@/assets/img/Concepto.svg" alt="" />
        <div class="bambu_item destok">
          <img src="@/assets/img/bm.png" alt="" class="bambu" />
        </div>

        <div class="movile">
          <div class="items">
            <img src="@/assets/img/nube.png" alt="" />
            <img src="@/assets/img/sol.png" alt="" />
          </div>
          <div class="logo">
            <img class="laica_logo" src="@/assets/img/Laica.svg" alt="" />
          </div>
          <h1>Los protagonistas</h1>
          <img src="@/assets/img/Concepto.svg" alt="" />
          <div class="bambu_item">
            <img src="@/assets/img/bm.png" alt="" class="bambu" />
          </div>
        </div>
        <img
          src="@/assets/img/person_photo.png"
          alt=""
          class="person_items-logo"
        />
      </section>
    </header>
  </div>
</template>

<script>
import RedesSociales from "@/components/Header/RedesSociales.vue";
import { ref } from "vue";

export default {
  components: {
    RedesSociales,
  },
  setup() {
    return {
      bodyStyle: {
        maxWidth: "1000px",
      },
      showModal: ref(false),
      segmented: true,
    };
  },
};
</script>

<style>
@import url(@/assets/css/parts/page/HeaderPage.css);
</style>
