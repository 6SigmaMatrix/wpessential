<template>
	<div v-if="value" class="wpe-input-field">
		<el-input-number v-model="value" :name="field.id" class="wpe-form number" v-bind="field.settings" />
	</div>
</template>

<script>
import FormMixin from "../FormMixin";

export default {
	mixins : [ FormMixin ]
};
</script>
