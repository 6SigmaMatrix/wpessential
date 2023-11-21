<!--
  - Copyright (c) 2020. This file is copyright by WPEssential.
  -->

<template>
	<div class="wpe-input-field">
		<el-time-picker v-model="value" :placeholder="fieldPlaceholder" :value-format="fieldTimeformat" arrow-control class="wpe-form time" size="large"></el-time-picker>
	</div>
</template>

<script>
import FormMixin from "../FormMixin";

export default {
	mixins: [ FormMixin ]
};
</script>
