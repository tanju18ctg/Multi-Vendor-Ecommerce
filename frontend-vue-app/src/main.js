import { createApp } from 'vue'
import router from './router'; // Ensure this path matches your project structure

import './style.css'
import './template.js'
import App from './App.vue'

const app = createApp(App);
app.use(router);
app.mount('#app')
