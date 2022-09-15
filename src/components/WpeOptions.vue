<template>
	<div v-loading="page_loader" class="wpe-theme-options">
		<wpe-page-title v-if="$WPEssential.admin_pages && $WPEssential.admin_pages.theme_options" :title="$WPEssential.admin_pages.theme_options.page_title" :description="$WPEssential.admin_pages.theme_options.page_desc"></wpe-page-title>
		<section v-loading="form_loader">
			<el-form ref="form" :model="form" :rules="form_rules" class="wpe-options-form" v-bind="form_args">
				<div class="theme-options-header">
					<wpe-theme-info :info="theme_info"></wpe-theme-info>
					<wpe-actions></wpe-actions>
				</div>
				<el-button ref="btn" class="tab-collaps el-tabs__item" icon="el-icon-caret-left" size="mini" style="display: none" v-on:click.prevent="collapse_class">
					Collapse menu
				</el-button>
				<el-tabs ref="tabs" :class="collapse? 'panel-collapse':''" class="wpe-options-tabs-wrapper" tab-position="left">
					<el-tab-pane v-for="(tabs, index) in controls" :key="index" :class="tabs.children?'has-children':''" class="wpe-options-tab">
						<div slot="label" class="label">
							<i v-if="tabs.icon && tabs.icon_type === 'icon'" :class="tabs.icon"></i>
							<i v-else-if="tabs.icon" class="img-icon">
								<img alt="icon" :src="tabs.icon">
							</i>
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
										<i v-else-if="_tabs.icon" class="img-icon">
											<img alt="icon" :src="_tabs.icon">
										</i>
										<span v-if="_tabs.title" slot="label" class="sub-title title">
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

					<div class="theme-options-footer">
						<wpe-share v-if="global_tabs_args.footer_share" :icons="global_tabs_args.footer_share"></wpe-share>
						<wpe-actions></wpe-actions>
					</div>
				</el-tabs>

				<!--<template v-else>
					<wpe-form :fields="tabs.fields"></wpe-form>
				</template>-->
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

export default {
	mixins    : [ Mixin, FormMixin ],
	name      : "wpe-theme-options",
	components: { WpePageTitle, WpeThemeInfo, WpeActions, WpeShare, WpeForm, WpeNote },
	computed  : {},
	data ()
	{
		return {
			form_loader     : false,
			collapse        : false,
			form_args       : this.$WPEssential.global_options_args,
			global_tabs_args: this.$WPEssential.global_tabs_args,
			tabs_count      : 0,
			controls        : {},
			theme_info      : {}
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
			if ( element.length >= 1 && ! this.wpe_get_route_id() ) {
				$.each( element, ( index, item ) =>
				{
					item.parentNode.classList.add( "wpessential-metabox-wrapper" );
					item.parentNode.previousElementSibling.style.display = 'none';
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
			this.render_tab();
			this.insert_btn();
			this.theme_info = this.$WPEssential.theme_info;
		},
		render_tab ()
		{
			let find_in = this.$WPEssential;
			let route_id = this.wpe_get_route_id();
			if ( route_id && find_in[ route_id ] ) {
				this.controls = find_in[ route_id ];
			} else {
				this.controls = find_in[ 'meta' ];
			}
			this.render_fields();
		},
		render_fields ()
		{
			if ( this.controls ) {
				this.tabs_count = this.controls.length;
				this.controls.forEach( list =>
				{
					list.fields.forEach( item =>
					{
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
