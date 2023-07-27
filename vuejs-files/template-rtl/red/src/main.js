// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import { createApp } from 'vue';
import { router } from './router';
import { BarChart } from 'vue-morris'
import { LineChart } from 'vue-morris'
import App from "./App.vue";
import LayoutHeader from './components/layout/Header'
import LayoutHeadercomponents from './components/layout/Headercomponents'
import LayoutNavbar from './components/layout/Navbar'
import LayoutNavbarcomponents from './components/layout/Navbarcomponents'
import LayoutNavbaremail from './components/layout/Navbaremail'
import './assets/css/bootstrap-rtl.min.css'
import './assets/css/bootstrap.min.js'
import './assets/css/font-awesome.min.css'
import './assets/css/feather.css'
import './assets/css/line-awesome.min.css'
import './assets/css/select2.min.css'
import './assets/css/select2.min.js'
import './assets/css/bootstrap-datetimepicker.min.css'
import './assets/css/bootstrap-datetimepicker.min.js'
import jquery from 'jquery'; 
window.$ = jquery
require('./assets/css/style.css');
import './assets/css/bootstrap4.min.css'
import './assets/css/dataTables.bootstrap4.min.css'
import './assets/css/jquery.dataTables.min.js'
import './assets/css/dataTables.bootstrap4.min.js'
import './assets/css/form-validation.js'
import './assets/css/theme-settings.css'
import './assets/css/theme-settings.js'
import './assets/css/linebar.min.js'
import './assets/css/sticky-kit-master/dist/sticky-kit.min.js'
import './assets/css/jquery.maskedinput.min.js'
import Raphael from 'raphael/raphael'
global.Raphael = Raphael
const app = createApp(App)
app.component('layout-header', LayoutHeader);
app.component('layout-headercomponents', LayoutHeadercomponents);
app.component('layout-navbar', LayoutNavbar);
app.component('layout-navbarcomponents', LayoutNavbarcomponents);
app.component('layout-navbaremail', LayoutNavbaremail);
/* eslint-disable no-new */
app.use(router)
.mount('#app');