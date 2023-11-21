<template>
	<div class="wpe-input-field">
		<el-input v-model="value" :name="field.id" class="wpe-form text" type="text" v-bind="field.settings" v-on:change="set_value"></el-input>
	</div>
</template>

<script>
import FormMixin from "../FormMixin";

export default {
	mixins: [ FormMixin ]
};
</script>
