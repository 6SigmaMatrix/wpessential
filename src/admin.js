import WpeHeader from "./components/wpeHeader";
import WpeFooter from "./components/wpeFooter";
import WpeMain from "./components/wpeMain";
import Wpe from "./wpe";

Vue.component('wpe', Wpe);
Vue.component('wpe-header', WpeHeader);
Vue.component('wpe-main', WpeMain);
Vue.component('wpe-footer', WpeFooter);
new Vue({el: "#wpbody"});
