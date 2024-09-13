<template>
	<div class="wpe-input-field">
		<el-radio-group v-if="field.options" v-model="value" class="wpe-form radio">
			<el-radio v-for="option in data" :key="option.key" :value="field.id+'_'+option.key" v-bind="field.settings">
				{{ option.label }}
			</el-radio>
		</el-radio-group>
	</div>
</template>

<script>
import FormMixin from "../FormMixin";

export default {
	mixins : [ FormMixin ]
};
</script>
