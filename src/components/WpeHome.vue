<template>
	<div v-loading="page_loader" class="wpe-home">
		<section>
			<div class="block" style="width: 100%;margin: 0 auto;text-align: center;height: 100vh;">
				<el-image src="https://ps.w.org/wpessential/assets/banner-772x250.jpg" style="transform: translateY(50%);">
					<div slot="placeholder" class="image-slot">
						Loading<span class="dot">...</span>
					</div>
				</el-image>
			</div>
		</section>
	</div>
</template>
<script>
import WpessentialMixin from "../wpessential-mixin";

export default {
	mixins: [ WpessentialMixin ],
	name  : "wpe-home",
	data ()
	{
		return {};
	},
	mounted ()
	{
		this.$WPEssential.options_routes = {};
		this.page_loader = false;
	}
};
</script>
