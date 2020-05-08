<?php
/**
 * Plugin Name: WPEssential
 * Description: WPEssential created themes.
 * Plugin URI: https://wp.wpessential.org/plugins/wpessential/
 * Author: WPEssential
 * Version: 1.0.0
 * Author URI: https://wpessential.org/
 * Text Domain: wpessential
 * Requires PHP: 7.3
 * Requires at least: 5.0
 * Tested up to: 5.0
 * WC requires at least: 3.0
 * WC tested up to: 3.0
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: /languages/
 */

require_once plugin_dir_path( __FILE__ ) . 'install.php';
require_once plugin_dir_path( __FILE__ ) . 'uninstall.php';
require_once plugin_dir_path( __FILE__ ) . 'inc/constants.php';
require_once plugin_dir_path( __FILE__ ) . 'inc/Loader.php';

register_activation_hook( __FILE__, 'wpe_install' );
register_deactivation_hook( __FILE__, 'wpe_unsintall' );
\WPEssential\Loader::constructor();
