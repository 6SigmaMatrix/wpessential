import { createStore } from 'vuex';

export const store = createStore( {
	state     : {
		post_id        : 0,
		db_save_loader : false,
		db_save_alert  : false,
		form           : {},
		form_rules     : {
			/*name: [
			 { required: true, message: 'Please input Activity name', trigger: 'blur' },
			 { min: 3, max: 5, message: 'Length should be 3 to 5', trigger: 'blur' }
			 ],*/
		}
	},
	getters   : {},
	mutations : {
		update_post_id ( state, data )
		{
			state.post_id = data;
		},
		update_value ( state, data )
		{
			let { key, value } = data;
			state.form[ key ] = value;
		},
		update_loader ( state, data )
		{
			state.db_save_loader = data;
		},
		update_save_alert ( state, data )
		{
			state.db_save_alert = data;
		}
	},
	actions   : {},
	modules   : {}
} );
