<template>
	<div class="wpe-input-field">
		<el-date-picker v-model="value" :appendToBody="false" class="wpe-form datetime" popper-class="datetime-picker" v-bind="field.settings"></el-date-picker>
	</div>
</template>

<script>
import FormMixin from "../FormMixin";

export default {
	mixins: [ FormMixin ]
};
</script>
