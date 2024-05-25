<template>
		<div class="wpe-admin-page">
		    <el-header>
		        <el-menu :default-active="active_router_link" :router="true" class="el-menu-demo" mode="horizontal">
		            <template v-for="page in $ADMIN_PAGES" v-if="$ADMIN_PAGES">
		                <el-menu-item v-if="page.route && page.route.path" :index="page.route.path" :route="page.route.path">
			                {{ page.menu_title }}
		                </el-menu-item>
		            </template>
		        </el-menu>
		    </el-header>
			<router-view></router-view>
	        <el-backtop v-if="wpe_get_route_id()">
		        <el-icon>
			        <ArrowUp></ArrowUp>
		        </el-icon>
	        </el-backtop>
		</div>
</template>
<script>

export default {
	data ()
	{
		return {
			active_router_link : null
		};
	},
	watch : {
		$route ()
		{
			this.wpe_active_rout_check();
		}
	},
	mounted ()
	{
		this.browser_events();
		this.wpe_active_rout_check();
	},
	methods : {
		wpe_active_rout_check ()
		{
			this.active_router_link = this.$route.path
			let menu_active = this.active_router_link.replace( '/', '' );
			let menu_active_check = $( "#toplevel_page_wpessential a" );
			if ( menu_active_check.length >= 1 )
			{
				$( "#toplevel_page_wpessential li" ).removeClass( "current" );
				$.each( menu_active_check, ( index, item ) =>
				{
					if ( ( $( item ).attr( "href" ) ).includes( menu_active ) )
					{
						$( item ).parent().addClass( 'current' )
					}
				} );
			}
		},
		browser_events ()
		{
			window.addEventListener( 'offline', () =>
			{
				this.$notify.closeAll();
				this.$notify.info( {
					message                  : 'You are currently offline. <a href="javascript:void(0)" onclick="window.location.reload()">Refresh</a>',
					position                 : 'bottom-left',
					dangerouslyUseHTMLString : true,
					duration                 : 0,
					zIndex                   : 999
				} );
			}, false );

			window.addEventListener( 'online', () =>
			{
				this.$notify.closeAll();
				this.$notify( {
					message                  : 'Your internet connection was restored.',
					type                     : 'success',
					position                 : 'bottom-left',
					dangerouslyUseHTMLString : true,
					zIndex                   : 999
				} );
			}, false );
		}
	}
};
</script>
