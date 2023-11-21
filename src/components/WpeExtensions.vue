<template>
	<div class="wpe-extension-wrapper">
		<div class="wpe-extension-search">
			<div class="wpe-item-search">
				<el-form class="wpe-item-search-form">
					<div class="wpe-banner-title">
						<h1>{{ $ADMIN_PAGES.extensions.page_title }}</h1>
						<p>{{ $ADMIN_PAGES.extensions.page_desc }}</p>
					</div>
					<el-input prefix-icon="i" clearable placeholder="Search Extension" suffix-icon="el-icon-search" v-model="form.item_search"></el-input>
				</el-form>
			</div>
		</div>
		<div class="wpe-extension-list">
			<div class="extension-wrapper">
				<el-row type="flex" :gutter="30">
					<template v-if="list && list.length >=1" v-for="item in list">
						<el-col :xl="8" :lg="8" :md="8" :sm="24">
							<el-badge :value="item.type" class="item">
								<el-card>
									<div class="wpe-extensions-item">
										<el-image :src="item.img">
											<div slot="placeholder" class="image-slot">Loading<span class="dot">...</span></div>
										</el-image>
										<div class="extension-info">
											<h3 class="block"><a :href="item.link" target="_blank">{{ item.title }}</a></h3>
											<el-rate v-model="item.rating" score-template="({value})" disabled show-score text-color="#ff9900"></el-rate>
											<p>{{ item.description }}</p>
										</div>
										<div class="wpe-item-facts">
											<ul class="wpe-item-info block">
												<li>
													<i class="el-icon-user-solid"></i>
													<span class="demonstration">{{ item.author }}</span>
												</li>
												<li>
													<i class="el-icon-s-marketing"></i>
													<span class="demonstration">{{ item.active }}+ active installations</span>
												</li>
												<li>
													<i class="el-icon-odometer"></i>
													<span class="demonstration">Tested with WP {{ item.wp_tested }}</span>
												</li>
												<li>
													<i class="el-icon-medal-1"></i>
													<span class="demonstration">Tested with PHP {{ item.php_tested }}</span>
												</li>
											</ul>
										</div>
										<div class="wpe-item-actions">
											<el-tooltip class="item" effect="dark" content="Install">
												<el-button type="primary" icon="el-icon-circle-plus-outline"></el-button>
											</el-tooltip>
											<el-tooltip class="item" effect="dark" content="Activated">
												<el-button type="success" icon="el-icon-circle-check"></el-button>
											</el-tooltip>
											<el-tooltip class="item" effect="dark" content="Deactivate">
												<el-button type="danger" icon="el-icon-delete"></el-button>
											</el-tooltip>
											<el-tooltip class="item" effect="dark" content="Update">
												<el-button type="warning" icon="el-icon-bell"></el-button>
											</el-tooltip>
										</div>
									</div>
								</el-card>
							</el-badge>
						</el-col>
					</template>
				</el-row>
			</div>
		</div>
	</div>
</template>
<script>
export default {
	data ()
	{
		return {
			list : [],
			form : {
				item_search : ''
			}

		};
	},
	mounted ()
	{
		let route_id = this.wpe_get_route_id();
		if ( route_id && this.$ADMIN_PAGES[ route_id ] )
		{
			this.list = this.$ADMIN_PAGES[ route_id ].options || [];
		}
	}
};
</script>
