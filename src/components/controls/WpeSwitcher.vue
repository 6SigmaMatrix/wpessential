<template>
	<div v-if="value" class="wpe-input-field">
		<el-switch v-model="value" :name="field.id" class="wpe-form switcher" v-bind="field.settings" />
	</div>
</template>

<script>
import FormMixin from "../FormMixin";

export default {
	mixins : [ FormMixin ]
};
</script>
