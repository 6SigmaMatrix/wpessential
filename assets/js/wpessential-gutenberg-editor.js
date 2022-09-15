var el = wp.element.createElement;
var __ = wp.i18n.__;
var registerPlugin = wp.plugins.registerPlugin;
var PluginPostStatusInfo = wp.editPost.PluginPostStatusInfo;
var buttonControl = wp.components.Button;

registerPlugin( 'wpessential', {
	render: ( {} ) =>
	{
		return el(
			PluginPostStatusInfo, { className: 'wpe-duplicate-post is-link' },
			el(
				buttonControl,
				{
					isTertiary: true,
					name      : 'duplicate_page_link_guten',
					isLink    : true,
					title     : wpe_params.wpe_post_title,
					href      : wpe_params.wpe_duplicate_link + "&post=" + wpe_params.wpe_post_id + "&nonce=" + wpe_params.wpenonce
				}, wpe_params.wpe_post_text
			)
		);
	}
} );
