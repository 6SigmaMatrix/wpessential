<template>
	<el-popover :content="content" :title="title" v-bind="$WPE_OPT_NOTE_ARGS">
		<template #reference>
			<el-button>
				<el-icon :color="icon_color" :size="icon_size">
					<component :is="icon" />
				</el-icon>
			</el-button>
		</template>
	</el-popover>
</template>

<script>
export default {
	props : {
		content    : String,
		title      : String,
		icon       : String,
		icon_color : String,
		icon_size  : String
	}
};
</script>
