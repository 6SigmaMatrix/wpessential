<template>
	<div class="wpe-input-field">
		<!--        <el-checkbox-group @change="select_change" class="wpessential-form-button-group" v-model="value" v-if="field.options">
					<el-checkbox-button v-for="option in field.options" :key="option.key" :name="field.id+'_'+option.key" :label="field.id+'_'+option.key">
						{{ option.label }}
					</el-checkbox-button>
				</el-checkbox-group>-->
		<el-checkbox-group v-if="field.options" v-model="value" class="wpe-form button-group" v-bind="field.settings">
			<el-checkbox-button v-for="option in field.options" :key="option.key" :label="field.id+'_'+option.key" :name="field.id+'_'+option.key">
				{{ option.label }}
			</el-checkbox-button>
		</el-checkbox-group>
	</div>
</template>

<script>

import FormMixin from "../FormMixin";

export default {
	mixins: [ FormMixin ]
};
</script>
