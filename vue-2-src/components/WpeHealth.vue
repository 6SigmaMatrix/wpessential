<template>
	<div v-loading="page_loader" class="wpe-health-info">
		<wpe-page-title v-if="$WPEssential.admin_pages && $WPEssential.admin_pages.health" :title="$WPEssential.admin_pages.health.page_title" :description="$WPEssential.admin_pages.health.page_desc"></wpe-page-title>
		<wpe-plugins-hooks></wpe-plugins-hooks>
		<wpe-plugins></wpe-plugins>
		<wpe-constants></wpe-constants>
	</div>
</template>
<script>
import WpeConstants from "./info/WpeConstants";
import WpePlugins from "./info/WpePlugins";
import WpePluginsHooks from "./info/WpePluginsHooks";
import Mixin from "../wpessential-mixin";
import WpePageTitle from "./templates/WpePageTitle";

export default {
	mixins    : [ Mixin ],
	components: { WpePageTitle, WpePluginsHooks, WpePlugins, WpeConstants },
	name      : "wpe-health",
	mounted ()
	{
		this.page_loader = false;
	}
};
</script>
