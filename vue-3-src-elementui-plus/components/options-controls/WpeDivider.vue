<!--
  - Copyright (c) 2020. This file is copyright by WPEssential.
  -->

<template>
	<div class="wpe-input-field">
		<span v-if="field.title">{{ field.title }}</span>
		<el-divider class="wpe-form divider" v-bind="field.settings">
			<p v-if="field.desc">{{ field.desc }}</p>
			<i v-if="field.icon" :class="field.icon"></i>
		</el-divider>
	</div>
</template>

<script>
import FormMixin from "../FormMixin";

export default {
	mixins: [ FormMixin ]
};
</script>
