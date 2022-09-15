<!--
  - Copyright (c) 2020. This file is copyright by WPEssential.
  -->

<template>
	<div class="wpe-input-field">
		<!--        <el-input @input="on_change" :name="field.id" type="url" class="wpe-form input-url" v-model="value">
					<template slot="prepend">https://</template>
				</el-input>-->
		<el-input v-model="value" :name="field.id" class="wpe-form url" type="url" v-bind="field.settings">
			<template slot="prepend">https://</template>
		</el-input>
	</div>
</template>

<script>
import FormMixin from "../FormMixin";

export default {
	mixins: [ FormMixin ]
};
</script>
