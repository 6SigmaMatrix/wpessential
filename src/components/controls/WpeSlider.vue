<template>
	<!--    <div class="wpe-input-field">
			<el-slider @change="on_change" v-bind="attr" class="wpe-form slider" v-model="value"></el-slider>
		</div>-->
	<div class="wpe-input-field">
		<el-slider v-model="value" class="wpe-form slider" v-bind="field.settings"></el-slider>
	</div>
</template>

<script>
import FormMixin from "../FormMixin";

export default {
	mixins: [ FormMixin ]
};
</script>
