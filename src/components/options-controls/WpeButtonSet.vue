<!--
  - Copyright (c) 2020. This file is copyright by WPEssential.
  -->

<template>
	<div class="wpe-input-field">
		<!--        <el-radio-group @change="select_change" v-bind="attr" class="wpessential-form-button-set" v-model="value" v-if="field.options">
					<el-radio-button v-for="option in data" :key="option.key" :label="field.id+'_'+option.key" :name="field.id+'_'+option.key">
						{{ option.label }}
					</el-radio-button>
				</el-radio-group>-->
		<el-radio-group v-if="field.options" v-model="value" class="wpe-form button-set" v-bind="field.settings">
			<el-radio-button v-for="option in data" :key="option.key" :label="field.id+'_'+option.key" :name="field.id+'_'+option.key">
				{{ option.label }}
			</el-radio-button>
		</el-radio-group>
	</div>
</template>

<script>

import FormMixin from "../FormMixin";

export default {
	mixins: [ FormMixin ]
};
</script>
