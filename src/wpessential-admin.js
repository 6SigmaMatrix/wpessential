import WpeHealth from "./components/WpeHealth";
import WpeIndex from "./components/WpeIndex";

const router = new VueRouter({
    routes: [
        {
            path: '/',
            redirect: '/home'
        },
        {
            path: '/home',
            component: WpeIndex,
            name: 'Index'
        },
        {
            path: '/health-info',
            component: WpeHealth,
            name: 'Healt_Info'
        }
    ]
});
const app = new Vue({
    router,
    el: '#wpessential-admin',
});