<template>
    <el-header>
        <el-menu :default-active="active_router_link" :router="true" class="el-menu-demo" mode="horizontal">
            <template v-for="page in $ADMIN_PAGES" v-if="$ADMIN_PAGES">
                <el-menu-item v-if="page.route && page.route.path" :index="page.route.path" :route="page.route.path">{{
		                page.menu_title
	                }}</el-menu-item>
            </template>
        </el-menu>
    </el-header>
</template>
<script>

export default {
	data ()
	{
		return {
			active_router_link: null
		};
	},
	watch: {
		$route ()
		{
			this.wpe_active_rout_check();
		}
	},
	mounted ()
	{
		this.browser_events();
		this.wpe_active_rout_check();
		console.log( window );
	},
	methods: {
		wpe_active_rout_check ()
		{
			let match = _.chain( this.$route.matched ).sortBy( n => n.path.length ).last().value();
			if ( match )
			{
				this.active_router_link = match.path;
			}
		},
		browser_events ()
		{
			window.addEventListener( 'offline', () =>
			{
				this.$notify.closeAll();
				this.$notify.info( {
					message                 : 'You are currently offline. <a href="javascript:void(0)" onclick="window.location.reload()">Refresh</a>',
					position                : 'bottom-left',
					dangerouslyUseHTMLString: true,
					duration                : 0
				} );
			}, false );

			window.addEventListener( 'online', () =>
			{
				this.$notify.closeAll();
				this.$notify( {
					message                 : 'Your internet connection was restored.',
					type                    : 'success',
					position                : 'bottom-left',
					dangerouslyUseHTMLString: true
				} );
			}, false );
		},
	}
};
</script>
