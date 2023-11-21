<template>
	<div class="share">
		<a :href="icon.link|| 'javascript:void(0)'" target="_blank" :title="icon.title|| ''" v-for="icon in icons" :key="icon.title">
			<el-icon>
				<component :is="icon.icon|| 'Plus'" />
			</el-icon>
		</a>
	</div>
</template>
<script>

export default {
	props : {
		icons : Array
	}
};
</script>
