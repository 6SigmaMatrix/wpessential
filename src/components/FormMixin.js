const FormMixin = {
	props: { field: Object },
	data ()
	{
		return { value: '' };
	},
	watch   : {},
	computed: {
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
	methods: {
		set_value ( value )
		{
			this.$store.commit( 'update_value', { key: this.field.id, value: value } );
			this.value = value;
		},
		defined_value ( data )
		{
			this.wpe_error( data );
			this.$store.commit( 'update_value', data );
		}
	}
};

export default FormMixin;
