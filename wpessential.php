<?php
/**
 * Plugin Name: WPEssential
 * Description: WPEssential is a flexible extension of WordPress. It is open-source and themes also page builder solution in WordPress. Create any theme, anywhere and make your way. There is no `PHP`, `CSS`, `HTML` and `Javascript` coding knowledge need.
 * Plugin URI: https://wp.wpessential.org/plugins/wpessential/
 * Author: WPEssential
 * Version: 1.0.0.00003
 * Author URI: https://wpessential.org/
 * Text Domain: wpessential
 * Requires PHP: 7.4
 * Requires at least: 5.5.0
 * Tested up to: 5.5
 * WC requires at least: 4.0
 * WC tested up to: 4.5
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: /languages/
 */

require_once plugin_dir_path( __FILE__ ) . 'constants.php';
require_once WPE_DIR . 'install.php';
require_once WPE_DIR . 'uninstall.php';
require_once WPE_DIR . 'inc/Loader.php';

register_activation_hook( __FILE__, 'wpe_install' );
register_deactivation_hook( __FILE__, 'wpe_unsintall' );
\WPEssential\Plugins\Loader::constructor();
