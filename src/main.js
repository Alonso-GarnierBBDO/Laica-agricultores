import { createApp } from 'vue'
import App from './App.vue'
import './registerServiceWorker'
import router from './router'
import store from './store'

// Install boostrap
import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap"

// Install Naive Components
import naive from 'naive-ui/es/preset'

// Install Vue 3 Marquee
import Vue3Marquee from 'vue3-marquee'
import 'vue3-marquee/dist/style.css'

//Vue particles
import Vue from 'vue'
import VueParticles from 'vue-particles'




createApp(App)
    .use(store)
    .use(router)
    .use(naive)
    .use(Vue3Marquee)
    .use(VueParticles)
    .mount('#app')

