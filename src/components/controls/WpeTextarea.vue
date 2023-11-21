<!--
  - Copyright (c) 2020. This file is copyright by WPEssential.
  -->

<template>
	<div class="wpe-input-field">
		<!--        <el-input @input="on_change" v-bind="attr" :name="field.id" type="textarea" class="wpessential-form-textarea" v-model="value"></el-input>-->
		<el-input v-model="value" :name="field.id" class="wpe-form textarea" type="textarea" v-bind="field.settings"></el-input>
	</div>
</template>

<script>
import FormMixin from "../FormMixin";

export default {
	mixins: [ FormMixin ]
};
</script>
