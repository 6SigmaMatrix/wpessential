<?php

namespace Automattic\WooCommerce\Blocks\Domain;

/**
 * Takes care of bootstrapping the plugin.
 *
 * @since
 */
class Bootstrap
{
	public static function constructor ()
	{
		if ( self::has_core_dependencies() ) {
			//self::init();
		}
	}

	protected static function init ()
	{
		self::register_dependencies();
	}

	/**
	 * Check core dependencies exist.
	 *
	 * @return boolean
	 */
	protected static function has_core_dependencies ()
	{
		$has_needed_dependencies = class_exists( 'WooCommerce', false );
		if ( $has_needed_dependencies ) {
			$plugin_data = \get_file_data(
			//$this->package->get_path( 'woocommerce-gutenberg-products-block.php' ),
				[
					'RequiredWCVersion' => 'WC requires at least',
				]
			);
			if ( isset( $plugin_data[ 'RequiredWCVersion' ] ) && version_compare( \WC()->version, $plugin_data[ 'RequiredWCVersion' ], '<' ) ) {
				$has_needed_dependencies = false;
				add_action(
					'admin_notices',
					function ()
					{
						if ( should_display_compatibility_notices() ) {
							?>
							<div class="notice notice-error">
								<p><?php esc_html_e( 'The WooCommerce Blocks feature plugin requires a more recent version of WooCommerce and has been paused. Please update WooCommerce to the latest version to continue enjoying WooCommerce Blocks.', 'woocommerce' ); ?></p>
							</div>
							<?php
						}
					}
				);
			}
		}
		return $has_needed_dependencies;
	}

	/**
	 * Register core dependencies with the container.
	 */
	protected static function register_dependencies ()
	{
		//install wizard
		/*$this->container->register(
			Installer::class,
			function ()
			{
				return new Installer();
			}
		);*/
	}
}
