export const store = new Vuex.Store( {
	state    : {
		form      : {},
		form_rules: {
			/*name: [
			 { required: true, message: 'Please input Activity name', trigger: 'blur' },
			 { min: 3, max: 5, message: 'Length should be 3 to 5', trigger: 'blur' }
			 ],*/
		}
	},
	getters  : {},
	mutations: {
		update_value ( state, data )
		{
			let { key, value } = data;
			state.form[ key ] = value;
		}
	},
	actions  : {},
	modules  : {}
} );
