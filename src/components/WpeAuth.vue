<template>
	<div v-loading="page_loader" class="wpe-login">
		<el-tabs ref="tabs" class="wpe-login-wrapper" v-loading="form_loader">
			<el-tab-pane class="wpe-options-tab">
				<span slot="label">
					<i class="el-icon-key"></i>
					Login
				</span>
				<el-form ref="login_form" :model="login_form" :rules="login_form_rules" class="wpe-auth-form">
					<el-form-item label="Username" prop="user">
						<el-input type="text" v-model="login_form.user" placeholder="Username"></el-input>
					</el-form-item>
					<el-form-item label="Password" prop="pass">
						<el-input type="password" v-model="login_form.pass" placeholder="********"></el-input>
					</el-form-item>
					<el-button type="primary" @click.prevent="authorize()">Login</el-button>
				</el-form>
			</el-tab-pane>
			<el-tab-pane class="wpe-options-tab">
				<span slot="label">
					<i class="el-icon-user"></i>
					Register
				</span>
				<el-form ref="reg_form" :model="reg_form" :rules="reg_form_rules" class="wpe-auth-form">
					<el-form-item label="Username" prop="user">
						<el-input type="text" v-model="reg_form.user" placeholder="Username"></el-input>
					</el-form-item>
					<el-form-item label="Email" prop="email">
						<el-input type="text" v-model="reg_form.email" placeholder="Username"></el-input>
					</el-form-item>
					<el-form-item label="Password" prop="pass">
						<el-input type="password" v-model="reg_form.pass" placeholder="********"></el-input>
					</el-form-item>
					<el-button type="primary" @click.prevent="reg_user()">Register</el-button>
				</el-form>
			</el-tab-pane>
		</el-tabs>
	</div>
</template>
<script>

export default {
	name    : "wpe-auth",
	computed: {},
	data ()
	{
		return {
			form_loader     : false,
			page_loader     : false,
			login_form      : {
				user: '',
				pass: ''
			},
			login_form_rules: {
				user: [
					{
						required: true,
						message : "Please enter the username.",
						trigger : [ "blur", "change" ]
					}
				],
				pass: [
					{
						required: true,
						message : "Please enter the password.",
						trigger : [ "blur", "change" ]
					}
				]
			},
			reg_form        : {
				user : '',
				email: '',
				pass : ''
			},
			reg_form_rules  : {
				user : [
					{
						required: true,
						message : "Please enter the username.",
						trigger : [ "blur", "change" ]
					}
				],
				email: [
					{
						required: true,
						type    : 'email',
						message : "Please enter the email address.",
						trigger : [ "blur", "change" ]
					}
				],
				pass : [
					{
						required: true,
						message : "Please enter the password.",
						trigger : [ "blur", "change" ]
					}
				]
			}
		};
	},
	mounted ()
	{
		this.page_loader = false;
	},
	methods: {
		authorize ()
		{
			this.$refs.login_form.validate( ( value ) =>
			{
				if ( ! value ) {
					return false;
				}

				this.page_loader = true;
				$.ajax( {
					url    : this.$WPE_AJAX_URL,
					type   : "POST",
					data   : {
						form  : this.login_form,
						action: this.$WPE_AJAX_PREFIX + "_authorize",
						nonce : this.$WPE_NONCE
					},
					success: res =>
					{
						this.page_loader = false;
						if ( res.data.token ) {
							location.reload();
						}
					},
					error  : error =>
					{
						this.page_loader = false;
						if ( error.responseJSON && error.responseJSON.data ) {
							this.$alert(
								error.responseJSON.data,
								{
									type                    : "error",
									confirmButtonText       : "OK",
									dangerouslyUseHTMLString: true
								}
							);
						} else {
							this.$alert( error.status + ': ' + error.responseText, {
								type                    : "error",
								confirmButtonText       : "OK",
								dangerouslyUseHTMLString: true
							} );
						}
					}
				} );
			} );
		},
		reg_user ()
		{
			this.$refs.reg_form.validate( ( value ) =>
			{
				if ( ! value ) {
					return false;
				}

				this.page_loader = true;
				$.ajax( {
					url    : this.$WPE_AJAX_URL,
					type   : "POST",
					data   : {
						form  : this.reg_form,
						action: this.$WPE_AJAX_PREFIX + "_reg_user",
						nonce : this.$WPE_NONCE
					},
					success: res =>
					{
						this.page_loader = false;
						this.$alert(
							res.data,
							{
								type                    : "success",
								confirmButtonText       : "OK",
								dangerouslyUseHTMLString: true
							}
						);
					},
					error  : error =>
					{
						this.page_loader = false;
						if ( error.responseJSON && error.responseJSON.data ) {
							this.$alert(
								error.responseJSON.data,
								{
									type                    : "error",
									confirmButtonText       : "OK",
									dangerouslyUseHTMLString: true
								}
							);
						} else {
							this.$alert( error.status + ': ' + error.responseText, {
								type                    : "error",
								confirmButtonText       : "OK",
								dangerouslyUseHTMLString: true
							} );
						}
					}
				} );
			} );
		}
	}
};
</script>
