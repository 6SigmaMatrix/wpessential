<template>
    <div v-loading="page_loader" class="wpe-theme-options">
        <wpe-page-title :description="page_title.description" :title="page_title.title"></wpe-page-title>
        <section v-loading="form_loader">
            <el-form ref="form" :model="form" :rules="form_rules" class="wpe-options-form" v-bind="$WPE_OPT_ARGS">
                <div v-if="show_save_button" class="theme-options-header">
                    <wpe-theme-info :info="theme_info"></wpe-theme-info>
                    <wpe-actions></wpe-actions>
                </div>
                <div v-if="save_alert" class="wpe-settings-alert">
                    <wpe-info :field="{description:'Save the settings before the page refresh', settings:{type:'warning', closable:0,'show-icon':true, effect:'dark'}}"></wpe-info>
                </div>
                <el-tabs ref="tabs" :class="collapse? 'panel-collapse':''" class="wpe-options-tabs-wrapper" tab-position="left">
                    <el-tab-pane v-for="(tabs, index) in controls" :key="index" :class="tabs.children?'has-children':''" class="wpe-options-tab">
                        <div slot="label" class="label">
                            <i v-if="tabs.icon && tabs.icon_type === 'icon'" :class="tabs.icon"></i>
                            <i v-else-if="tabs.icon" class="img-icon"> <img :src="tabs.icon" alt="icon"> </i>
                            <span class="title">
								{{ tabs.title }}
								<wpe-note v-if="tabs.note" v-bind="tabs.note"></wpe-note>
							</span>
                        </div>
                        <div class="tab-title">
                            <h3>{{ tabs.title }}</h3>
                            <p>{{ tabs.desc }}</p>
                        </div>
                        <wpe-form :fields="tabs.fields"></wpe-form>
                        <div v-if="tabs.children" class="wpe-options-sub-form">
                            <el-tabs class="wpe-options-tabs-wrapper children-wrapper" tab-position="left" type="border-card">
                                <el-tab-pane v-for="(_tabs, _index) in tabs.children" :key="_index" class="wpe-options-tab children">
                                    <div slot="label" class="label">
                                        <i v-if="_tabs.icon && _tabs.icon_type === 'icon'" :class="_tabs.icon"></i>
                                        <i v-else-if="_tabs.icon" class="img-icon"> <img :src="_tabs.icon" alt="icon">
                                        </i> <span v-if="_tabs.title" slot="label" class="sub-title title">
											{{ _tabs.title }}
											<wpe-note v-if="_tabs.note" v-bind="_tabs.note"></wpe-note>
										</span>
                                    </div>

                                    <div class="tab-title">
                                        <h3>{{ _tabs.title }}</h3>
                                        <p>{{ _tabs.desc }}</p>
                                    </div>
                                    <wpe-form :fields="_tabs.fields"></wpe-form>
                                </el-tab-pane>
                            </el-tabs>
                        </div>
                    </el-tab-pane>
                    <div v-if="show_save_button" class="theme-options-footer">
                        <wpe-share v-if="$WPE_OPT_TABS_ARGS.footer_share" :icons="$WPE_OPT_TABS_ARGS.footer_share"></wpe-share>
                        <wpe-actions></wpe-actions>
                    </div>
                </el-tabs>
                <div v-if="save_alert" class="wpe-settings-alert">
                    <wpe-info :field="{description:'Save the settings before the page refresh', settings:{type:'warning', closable:0,'show-icon':true, effect:'dark'}}"></wpe-info>
                </div>
                <el-button ref="btn" class="tab-collaps el-tabs__item" icon="el-icon-caret-left" size="mini" style="display: none" v-on:click.prevent="collapse_class">
                    Collapse menu
                </el-button>
            </el-form>
        </section>
        <el-backtop v-if="wpe_get_route_id()">
            <i class="el-icon-arrow-up"></i>
        </el-backtop>
    </div>
</template>
<script>
import Mixin from '../wpessential-mixin';
import FormMixin from './FormMixin';
import WpeForm from "./options-controls/WpeForm";
import WpeNote from "./options-controls/WpeNote";
import WpeActions from "./templates/WpeActions";
import WpePageTitle from "./templates/WpePageTitle";
import WpeShare from "./templates/WpeShare";
import WpeThemeInfo from "./templates/WpeThemeInfo";
import WpeInfo from "./options-controls/WpeInfo.vue";

export default {
	mixins    : [ Mixin, FormMixin ],
	name      : "wpe-theme-options",
	components: { WpeInfo, WpePageTitle, WpeThemeInfo, WpeActions, WpeShare, WpeForm, WpeNote },
	computed  : {},
	data ()
	{
		return {
			form_loader     : false,
			save_alert      : false,
			collapse        : false,
			tabs_count      : 0,
			controls        : {},
			theme_info      : {},
			show_save_button: true,
			page_title      : {
				title      : '',
				description: ''
			}
		};
	},
	mounted ()
	{
		this.page_loader = false;
		this.add_meta_class();
		this.render_panel();
	},
	methods: {
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
			this.insert_btn();
			this.theme_info = this.$WPEssential.theme_info;
		},
		render_page_title ()
		{
			if ( this.$WPEssential.admin_pages && this.$route.name )
			{
				console.log( this.$WPEssential.admin_pages, this.$route.name );
				this.page_title = {
					title      : this.$WPEssential.admin_pages[ this.$route.name ].page_title,
					description: this.$WPEssential.admin_pages[ this.$route.name ].page_desc
				};
			}
		},
		render_tab ()
		{
			let find_in = this.$WPEssential;
			let route_id = this.wpe_get_route_id();
			if ( route_id && find_in.admin_pages && find_in.admin_pages[ route_id ] && find_in.admin_pages[ route_id ].options )
			{
				this.controls = find_in.admin_pages[ route_id ].options;
			}
			if ( find_in && find_in.meta )
			{
				console.log( find_in );
				this.controls = find_in.meta;
			}
			this.render_fields();
		},
		render_fields ()
		{
			if ( this.controls )
			{
				this.tabs_count = this.controls.length;
				this.controls.forEach( list =>
				{
					list.fields.forEach( item =>
					{
						if ( item.id === 'wpe_st_image_export' )
						{
							this.wpe_error( item );
						}
						let data = { key: item.id, value: item.defined || '' };
						this.defined_value( data );
					} );
				} );
			}
		},
		insert_btn ()
		{
			const scrollBar = this.$refs.tabs.$el.querySelector( '.el-tabs__nav' );
			setTimeout( () =>
				{
					this.$refs.btn.$el.removeAttribute( 'style' );
					scrollBar.lastChild.after( this.$refs.btn.$el );
				}, 2000
			);
		},
		collapse_class ()
		{
			this.collapse = ! this.collapse;
		}
	}
};
</script>
