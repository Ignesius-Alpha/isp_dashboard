import { createApp } from 'vue';
import mitt from 'mitt';

// Components
import DashboardLayout from './components/Layouts/DashboardContent.vue';
import Sidebar from './components/Layouts/Sidebar.vue';
import Navbar from './components/Layouts/Navbar.vue';

// App initialization
const app = createApp()
const emitter = mitt();

// Components registration
app.component('dashboard-layout', DashboardLayout);
app.component('side-bar', Sidebar);
app.component('nav-bar', Navbar);

app.config.globalProperties.emitter = emitter;
app.mount('#app')