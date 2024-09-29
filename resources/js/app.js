import { createApp } from 'vue';
import mitt from 'mitt';

const app = createApp()
const emitter = mitt();

app.config.globalProperties.emitter = emitter;
app.mount('#app')