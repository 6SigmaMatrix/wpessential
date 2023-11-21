<template>
	<div class="share">
		<a :href="icon.link|| 'javascript:void(0)'" target="_blank" :title="icon.title|| ''" v-for="icon in icons" :key="icon.title">
			<i :class="icon.icon|| 'el-icon-plus'"></i>
		</a>
	</div>
</template>
<script>

export default {
	props: {
		icons: Array
	},
	name : "wpe-share"
};
</script>
