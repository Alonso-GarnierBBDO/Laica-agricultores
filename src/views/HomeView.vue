<template>
  <div class="home panels" id="panelContainer">
    <HeaderView class="panel"/>
    <ProtagonistasView class="panel"/>
    <ProductoresView class="panel"/>
    <AgradecimientoView class="panel" @mensage="getMessage"/>
    <MessageView :mensaje="newMessage" class="panel"/>
  </div>
</template>

<script>
import HeaderView from '@/parts/HeaderView.vue';
import ProtagonistasView from '@/parts/ProtagonistasView.vue';
import ProductoresView from '@/parts/ProductoresView.vue';
import AgradecimientoView from '@/parts/AgradecimientoView.vue';
import MessageView from '@/parts/MessageView.vue';

// Helpers Animation
import { animation } from '@/helpers/gsapAnimation.js';

export default {
  name: 'HomeView',

  components: {
    HeaderView,
    ProtagonistasView,
    ProductoresView,
    AgradecimientoView,
    MessageView,
  },

  data(){
    return{
      newMessage: ''
    }
  },

  methods: {
    getMessage(mensage){
      this.newMessage = mensage;
    }
  },
  mounted(){
    animation();
  }

}
</script>
