import { createApp } from 'vue';
import mitt from 'mitt';
import PrimeVue from 'primevue/config';
// Layout
import DashboardLayout from './components/Layouts/DashboardContent.vue';
import Sidebar from './components/Layouts/Sidebar.vue';
import Navbar from './components/Layouts/Navbar.vue';
import TableLayout from './components/Layouts/Table.vue';
import PopUpModal from './components/Layouts/Modal/PopupModal.vue';
import Actionmodal from './components/Activeservices/Actionmodal.vue';
import OrderUpdateModal from './components/Orders/OrderUpdateModal.vue';
import OrderCancelModal from './components/Orders/OrderCancelModal.vue';
import OrderConfirmModal from './components/Orders/OrderConfirmModal.vue';
import MarketingJoinModal from './components/Marketing/MarketingJoinModal.vue';
import MarketingViewModal from './components/Marketing/MarketingViewModal.vue';
import RemoveConfirmation from './components/RightPanel/UserProfiles/RemoveConfirmation.vue';

// Graphs
import Bargraph from './components/Layouts/Graphs/Bar.vue';
import LineGraph from './components/Layouts/Graphs/LineGraph.vue';

// Tabs
import LogTicket from './components/Support/LogTicket.vue';
import Tickets from './components/Support/Tickets.vue';
import Outages from './components/Support/Outages.vue';
import PlannedMaintence from './components/Support/PlannedMaintenance.vue';
import PlaceOrder from './components/Orders/PlaceOrder.vue';
import InProgress from './components/Orders/InProgress.vue';
import ActionRequired from './components/Orders/ActionRequired.vue';
import PendingService from './components/Orders/PendingService.vue';
import CancelService from './components/Orders/CancelService.vue';
import Activations from './components/Marketing/Activations.vue';
import Uptakes from './components/Marketing/Uptakes.vue';

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
import ISProvider from './components/Isps/ISP.vue';
import Reports from './components/Reports/Reports.vue';
import Account from './components/RightPanel/Account/Account.vue';
import AuditTrail from './components/RightPanel/AuditTrail/AuditTrail.vue';
import CompanyProfile from './components/RightPanel/CompanyProfile/CompanyProfile.vue';
import Finance from './components/RightPanel/Finance/Finance.vue';
import RolePermissions from './components/RightPanel/RolePermissions/RolePermissions.vue';
import RolePermissionsUpdate from './components/RightPanel/RolePermissions/RolePermissionsUpdate.vue';
import CreateUser from './components/RightPanel/UserProfiles/CreateUser.vue';
import UpdateUser from './components/RightPanel/UserProfiles/UpdateUser.vue';
import UserProfiles from './components/RightPanel/UserProfiles/UserProfiles.vue';

// App initialization
const app = createApp()
const emitter = mitt();

// Layout registration
app.component('dashboard-layout', DashboardLayout);
app.component('side-bar', Sidebar);
app.component('nav-bar', Navbar);
app.component('table-layout', TableLayout);
app.component("modal", PopUpModal);
app.component("action-modal", Actionmodal);
app.component("order-update-modal", OrderUpdateModal);
app.component("order-cancel-modal", OrderCancelModal);
app.component("place-order-modal", OrderConfirmModal);
app.component("marketing-join-modal", MarketingJoinModal);
app.component("marketing-view-modal", MarketingViewModal);
app.component('remove-confirmation-modal', RemoveConfirmation);

// Graphs
app.component('bar-graph', Bargraph);
app.component('line-graph', LineGraph);

// Tabs
app.component("log-ticket", LogTicket);
app.component("all-tickets", Tickets);
app.component("link-outages", Outages);
app.component("planned-maintenance", PlannedMaintence);
app.component("place-order", PlaceOrder);
app.component("in-progress", InProgress);
app.component("action-required", ActionRequired);
app.component("pending-service", PendingService);
app.component("cancel-service", CancelService);
app.component("activations", Activations);
app.component("uptakes", Uptakes);

// Component Registration
app.component('active-services', Activeservices);
app.component('canews', CANews);
app.component('coverage', Coverage);
app.component('dashboard-index', Dashboard);
app.component('is-providers', ISProvider);
app.component('link-search', Linksearch);
app.component('marketing', Marketing);
app.component('orders', Orders);
app.component('resources', Resources);
app.component('support', Support);
app.component('reports', Reports);
app.component('account', Account);
app.component('audit-trail', AuditTrail);
app.component('finance', Finance);
app.component('role-permissions', RolePermissions);
app.component('role-permissions-update', RolePermissionsUpdate);
app.component('create-user', CreateUser);
app.component('update-user', UpdateUser);
app.component('user-profiles', UserProfiles);
app.component('company-profile', CompanyProfile);

app.config.globalProperties.emitter = emitter;
app.use(PrimeVue);
app.mount('#app');