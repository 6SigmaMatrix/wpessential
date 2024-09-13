<template>
	<div class="wpe-input-field">
		<el-radio-group v-if="field.options" v-model="value" class="wpe-form select-image" v-on:change="set_value">
			<el-radio v-for="option in field.options" :value="option.key">
				<img :src="option.label" height="80px" width="80px">
			</el-radio>
		</el-radio-group>
	</div>
</template>

<script>
import FormMixin from "../FormMixin";

export default {
	mixins: [ FormMixin ]
};
</script>
