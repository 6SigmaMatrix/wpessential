<?php

namespace WPEssential\Plugins\Utility;

final class Tgm
{
	public static function constructor ()
	{
		require_once WPE_DIR . '/inc/Libraries/class-tgm-plugin-activation.php';
		add_action( 'tgmpa_register', [ __CLASS__, 'plugin_list' ] );
	}

	public static function plugin_list ()
	{
		$plugin_list = [
			'exmaple' => [
				'name'               => 'TGM Example Plugin', // The plugin name.
				'slug'               => 'tgm-example-plugin', // The plugin slug (typically the folder name).
				'source'             => dirname( __FILE__ ) . '/lib/plugins/tgm-example-plugin.zip', // The plugin source.
				'required'           => true,
				'version'            => '1.0.0',
				'force_activation'   => false,
				'force_deactivation' => false,
				'external_url'       => '',
				'is_callable'        => '',
			],
		];

		$plugin_list = apply_filters( 'wpe/register/plugins', $plugin_list );

		tgmpa( $plugin_list, self::config() );
	}

	private static function config ()
	{
		$config = [
			'id'           => 'wpessential',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'wpessential-install-plugins', // Menu slug.
			'parent_slug'  => 'plugins.php',            // Parent menu slug.
			'capability'   => 'manage_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => true,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.

			/*
			'strings'      => array(
				'page_title'                      => __( 'Install Required Plugins', 'wpessential' ),
				'menu_title'                      => __( 'Install Plugins', 'wpessential' ),
				/* translators: %s: plugin name. * /
				'installing'                      => __( 'Installing Plugin: %s', 'wpessential' ),
				/* translators: %s: plugin name. * /
				'updating'                        => __( 'Updating Plugin: %s', 'wpessential' ),
				'oops'                            => __( 'Something went wrong with the plugin API.', 'wpessential' ),
				'notice_can_install_required'     => _n_noop(
					/* translators: 1: plugin name(s). * /
					'This theme requires the following plugin: %1$s.',
					'This theme requires the following plugins: %1$s.',
					'wpessential'
				),
				'notice_can_install_recommended'  => _n_noop(
					/* translators: 1: plugin name(s). * /
					'This theme recommends the following plugin: %1$s.',
					'This theme recommends the following plugins: %1$s.',
					'wpessential'
				),
				'notice_ask_to_update'            => _n_noop(
					/* translators: 1: plugin name(s). * /
					'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
					'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
					'wpessential'
				),
				'notice_ask_to_update_maybe'      => _n_noop(
					/* translators: 1: plugin name(s). * /
					'There is an update available for: %1$s.',
					'There are updates available for the following plugins: %1$s.',
					'wpessential'
				),
				'notice_can_activate_required'    => _n_noop(
					/* translators: 1: plugin name(s). * /
					'The following required plugin is currently inactive: %1$s.',
					'The following required plugins are currently inactive: %1$s.',
					'wpessential'
				),
				'notice_can_activate_recommended' => _n_noop(
					/* translators: 1: plugin name(s). * /
					'The following recommended plugin is currently inactive: %1$s.',
					'The following recommended plugins are currently inactive: %1$s.',
					'wpessential'
				),
				'install_link'                    => _n_noop(
					'Begin installing plugin',
					'Begin installing plugins',
					'wpessential'
				),
				'update_link' 					  => _n_noop(
					'Begin updating plugin',
					'Begin updating plugins',
					'wpessential'
				),
				'activate_link'                   => _n_noop(
					'Begin activating plugin',
					'Begin activating plugins',
					'wpessential'
				),
				'return'                          => __( 'Return to Required Plugins Installer', 'wpessential' ),
				'plugin_activated'                => __( 'Plugin activated successfully.', 'wpessential' ),
				'activated_successfully'          => __( 'The following plugin was activated successfully:', 'wpessential' ),
				/* translators: 1: plugin name. * /
				'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'wpessential' ),
				/* translators: 1: plugin name. * /
				'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'wpessential' ),
				/* translators: 1: dashboard link. * /
				'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'wpessential' ),
				'dismiss'                         => __( 'Dismiss this notice', 'wpessential' ),
				'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'wpessential' ),
				'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'wpessential' ),

				'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
			),
			*/
		];
		return apply_filters( 'wpe/tgm/config', $config );
	}
}
