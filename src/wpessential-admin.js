import WpeNavigation from "./components/WpeNavigation";
import WpeRouter from "./components/WpeRouter";

window.$ = jQuery
Vue.prototype.$WPEssential = WPEssential;

const router = new VueRouter( {
    routes: WpeRouter,
} );

const app = new Vue( {
    router,
    el: '#wpessential-admin',
    components: {
        WpeNavigation,
    },
    mounted () {
        this.append_routes();
    },
    methods: {
        append_routes () {
            /*if ( this.$WPEssential.options_routes ) {
                $.each( this.$WPEssential.options_routes, ( index, route ) => {
                    console.log( route );//return;
                    this.$router.addRoute( route );
                } );
            }*/

        }
    }
} );
