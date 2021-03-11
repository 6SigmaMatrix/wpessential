<script>
import WpeIndex from "./WpeIndex";
import WpeOptions from "./WpeOptions";
import WpeHealth from "./WpeHealth";

console.log(WPEssential.options_routes);
if ( WPEssential.options_routes ) {
    console.log(WPEssential.options_routes);
    $.each( this.$WPEssential.options_routes, ( index, route ) => {
        console.log( route );//return;
        this.$router.addRoute( route );
    } );
}
const routes = [
    {
        path: '/',
        redirect: '/home'
    },
    {
        path: '/home',
        component: WpeIndex,
        name: 'Index'
    },
    /*{
        path: '/health-info',
        component: WpeHealth,
        name: 'Healt'
    },
    {
        path: '/theme',
        component: WpeOptions,
        name: 'Theme Options'
    }*/
];
export default routes;
/*export default {
    name: "wpe-router",
    data () {
        return {}

    },
    mounted () {
        if ( this.$WPEssential.admin_pages ) {
            var temp = {
                index: WpeIndex,
                options: WpeOptions,
                health: WpeHealth
            };
            $.each( this.$WPEssential.admin_pages, ( index, route ) => {
                let comp = "wpe" + temp[ route.component ];
                routes.push( {
                    path: route.path,
                    component: { template: comp },
                    name: route.title
                } )
            } );
        }
        return routes;
    },
    methods: {}
}*/
</script>