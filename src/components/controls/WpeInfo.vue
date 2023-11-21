<!--
  - Copyright (c) 2020. This file is copyright by WPEssential.
  -->

<template>
	<div class="wpe-input-field">
		<el-alert :description="(field.subtitle)? field.subtitle:'' +' '+ (field.description)? field.description:''" :name="field.id" :title="field.title" class="wpe-form info" v-bind="field.settings"></el-alert>
	</div>
</template>

<script>
import FormMixin from "../FormMixin";

export default {
	mixins : [ FormMixin ]
};
</script>
