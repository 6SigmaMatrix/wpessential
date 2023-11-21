import * as ElementPlusIconsVue from '@element-plus/icons-vue'
import ElementPlus from "element-plus";
import "element-plus/dist/index.css";
import { createApp } from "vue";
import { createRouter, createWebHashHistory } from "vue-router";
import App from "./App.vue";
import WpeAuth from "./components/WpeAuth.vue";
import WpeExtensions from "./components/WpeExtensions.vue";
import WpeHealth from "./components/WpeHealth.vue";
import WpeHome from "./components/WpeHome.vue";
import WpeOptions from "./components/WpeOptions.vue";
import { store } from "./store/options.js";
import WpessentialMixin from "./wpessential-mixin.js";

window.$ = jQuery;
var routes = [];

if ( Object.keys( WPEssential.admin_pages ).length >= 1 )
{
	for ( const [ index, route ] of Object.entries( WPEssential.admin_pages ) )
	{
		routes.push( route.route );
	}
}

const router = ( typeof createRouter === 'function' ) ? createRouter( {
	history : createWebHashHistory(),
	routes  : routes
} ) : '';

const app = createApp( App );
app.use( ElementPlus );
app.use( router );
app.use( store );
app.mixin( WpessentialMixin );

for ( const [ key, component ] of Object.entries( ElementPlusIconsVue ) )
{
	app.component( key, component )
}

app.component( 'WpeHealth', WpeHealth );
app.component( 'WpeOptions', WpeOptions );
app.component( 'WpeExtensions', WpeExtensions );
app.component( 'WpeHome', WpeHome );
app.component( 'WpeAuth', WpeAuth );

app.config.globalProperties.$WPEssential = WPEssential;
app.config.globalProperties.$ADMIN_PAGES = WPEssential.admin_pages;
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
