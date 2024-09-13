<template>
	<div class="wpe-input-field">
		<el-color-picker v-model="value" class="wpe-form color" v-bind="field.settings" v-on:change="set_value"></el-color-picker>
	</div>
</template>

<script>
import FormMixin from "../FormMixin";

export default {
	mixins: [ FormMixin ]
};
</script>
