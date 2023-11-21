<!--
  - Copyright (c) 2020. This file is copyright by WPEssential.
  -->

<template>
	<!--    <el-col class="wpe-field" :span="v_if_single(field.help,13,16 )">
			<el-radio-group @change="select_change" class="wpe-form radio" v-model="value" v-if="field.options">
				<el-radio v-bind="attr" v-for="option in data" :key="option.key" :label="field.id+'_'+option.key" :name="field.id+'_'+option.key">
					{{ option.label }}
				</el-radio>
			</el-radio-group>
		</el-col>-->
	<el-col class="wpe-input-field">
		<el-radio-group v-if="field.options" v-model="value" class="wpe-form radio">
			<el-radio v-for="option in data" :key="option.key" :label="field.id+'_'+option.key" :name="field.id+'_'+option.key" v-bind="field.settings">
				{{ option.label }}
			</el-radio>
		</el-radio-group>
	</el-col>
</template>

<script>
import FormMixin from "../FormMixin";

export default {
	mixins: [ FormMixin ]
};
</script>
