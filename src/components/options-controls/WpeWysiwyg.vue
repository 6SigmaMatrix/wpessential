<template>
	<div class="wpe-input-field" v-loading="loader">
		<textarea :id="field.id" class="wpe-form wysiwyg-editor">{{ value }}</textarea>
	</div>
</template>

<script>
import FormMixin from "../FormMixin";

export default {
	mixins: [ FormMixin ],
	data ()
	{
		return { loader: true };
	},
	mounted ()
	{
		setTimeout( () =>
		{
			let tinymce = window.wp.editor.getDefaultSettings();
			this.loader = false;

			tinymce.setup = edit =>
			{
				edit.on( 'keyup', e =>
				{
					this.set_value( edit.getContent() );
				} );
			};

			window.wp.editor.initialize( this.field.id, {
				tinymce     : tinymce,
				mediaButtons: true,
				quicktags   : true
			} );
		}, 800 );
	}
};
</script>
