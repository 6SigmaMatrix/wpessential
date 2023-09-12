<template>
    <el-header>
        <el-menu :default-active="active_router_link" :router="true" class="el-menu-demo" mode="horizontal">
            <template v-for="page in $WPEssential.admin_pages" v-if="$WPEssential.admin_pages">
                <el-menu-item v-if="page.route && page.route.path" :index="page.route.path" :route="page.route.path">{{
		                page.menu_title
	                }}</el-menu-item>
            </template>
        </el-menu>
    </el-header>
</template>
<script>
import Mixin from '../wpessential-mixin';

export default {
	mixins: [ Mixin ],
	name  : "wpe-navigation",
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
		this.wpe_active_rout_check();
		console.log( this.$WPEssential.admin_pages );
	},
	methods: {
		wpe_active_rout_check ()
		{
			let match = _.chain( this.$route.matched ).sortBy( ( n ) => n.path.length ).last().value();
			if ( match )
			{
				this.active_router_link = match.path;
			}
		}
	}
};
</script>
