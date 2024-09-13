<template>
	<div class="wpe-input-field">
		<el-divider class="wpe-form divider" content-position="left">
			<slot v-if="field.desc">{{ field.desc }}</slot>
		</el-divider>
	</div>
</template>

<script>
import FormMixin from "../FormMixin";

export default {
	mixins: [ FormMixin ]
};
</script>
