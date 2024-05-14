<template>
	<div class="theme-info">
		<el-badge v-if="info.Version" :value="info.Version" class="theme-name">
			{{ info.Name }}
			<small v-if="info.Template">(Child)</small>
		</el-badge>
		<template v-else>
			<el-badge class="theme-name">
				{{ info.Name }}
				<small v-if="info.Template">(Child)</small>
			</el-badge>
		</template>
	</div>
</template>
<script>

export default {
	props : {
		info : Object
	}
};
</script>
