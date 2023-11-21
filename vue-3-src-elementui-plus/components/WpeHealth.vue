<template>
	<div v-loading="page_loader" class="wpe-health-info">
		<WpePageTitle v-if="$ADMIN_PAGES && $ADMIN_PAGES.health" :title="$ADMIN_PAGES.health.page_title" :description="$ADMIN_PAGES.health.page_desc" />
		<WpePluginsHooks />
		<WpePlugins />
		<WpeConstants />
	</div>
</template>
<script>
import WpeConstants from "./info/WpeConstants.vue";
import WpePlugins from "./info/WpePlugins.vue";
import WpePluginsHooks from "./info/WpePluginsHooks.vue";
import WpePageTitle from "./templates/WpePageTitle.vue";

export default {
	components: { WpePageTitle, WpePluginsHooks, WpePlugins, WpeConstants },
	mounted ()
	{
		this.page_loader = false;
	}
};
</script>
