<template>
	<div class="wpe-input-field">
		<div class="wpe-form background-media">
			<span class="wpe-field-heading">Background Image</span>
			<input v-model="value.image" type="hidden">
			<div v-if="attachment.sizes" class="wpe-form image">
				<img :alt="attachment.title" :src="attachment.sizes.thumbnail.url">
			</div>
			<el-button :id="'media_'+field.id" :loading="loading" class="wpe-form image-button" icon="PictureFilled" plain type="primary" @click.prevent="add_media()">
				{{ button_text() }}
			</el-button>
		</div>

		<div v-if="value.image" class="wpe-form background-preset">
			<span class="wpe-field-heading">Preset</span>
			<el-select v-model="value.perset" :name="field_id+'_perset'" class="wpe-form select background-preset-select" @change="val_change('perset',$event)">
				<el-option v-for="(label, key) in preset_set()" :key="key" :label="label" :value="key"></el-option>
			</el-select>
		</div>

		<div v-if="value.perset !== 'default'" class="wpe-form background-position">
			<span class="wpe-field-heading">Image Position</span>
			<el-radio-group v-model="value.position" class="wpe-form background-position-radio" @change="val_change('position',$event)">
				<el-radio-button v-for="option in position_set()" :key="option.key" :class="option.class" :value="field_id+'_position_'+option.key">
					<i :class="option.label"></i>
				</el-radio-button>
			</el-radio-group>
		</div>

		<div v-if="value.perset === 'custom'" class="wpe-form background-size">
			<span class="wpe-field-heading">Image Size</span>
			<el-select v-model="value.size" :name="field_id+'_size'" class="wpe-form select background-size-select" @change="val_change('size',$event)">
				<el-option v-for="(label, key) in size_set()" :key="key" :label="label" :value="key"></el-option>
			</el-select>
		</div>

		<div v-if="value.perset === 'custom' || value.perset === 'fit'" class="wpe-form background-repeat">
			<span class="wpe-field-heading">Repeat</span>
			<el-switch v-model="value.repeat" :name="field_id+'_repeat'" class="wpe-form switcher background-repeat-switcher" @change="val_change('repeat',$event)" />
		</div>

		<div v-if="value.perset === 'custom'" class="wpessential-form-background-scroll">
			<span class="wpe-field-heading">Scroll with Page</span>
			<el-switch v-model="value.attachment" :name="field_id+'_attachment'" class="wpe-form switcher background-scroll-switcher" @change="val_change('attachment',$event)" />
		</div>
	</div>
</template>

<script>
import FormMixin from "../FormMixin";

export default {
	mixins : [ FormMixin ],
	data ()
	{
		return {
			attachment : {},
			loading    : false,
			field_id   : this.field.id
		};
	},
	methods : {
		add_media ()
		{
			let editor = window.wp.media.editor;
			editor.activeEditor = document.getElementById( 'media_' + this.field.id );
			editor.open();
			editor.send.attachment = ( props, attachment ) =>
			{
				this.attachment = attachment;
				this.val_change( 'image', attachment.sizes.full.url )
			};
		},
		button_text ()
		{
			if ( this.field.settings !== undefined )
			{
				if ( this.attachment.sizes )
				{
					return this.field.settings.update;
				}
				else
				{
					return this.field.settings.new;
				}
			}
		},
		preset_set ()
		{
			return {
				default : 'Default',
				fill    : 'Fill Screen',
				fit     : 'Fit to Screen',
				repeat  : 'Repeat',
				custom  : 'Custom'
			};
		},
		position_set ()
		{
			return [
				{
					key   : 'left top',
					label : 'fas fa-arrow-left',
					class : 'left top'
				},
				{
					key   : 'center top',
					label : 'fas fa-arrow-left',
					class : 'center top'
				},
				{
					key   : 'right top',
					label : 'fas fa-arrow-right',
					class : 'right top'
				},
				{
					key   : 'left center',
					label : 'fas fa-arrow-left',
					class : 'left center'
				},
				{
					key   : 'center center',
					label : 'fas fa-circle',
					class : 'center center'
				},
				{
					key   : 'right center',
					label : 'fas fa-arrow-right',
					class : 'right center'
				},
				{
					key   : 'left bottom',
					label : 'fas fa-arrow-left',
					class : 'left bottom'
				},
				{
					key   : 'center bottom',
					label : 'fas fa-arrow-left',
					class : 'center bottom'
				},
				{
					key   : 'right bottom',
					label : 'fas fa-arrow-right',
					class : 'right bottom'
				}
			];
		},
		size_set ()
		{
			return {
				auto    : 'Original',
				contain : 'Fit to Screen',
				cover   : 'Fill Screen'
			};
		},
		val_change ( key, value )
		{
			this.value[ key ] = value
			this.set_value( this.value )
		}
	}
};
</script>
