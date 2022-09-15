<template>
	<div class="action">
		<el-button icon="el-icon-coin" native-type="submit" type="primary" v-on:click.prevent="save_settings()">
			Save Settings
		</el-button>
		<el-button icon="el-icon-refresh" native-type="reset" type="primary">
			Reset Section
		</el-button>
		<el-button icon="el-icon-help" native-type="reset" type="primary" v-on:click.native.prevent="reset_all_settings">
			Reset All
		</el-button>
	</div>
</template>
<script>

export default {
	name   : "wpe-actions",
	methods: {
		reset_all_settings ()
		{
			//this.form_loader = true;
			$.ajax( {
				url    : this.$WPE_AJAX_URL,
				type   : "POST",
				data   : {
					action: this.$WPE_AJAX_PREFIX + "_reset_all_options",
					nonce : this.$WPE_NONCE
				},
				success: res =>
				{
					//this.form_loader = false;
				},
				error  : error =>
				{
					//this.form_loader = false;
					if ( error.status === 401 ) {
						this.$alert(
							error.responseJSON.data.message,
							error.responseJSON.data.title,
							{
								type                    : "error",
								confirmButtonText       : "Ok",
								dangerouslyUseHTMLString: true
							}
						);
					} else {
						this.$alert(
							error.responseText,
							error.status,
							{
								type                    : "error",
								confirmButtonText       : "Ok",
								dangerouslyUseHTMLString: true
							}
						);
					}
				}
			} );
		},
		save_settings ()
		{
			this.form_loader = true;
			$.ajax( {
				url    : this.$WPE_AJAX_URL,
				type   : "POST",
				data   : {
					action: this.$WPE_AJAX_PREFIX + "_save_options",
					nonce : this.$WPE_NONCE,
					save  : this.form
				},
				success: res =>
				{
					this.form_loader = false;
				},
				error  : error =>
				{
					this.form_loader = false;
					if ( error.status === 401 ) {
						this.$alert(
							error.responseJSON.data.message,
							error.responseJSON.data.title,
							{
								type                    : "error",
								confirmButtonText       : "Ok",
								dangerouslyUseHTMLString: true
							}
						);
					} else {
						this.$alert(
							error.responseText,
							error.status,
							{
								type                    : "error",
								confirmButtonText       : "Ok",
								dangerouslyUseHTMLString: true
							}
						);
					}
				}
			} );
		}
	}
};
</script>
