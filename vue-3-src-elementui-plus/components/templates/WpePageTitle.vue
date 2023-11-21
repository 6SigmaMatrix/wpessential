<template>
	<section>
		<el-row :gutter="30" type="flex">
			<el-col :span="24">
				<div class="title-section">
					<h1>{{ title }}</h1>
					<p>{{ description }}</p>
				</div>
			</el-col>
		</el-row>
	</section>
</template>
<script>

export default {
	props: {
		title      : String,
		description: String
	},
};
</script>
