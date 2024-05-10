import './bootstrap';
import { createApp } from "vue";
import app from "./layouts/app.vue";
import vuetify from "./vuetify";
import router from "./router";
import axios from 'axios'
import VueAxios from 'vue-axios'

const vueApp = createApp(app);
vueApp.use(vuetify);
vueApp.use(router);
vueApp.use(VueAxios, axios); 
vueApp.mount("#app");