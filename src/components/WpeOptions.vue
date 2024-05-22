<template>
    <div v-loading="page_loader" class="wpe-theme-options">
        <WpePageTitle :description="page_title.description" :title="page_title.title" />
        <section v-loading="db_saved_loader">
            <el-form ref="form" :model="form" :rules="form_rules" class="wpe-options-form" v-bind="$WPE_OPT_ARGS">
                <div v-if="show_top_action" class="theme-options-header">
                    <wpe-theme-info :info="theme_info"></wpe-theme-info>
                    <wpe-actions :section_id="section_id"></wpe-actions>
                </div>
                <el-tabs v-model="section_id" class="wpe-options-tabs-wrapper" tab-position="left">
	                <el-tab-pane v-for="(tabs, index) in controls" :name="tabs.id" :key="index" :class="tabs.children?'has-children':''" class="wpe-options-tab">
	                    <template #label>
	                        <div class="label">
		                        <el-icon v-if="tabs.icon && tabs.icon_type === 'icon'">
                                    <component :is="tabs.icon" />
                                </el-icon>
                                <i v-else-if="tabs.icon && tabs.icon_type === 'img'" class="img-icon">
                                    <img :src="tabs.icon" alt="icon">
                                </i>
                                <i v-else :class="tabs.icon"></i>
	                            <span class="title">
									{{ tabs.title }}
									<wpe-note v-if="tabs.note" v-bind="tabs.note"></wpe-note>
								</span>
	                        </div>
	                    </template>
		                <div v-show="db_save_alert" class="wpe-settings-alert">
		                    <wpe-info :field="{description:'Save the settings before the page refresh', settings:{type:'warning', closable:'closable','show-icon':true, effect:'dark'}}"></wpe-info>
		                </div>
                        <div class="tab-title">
                            <h3>{{ tabs.title }}</h3>
                            <p>{{ tabs.desc }}</p>
                        </div>
                        <wpe-fields :fields="tabs.fields"></wpe-fields>
                        <div v-if="tabs.children" class="wpe-options-sub-form">
                            <el-tabs class="wpe-options-tabs-wrapper children-wrapper" tab-position="left" type="border-card">
                                <el-tab-pane v-for="(_tabs, _index) in tabs.children" :key="_index" class="wpe-options-tab children">
	                                <template #label>
	                                    <div class="label">
		                                    <el-icon v-if="_tabs.icon && _tabs.icon_type === 'icon'">
			                                    <component :is="_tabs.icon" />
		                                    </el-icon>
	                                        <i v-else-if="_tabs.icon === 'img'" class="img-icon">
		                                        <img :src="_tabs.icon" alt="icon">
	                                        </i>
	                                        <i v-else :class="_tabs.icon"></i>
		                                    <span v-if="_tabs.title" class="sub-title title">
												{{ _tabs.title }}
												<wpe-note v-if="_tabs.note" v-bind="_tabs.note"></wpe-note>
											</span>
	                                    </div>
									</template>
                                    <div class="tab-title">
                                        <h3>{{ _tabs.title }}</h3>
                                        <p>{{ _tabs.desc }}</p>
                                    </div>
                                    <wpe-fields :fields="_tabs.fields"></wpe-fields>
                                </el-tab-pane>
                            </el-tabs>
                        </div>
		                <div v-show="db_save_alert" class="wpe-settings-alert">
		                    <wpe-info :field="{description:'Save the settings before the page refresh', settings:{type:'warning', closable:'closable','show-icon':true, effect:'dark'}}"></wpe-info>
		                </div>
                    </el-tab-pane>
                    <div v-if="show_bottom_action" class="theme-options-footer">
                        <wpe-share v-if="$WPE_SOCIAL_PROFILE" :icons="$WPE_SOCIAL_PROFILE"></wpe-share>
                        <wpe-actions :section_id="section_id"></wpe-actions>
                    </div>
                </el-tabs>
            </el-form>
        </section>
    </div>
</template>
<script>
import FormMixin from './FormMixin.js';
import WpeFields from "./WpeFields.vue";
import WpeInfo from "./controls/WpeInfo.vue";
import WpeNote from "./controls/WpeNote.vue";
import WpeActions from "./templates/WpeActions.vue";
import WpePageTitle from "./templates/WpePageTitle.vue";
import WpeShare from "./templates/WpeShare.vue";
import WpeThemeInfo from "./templates/WpeThemeInfo.vue";

export default {
	props      : ['post_id'],
	mixins     : [ FormMixin ],
	components : { WpeInfo, WpePageTitle, WpeThemeInfo, WpeActions, WpeShare, WpeFields, WpeNote },
	data ()
	{
		return {
			section_id         : '',
			controls           : {},
			theme_info         : {},
			show_top_action    : false,
			show_bottom_action : false,
			page_title         : {
				title       : '',
				description : ''
			}
		};
	},
	mounted ()
	{
		this.page_loader = false;
		this.add_meta_class();
		this.render_panel();
		if ( this.post_id )
		{
			this.set_db_post_id( this.post_id );
		}
	},
	methods : {
		add_meta_class ()
		{
			let element = document.getElementsByClassName( "wpessential-admin" );
			if ( element.length >= 1 && ! this.wpe_get_route_id() )
			{
				$.each( element, ( index, item ) =>
				{
					item.parentNode.classList.add( "wpessential-metabox-wrapper" );
					//item.parentNode.previousElementSibling.style.display = 'none';
					/* let find_html = item.parentNode.previousElementSibling.getElementsByClassName( 'handle-actions' );
					 if ( find_html.length === 1 ) {
					 let new_element = item.parentNode.prepend( document.createElement( 'div' ) );
					 new_element.childNodes = find_html[ 0 ].innerHTML;
					 } */
				} );
			}
		},
		render_panel ()
		{
			this.render_page_title();
			this.render_tab();
		},
		render_page_title ()
		{
			if ( this.$WPEssential.admin_pages && this.$route.name )
			{
				this.page_title = {
					title       : this.$WPEssential.admin_pages[ this.$route.name ].page_title,
					description : this.$WPEssential.admin_pages[ this.$route.name ].page_desc
				};
			}
		},
		render_tab ()
		{
			let find_in = this.$WPEssential;
			let route_id = this.wpe_get_route_id();
			if ( route_id && find_in.admin_pages && find_in.admin_pages[ route_id ] )
			{
				let route = find_in.admin_pages[ route_id ];
				if ( route.options )
				{
					this.controls = route.options;
				}

				if ( route.theme_info )
				{
					this.theme_info = route.theme_info;
					this.show_top_action = route.theme_info.show_top_action;
					this.show_bottom_action = route.theme_info.show_bottom_action;
				}
			}
			if ( find_in && find_in.meta )
			{
				this.controls = find_in.meta;
				this.theme_info = find_in.theme_info;
				this.show_top_action = find_in.theme_info.show_top_action;
				this.show_bottom_action = find_in.theme_info.show_bottom_action;
			}
			this.render_fields();
		},
		render_fields ()
		{
			if ( this.controls )
			{
				let tab_count = 1;
				this.controls.forEach( list =>
				{
					if ( tab_count === 1 )
					{
						this.section_id = list.id;
					}

					list.fields.forEach( item =>
					{
						if ( item.id === 'wpe_st_image_export' )
						{
							this.wpe_error( item );
						}
						let data = { key : item.id, value : item.defined || '' };
						this.defined_value( data );
					} );
					tab_count ++;
				} );
			}
		}
	}
};
</script>
