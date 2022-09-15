<!--
  - Copyright (c) 2020. This file is copyright by WPEssential.
  -->

<template>
	<div class="wpe-input-field">
		<el-select v-model="value" :loading="loading" :name="field.id" :remote-method="live_search" class="wpe-form select" v-bind="field.settings" v-on:change="set_value">
			<template v-if="field.group">
				<el-option-group v-for="(group, count) in field.options" :key="count" :label="group.label">
					<wpe-select-options v-for="(item, index) in group.list" :key="index" :option="item"/>
				</el-option-group>
			</template>
			<template v-else>
				<wpe-select-options v-for="(item, index) in field.options" :key="index" :option="item"/>
			</template>
		</el-select>
	</div>
</template>

<script>
import FormMixin from "../FormMixin";
import WpeSelectOptions from "./WpeSelectOptions";

export default {
	components: { WpeSelectOptions },
	mixins    : [ FormMixin ],
	data ()
	{
		return {
			loading: false
		};
	},
	mounted ()
	{
		this.add_extra_style_files();
	},
	methods: {
		add_extra_style_files ()
		{
			if ( this.field.icons && this.field.style_files ) {
				this.field.style_files.forEach( item =>
				{
					var style = document.createElement( 'link' );
					style.async = true;
					style.href = item;
					style.rel = 'stylesheet';
					style.media = 'all';
					( document.getElementsByTagName( 'head' )[ 0 ] || document.getElementsByTagName( 'body' )[ 0 ] ).appendChild( style );
				} );
			}
		},
		live_search ( query )
		{
			if ( this.field.settings.remote && query ) {
				this.loading = true;
				$.ajax( {
					url    : this.$WPE_AJAX_URL,
					type   : "POST",
					data   : {
						action: this.$WPE_AJAX_PREFIX + "_live_search",
						nonce : this.$WPE_NONCE,
						args  : this.field.args,
						query : query,
						type  : this.field.data
					},
					success: res =>
					{
						this.loading = false;
						this.field.options = res.data;
					},
					error  : error =>
					{
						this.loading = false;
						if ( error.status === 401 ) {
							console.error( error.responseJSON.data.title + ': ' + error.responseJSON.data.message );
						} else {
							console.error( error.status + ': ' + error.responseText );
						}
					}
				} );
			}
		}
	}
};
</script>
