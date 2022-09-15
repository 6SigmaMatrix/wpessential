import WpeHealth from "./components/WpeHealth";
import WpeHome from "./components/WpeHome";
import WpeNavigation from "./components/WpeNavigation";
import WpeOptions from "./components/WpeOptions";
import WpeExtensions from "./components/WpeExtensions";
import WpeAuth from "./components/WpeAuth";
import { store } from "./store/options";

//const ElementUI = window.ELEMENT;

window.$ = jQuery;
Vue.prototype.$WPEssential = WPEssential;
Vue.prototype.$WPE_NONCE = WPEssential.nonce;
Vue.prototype.$WPE_AJAX_URL = WPEssential.ajaxurl;
Vue.prototype.$WPE_AJAX_PREFIX = WPEssential.ajaxurl_prefix;

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
		this.append_routes();
	},
	methods: {
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
