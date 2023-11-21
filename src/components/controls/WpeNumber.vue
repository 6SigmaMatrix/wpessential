<!--
  - Copyright (c) 2020. This file is copyright by WPEssential.
  -->

<template>
	<!--    <div class="wpessential-field" :span="v_if_single(field.help,13,16 )">
			<el-input-number @input="on_change" v-bind="attr" :name="field.id" type="number" class="wpessential-form-number" v-model="value"></el-input-number>
			<div class="wpessential-field-desc el-col el-col-24" v-if="field.desc">{{ field.desc }}</div>
		</div>-->
	<div class="wpe-input-field">
		<el-input-number v-model="value" :name="field.id" class="wpe-form number" v-bind="field.settings"></el-input-number>
	</div>
</template>

<script>
import FormMixin from "../FormMixin";

export default {
	mixins: [ FormMixin ]
};
</script>
