import { createApp } from 'vue';
import mitt from 'mitt';

// Layout
import DashboardLayout from './components/Layouts/DashboardContent.vue';
import Sidebar from './components/Layouts/Sidebar.vue';
import Navbar from './components/Layouts/Navbar.vue';

// Components
import Dashboard from './components/Dashboard/Dashboard.vue';

// App initialization
const app = createApp()
const emitter = mitt();

// Layout registration
app.component('dashboard-layout', DashboardLayout);
app.component('side-bar', Sidebar);
app.component('nav-bar', Navbar);

// Component Registration
app.component('dashboard-index', Dashboard);

app.config.globalProperties.emitter = emitter;
app.mount('#app');