<!--
  - Copyright (c) 2020. This file is copyright by WPEssential.
  -->

<template>
	<!--    <div class="wpe-field">
			<el-switch @change="select_change" :name="field.id" v-bind="attr" v-model="value" class="wpe-form toggle"></el-switch>
		</div>-->
	<div class="wpe-field">
		<el-switch v-model="value" class="wpe-form toggle" name="field.id" v-bind="field.settings"></el-switch>
	</div>
</template>

<script>
import FormMixin from "../FormMixin";

export default {
	mixins: [ FormMixin ]
};
</script>
