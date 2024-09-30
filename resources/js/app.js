import { createApp } from 'vue';
import mitt from 'mitt';

// Layout
import DashboardLayout from './components/Layouts/DashboardContent.vue';
import Sidebar from './components/Layouts/Sidebar.vue';
import Navbar from './components/Layouts/Navbar.vue';

// Graphs
import Bargraph from './components/Layouts/Graphs/Bar.vue';
import LineGraph from './components/Layouts/Graphs/LineGraph.vue';

// Components
import Activeservices from './components/Activeservices/Activeservices.vue';
import CANews from './components/CANews/CANews.vue';
import Coverage from './components/Coverage/Coverage.vue';
import Dashboard from './components/Dashboard/Dashboard.vue';
import Linksearch from './components/Linksearch/Linksearch.vue';
import Marketing from './components/Marketing/Marketing.vue';
import Orders from './components/Orders/Orders.vue';
import Resources from './components/Resources/Resources.vue';
import Support from './components/Support/Support.vue';

// App initialization
const app = createApp()
const emitter = mitt();

// Layout registration
app.component('dashboard-layout', DashboardLayout);
app.component('side-bar', Sidebar);
app.component('nav-bar', Navbar);

// Graphs
app.component('bar-graph', Bargraph);
app.component('line-graph', LineGraph);

// Component Registration
app.component('active-services', Activeservices);
app.component('canews', CANews);
app.component('coverage', Coverage);
app.component('dashboard-index', Dashboard);
app.component('link-search', Linksearch);
app.component('marketing', Marketing);
app.component('orders', Orders);
app.component('resources', Resources);
app.component('support', Support);

app.config.globalProperties.emitter = emitter;
app.mount('#app');