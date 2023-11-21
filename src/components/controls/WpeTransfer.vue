<!--
  - Copyright (c) 2020. This file is copyright by WPEssential.
  -->

<template>
	<!--    <div class="wpe-field">
			<el-transfer @change="select_change" v-bind="attr" class="wpe-form transfer" v-model="value" :data="data"></el-transfer>
		</div>-->
	<div class="wpe-field">
		<el-transfer v-model="value" :data="data" class="wpe-form transfer" v-bind="field.settings"></el-transfer>
	</div>
</template>

<script>
import FormMixin from "../FormMixin";

export default {
	mixins: [ FormMixin ]
};
</script>
