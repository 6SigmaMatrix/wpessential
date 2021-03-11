const WpessentialMixin = {
    data () {
        return {
            page_loader: true,
            ajax_loader: false,
            load_more_loader: false,
            ajax_res: null,
            /*ajax_data: {
                nonce: WPEssential.nonce,
                action: "",
            },
            ajax_args: {
                url: WPEssential.ajaxurl,
                type: "GET",
                data: this.ajax_data,
                sucess: ( res ) => {
                    this.ajax_res = res.data;
                    this.ajax_success( res );
                },
                error: ( res ) => {
                    this.ajax_res = res.responseJSON.data;
                    this.ajax_error();
                }
            }*/
        }
    },
    methods: {
        wpe_get_route_id () {
            let current_path = this.$router.currentRoute.path;
            current_path = current_path.replace( '/', '' );
            return current_path;
        },
        wpe_error ( data ) {
            console.log( data );
        },
        ajax_success ( res ) {
            this.$notify.success( {
                title: this.ajax_res.title,
                message: this.ajax_res.message,
                offset: 30
            } );
        },
        ajax_error () {
            this.$notify.error( {
                title: this.ajax_res.title,
                message: this.ajax_res.message,
                offset: 30
            } );
        }
    }
}

export default WpessentialMixin;