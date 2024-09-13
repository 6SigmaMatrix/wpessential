<template>
	<div class="wpe-input-field">
		<div class="wpe-form media">
			<div v-if="value.url" class="image">
				<el-button circle icon="Close" type="danger" v-on:click="set_value( '' )"></el-button>
				<img :src="value.url" width="150">
			</div>
			<el-button :id="'media_'+field.id" icon="el-icon-picture-outline" plain type="primary" v-on:click="add_media()">
				{{ btn_text() }}
			</el-button>
		</div>
	</div>
</template>

<script>
import FormMixin from "../FormMixin";

export default {
	mixins : [ FormMixin ],
	methods: {
		add_media ()
		{
			let editor = window.wp.media.editor;
			editor.activeEditor = document.getElementById( 'media_' + this.field.id );
			editor.open();
			editor.send.attachment = ( props, attachment ) =>
			{
				this.set_value( {
					id : attachment.id,
					url: attachment.sizes.full.url
				} );
			};
		},
		btn_text ()
		{
			if ( this.field.settings !== undefined ) {
				if ( this.value.url ) {
					return this.field.settings.update_text;
				} else {
					return this.field.settings.add_text;
				}
			}
		}
	}
};
</script>
