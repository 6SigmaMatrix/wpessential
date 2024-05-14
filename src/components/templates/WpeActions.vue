<template>
	<div class="action">
		<el-button icon="coin" native-type="submit" type="primary" @click.prevent="save_settings()">
			Save Settings
		</el-button>
		<el-button icon="refresh" native-type="reset" type="primary" @click.prevent="save_settings(section_id)">
			Reset Section
		</el-button>
		<el-button icon="help" native-type="reset" type="primary" @click.prevent="reset_all_settings()">
			Reset All
		</el-button>
	</div>
</template>
<script>
import FormMixin from '../FormMixin';

export default {
	props   : {
		section_id : String
	},
	mixins  : [ FormMixin ],
	methods : {
		reset_all_settings ()
		{
			this.set_db_loader( true );
			$.ajax( {
				url      : this.$WPE_AJAX_URL,
				type     : "POST",
				data     : {
					action : this.$WPE_AJAX_PREFIX + "_reset_all_options",
					nonce  : this.$WPE_NONCE
				},
				success  : res =>
				{
				},
				error    : error =>
				{
					if ( error.status === 401 )
					{
						this.$alert(
							error.responseJSON.data.message,
							error.responseJSON.data.title,
							{
								type                     : "error",
								confirmButtonText        : "Ok",
								dangerouslyUseHTMLString : true
							}
						);
					}
					else
					{
						this.$alert(
							error.responseText,
							error.status,
							{
								type                     : "error",
								confirmButtonText        : "Ok",
								dangerouslyUseHTMLString : true
							}
						);
					}
				},
				complete : res => this.set_db_loader( false )
			} );
		},
		save_settings ()
		{
			this.set_db_loader( true );
			$.ajax( {
				url      : this.$WPE_AJAX_URL,
				type     : "POST",
				data     : {
					action  : this.$WPE_AJAX_PREFIX + "_save_options",
					nonce   : this.$WPE_NONCE,
					save    : this.form,
					post_id : this.db_post_id
				},
				success  : res =>
				{
					this.set_save_alert( false );
				},
				error    : error =>
				{
					if ( error.status === 401 )
					{
						this.$alert(
							error.responseJSON.data.message,
							error.responseJSON.data.title,
							{
								type                     : "error",
								confirmButtonText        : "Ok",
								dangerouslyUseHTMLString : true
							}
						);
					}
					else
					{
						this.$alert(
							error.responseText,
							error.status,
							{
								type                     : "error",
								confirmButtonText        : "Ok",
								dangerouslyUseHTMLString : true
							}
						);
					}
				},
				complete : res => this.set_db_loader( false )
			} );
		}
	}
};
</script>
