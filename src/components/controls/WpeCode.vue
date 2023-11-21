<template>
	<div class="wpe-input-field">
		<textarea :id="field.id" class="wpe-form code-editor"></textarea>
	</div>
</template>

<script>
import FormMixin from "../FormMixin";

export default {
	mixins: [ FormMixin ],
	mounted ()
	{
		setTimeout( () =>
		{
			let textarea = this.field.id;
			let settings = this.field.settings.args;
			let mirror = window.wp.codeEditor.initialize( textarea, settings );
			mirror.codemirror.on( 'keyup', ( editor ) =>
			{
				this.set_value( editor.getValue() );
			} );
			mirror.codemirror.getDoc().setValue( this.value );
			mirror.codemirror.setOption( "theme", this.field.settings.theme );

		}, 800 );
	}
};
</script>
