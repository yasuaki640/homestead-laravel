import {createApp} from 'vue'
import App from './App.vue'
import axios from "axios";
import router from './router'
import VueAxios from "vue-axios";

const app = createApp(App)
app.use(router)
app.use(VueAxios, axios)
app.mount('#app')
