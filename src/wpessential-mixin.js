export default {
	data ()
	{
		return {
			page_loader      : true,
			ajax_loader      : false,
			load_more_loader : false,
			ajax_res         : null
		};
	},
	methods : {
		wpe_get_route_id ()
		{
			let current_path = ( this.$router ) ? this.$route.path : '';
			current_path = current_path.replace( '/', '' );
			return current_path;
		},
		wpe_error ( data )
		{
			console.log( data );
		},
		ajax_success ( res )
		{
			this.$notify.success( {
				title   : this.ajax_res.title,
				message : this.ajax_res.message,
				offset  : 30
			} );
		},
		ajax_error ()
		{
			this.$notify.error( {
				title   : this.ajax_res.title,
				message : this.ajax_res.message,
				offset  : 30
			} );
		},
		set_value_capture ()
		{
			this.$emit( 'wpe_value_capture', { id : this.field.id, value : this.value } );
		}
	}
};
