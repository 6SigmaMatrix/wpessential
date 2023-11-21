<template>
	<el-option :label="option.label" :value="option.key">
		<template v-if="option.icons">
			<span style="float: left;">{{ option.label }}</span>
			<span style="float: right;">
				<i :class="option.key"></i>
			</span>
		</template>
	</el-option>
</template>

<script>
export default {
	name : 'wpe-select-options',
	props: [ 'icon', 'option' ]
};
</script>
