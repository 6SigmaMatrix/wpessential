<template>
	<section v-loading="ajax_loader" class="wpe-plugins-hooks">
		<el-collapse v-if="toggle_data">
			<el-row :gutter="30" type="flex">
				<el-col :span="24">
					<div class="title-section">
						<h2>{{ toggle_data.title }}</h2>
						<p>{{ toggle_data.desc }}</p>
					</div>
				</el-col>
			</el-row>
			<el-row v-for="(data_set_again, _index) in toggle_data.list" :key="_index" :gutter="30" type="flex">
				<el-col :span="24">
					<el-collapse-item :name="_index" :title="data_set_again.title">
						<div class="info-table">
							<el-table :data="data_set_again.list" stripe style="width: 100%">
								<el-table-column :label="data_set_again.column_labels.first" prop="filter"></el-table-column>
							</el-table>
						</div>
					</el-collapse-item>
				</el-col>
			</el-row>
		</el-collapse>
	</section>
</template>
<script>
import Mixin from '../../wpessential-mixin.js';

export default {
	mixins: [ Mixin ],
	name  : "wpe-plugins-hooks",
	data ()
	{
		return {
			toggle_data: null,
			table_data : []
		};
	},
	mounted ()
	{
		this.get_data();
	},
	methods: {
		get_data ()
		{
			this.ajax_loader = true;
			$.ajax( {
				url    : this.$WPE_AJAX_URL,
				type   : "POST",
				data   : {
					action: this.$WPE_AJAX_PREFIX + "_used_hooks",
					nonce : this.$WPE_NONCE
				},
				success: ( res ) =>
				{
					this.toggle_data = res.data;
					this.ajax_loader = false;
				},
				error  : ( res ) =>
				{
					this.ajax_loader = false;
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
