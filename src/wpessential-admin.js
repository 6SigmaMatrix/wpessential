import WpeAuth from "./components/WpeAuth";
import WpeExtensions from "./components/WpeExtensions";
import WpeHealth from "./components/WpeHealth";
import WpeHome from "./components/WpeHome";
import WpeNavigation from "./components/WpeNavigation";
import WpeOptions from "./components/WpeOptions";
import { store } from "./store/options";

//const ElementUI = window.ELEMENT;

window.$ = jQuery;
Vue.prototype.$WPEssential = WPEssential;
Vue.prototype.$WPE_NONCE = WPEssential.nonce;
Vue.prototype.$WPE_AJAX_URL = WPEssential.ajaxurl;
Vue.prototype.$WPE_AJAX_PREFIX = WPEssential.ajaxurl_prefix;
Vue.prototype.$WPE_OPT_ARGS = WPEssential.global_options_args;
Vue.prototype.$WPE_OPT_TABS_ARGS = WPEssential.global_tabs_args;

const router = ( typeof VueRouter === 'function' ) ? new VueRouter( { mode: 'hash' } ) : '';

Vue.component( 'wpe-home', WpeHome );
Vue.component( 'wpe-health', WpeHealth );
Vue.component( 'wpe-options', WpeOptions );
Vue.component( 'wpe-extensions', WpeExtensions );
Vue.component( 'wpe-auth', WpeAuth );

const app = new Vue( {
	store     : store,
	router,
	el        : '#wpessential-admin',
	components: {
		WpeNavigation
	},
	mounted ()
	{
		this.browser_events();
		this.append_routes();
	},
	methods: {
		browser_events ()
		{
			window.addEventListener( 'offline', () =>
			{
				this.$notify.closeAll();
				this.$notify.info( {
					message                 : 'You are currently offline. <a href="javascript:void(0)" onclick="window.location.reload()">Refresh</a>',
					position                : 'bottom-left',
					dangerouslyUseHTMLString: true,
					duration                : 0
				} );
			}, false );

			window.addEventListener( 'online', () =>
			{
				this.$notify.closeAll();
				this.$notify( {
					message                 : 'Your internet connection was restored.',
					type                    : 'success',
					position                : 'bottom-left',
					dangerouslyUseHTMLString: true
				} );
			}, false );
		},
		append_routes ()
		{
			if ( this.$WPEssential.admin_pages ) {
				$.each( this.$WPEssential.admin_pages, ( index, route ) =>
				{
					this.$router.addRoutes( [ route.route ] );
				} );
			}
		}
	}
} );
