<template>
	<!--    <div class="wpe-input-field">
			<div class="wpe-field">
				<span class="wpe-field-link-color-headings">Regular</span>
				<el-color-picker @change="select_change" class="wpe-form link-color" v-model="value.regular"></el-color-picker>
			</div>
			<div class="wpe-field" v-if="field.settings.hover">
				<span class="wpe-field-link-color-headings">Hover</span>
				<el-color-picker @change="select_change" class="wpe-form link-color" v-model="value.hover"></el-color-picker>
			</div>
			<div class="wpe-field" v-if="field.settings.active">
				<span class="wpe-field-link-color-headings">Active</span>
				<el-color-picker @change="select_change" class="wpe-form link-color" v-model="value.active"></el-color-picker>
			</div>
		</div>-->
	<div class="wpe-input-field">
		<div class="wpe-field">
			<span class="wpe-field-link-color-headings">Regular</span>
			<el-color-picker v-model="value.regular" class="wpe-form link-color"></el-color-picker>
		</div>
		<div v-if="field.settings.hover" class="wpe-field">
			<span class="wpe-field-link-color-headings">Hover</span>
			<el-color-picker v-model="value.hover" class="wpe-form link-color"></el-color-picker>
		</div>
		<div v-if="field.settings.active" class="wpe-field">
			<span class="wpe-field-link-color-headings">Active</span>
			<el-color-picker v-model="value.active" class="wpe-form link-color"></el-color-picker>
		</div>
	</div>
</template>

<script>
import FormMixin from "../FormMixin";

export default {
	mixins: [ FormMixin ]
};
</script>
