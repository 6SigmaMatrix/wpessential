<template>
	<el-popover :content="content" :title="title" v-bind="args">
		<el-button slot="reference">
			<i :class="icon"></i>
		</el-button>
	</el-popover>
</template>

<script>

export default {
	props: [ 'content', 'title', 'icon' ],
	data ()
	{
		return {
			args: this.$WPEssential.global_tabs_args.note
		};
	}
};
</script>
