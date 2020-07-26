import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuetify from 'vuetify';
import Swal from "sweetalert2";
import "vuetify/dist/vuetify.min.css";
import VueApexCharts from 'vue-apexcharts'
import moment from 'moment';
// import Chart from 'chart.js';



import jquery from 'jquery';

import FormData from 'form-data';

Vue.use(VueRouter);
Vue.use(VueApexCharts);
Vue.use(Vuetify);

import App from './views/App.vue';
import Home from './views/Home.vue';
import VIP from './views/VIP.vue';
import Store from './views/Store.vue';
import Archive from './views/Archive.vue';
import Create from './views/Create.vue';
import Login from './views/Login.vue';
import Settings from './views/Settings.vue';
import HowWork from './views/HowWork.vue';
import Support from './views/Support.vue';
import Supports from './views/Supports.vue';
import Ahmad from './views/Ahmad.vue';
import Targets from './views/Targets.vue';
import StoreConfirm from './views/StoreConfirm.vue';
import Answer from './views/Answer.vue';
import AllSupport from './views/AllSupport.vue';
import Forget from './views/Forget.vue';
import Bpanel from './views/Bpanel.vue';

const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/', component: Home, name: 'home' },
       { path: '/vip', component: VIP, name: 'vip' },
       { path: '/store', component: Store, name: 'store' },
       { path: '/login', component: Login, name: 'login' },
       { path: '/archive', component: Archive, name: 'archive' },
       { path: '/settings', component: Settings, name: 'settings' },
       { path: '/how-work', component: HowWork, name: 'howwork' },
       { path: '/support', component: Support, name: 'support' },
       { path: '/panel/create', component: Create, name: 'create' },
       { path: '/mmd/test', components: Ahmad, name: 'google' },
       { path: '/Targets', component: Targets, name: 'Targets' },
       { path: '/supports', component: Supports, name: 'supports' },
       { path: '/bpanel', component: Bpanel, name: 'bpanel' },
       { path: '/forget-pass', component: Forget, name: 'forget' },
       { path: '/support/answer/:id', component: Answer, name: 'answer' },
       { path: '/store/confirms', components: StoreConfirm, name: 'confirm' },
       { path: '/all/support', components: AllSupport, name: 'allsupport' },

        // { path: '*', component: NotFound },
    ],
    /*scrollBehavior (to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else {
            return { x: 0, y: 0 }
        }
    }*/
});
const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
