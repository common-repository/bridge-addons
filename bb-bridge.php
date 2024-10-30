<?php
/**
 * Plugin Name: Bridge Addons
 * Plugin URI: https://bridgeaddons.com
 * Author URI: https://bridgeaddons.com
 * Description: Bridge Addons plugin extends your BeaverBuilder plugin with advanced modules.
 * Version: 1.2.0
 * Author: Bridge Addons
 * License: GNU General Public License v2.0
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: bb-bridge
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'BB_BRIDGE_DIR', plugin_dir_path( __FILE__ ) );
define( 'BB_BRIDGE_URL', plugins_url( '/', __FILE__ ) );

require_once BB_BRIDGE_DIR . 'classes/class-bb-bridge-loader.php';
require_once BB_BRIDGE_DIR . 'includes/helper-functions.php';