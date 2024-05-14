const FormMixin = {
	props : { field : Object },
	data ()
	{
		return {
			value : ''
		};
	},
	watch    : {
		value : function ()
		{
			this.set_save_alert( true );
		}
	},
	computed : {
		db_post_id ()
		{
			return this.$store.state.post_id;
		},
		db_saved_loader ()
		{
			return this.$store.state.db_save_loader;
		},
		db_save_alert ()
		{
			return this.$store.state.db_save_alert;
		},
		form ()
		{
			return this.$store.state.form;
		},
		form_rules ()
		{
			return this.$store.state.form_rules;
		},
		value_get ( data )
		{
			if ( this.field !== undefined && this.field.id )
			{
				return this.$store.state.form[ this.field.id ];
			}

			return '';
		}
	},
	mounted ()
	{
		this.value = this.value_get;
	},
	methods : {
		set_db_post_id ( value )
		{
			this.$store.commit( 'update_post_id', value );
		},
		set_db_loader ( value )
		{
			this.$store.commit( 'update_loader', value );
		},
		set_save_alert ( value )
		{
			this.$store.commit( 'update_save_alert', value );
		},
		set_value ( value )
		{
			this.$store.commit( 'update_value', { key : this.field.id, value : value } );
			this.value = value;
		},
		defined_value ( data )
		{
			this.$store.commit( 'update_value', data );
		}
	}
};

export default FormMixin;
