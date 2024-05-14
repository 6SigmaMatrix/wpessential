import * as ElementPlusIconsVue from '@element-plus/icons-vue'
import ElementPlus from "element-plus";
import "element-plus/dist/index.css";
import { createApp } from "vue";
import WpeOptions from "./components/WpeOptions.vue";
import { store } from "./store/options.js";
import WpessentialMixin from "./wpessential-mixin.js";

window.$ = jQuery;

const app = createApp({});
app.use( ElementPlus );
app.use( store );
app.mixin( WpessentialMixin );

for ( const [ key, component ] of Object.entries( ElementPlusIconsVue ) )
{
	app.component( key, component )
}

app.component( 'WpeOptions', WpeOptions );

app.config.globalProperties.$WPEssential = WPEssential;
app.config.globalProperties.$WPE_NONCE = WPEssential.nonce;
app.config.globalProperties.$WPE_AJAX_URL = WPEssential.ajaxurl;
app.config.globalProperties.$WPE_AJAX_PREFIX = WPEssential.ajaxurl_prefix;
app.config.globalProperties.$WPE_OPT_ARGS = WPEssential.global_options_args;
app.config.globalProperties.$WPE_OPT_TABS_ARGS = WPEssential.global_tabs_args;
app.config.globalProperties.$WPE_OPT_NOTE_ARGS = WPEssential.global_tabs_args.note;
app.config.globalProperties.$WPE_SOCIAL_PROFILE = WPEssential.global_tabs_args.footer_share;
app.config.productionTip = true;
app.config.performance = true;
app.config.devtools = true;
app.config.debug = true;
app.config.silent = false;
app.mount( '#wpessential-admin' );
