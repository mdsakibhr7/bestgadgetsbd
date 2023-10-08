<?php
/*
	Plugin Name: Best Gadgets Bd Tool
	Plugin URI: https://pluginbazar.com/
	Description: Play sound as notification instantly on new order in your WooCommerce store.
	Version: 1.0.0
	Author: Pluginbazar
	Text Domain:  bgbd-tools
	Author URI: https://pluginbazar.com/
	License: GPLv2 or later
	License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

global $wpdb;

defined( 'ABSPATH' ) || exit;
defined( 'BGBDTOOLS_PLUGIN_URL' ) || define( 'BGBDTOOLS_PLUGIN_URL', WP_PLUGIN_URL . '/' . plugin_basename( dirname( __FILE__ ) ) . '/' );
defined( 'BGBDTOOLS_PLUGIN_DIR' ) || define( 'BGBDTOOLS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
defined( 'BGBDTOOLS_PLUGIN_FILE' ) || define( 'BGBDTOOLS_PLUGIN_FILE', plugin_basename( __FILE__ ) );
defined( 'BGBDTOOLS_PLUGIN_VERSION' ) || define( 'BGBDTOOLS_PLUGIN_VERSION', '1.0.0' );


if ( ! class_exists( 'BGBDTOOLS_Main' ) ) {
	/**
	 * Class BGBDTOOLS_Main
	 */
	class BGBDTOOLS_Main {

		protected static $_instance = null;

		protected static $_script_version = null;

		/**
		 * BGBDTOOLS_Main constructor.
		 */
		function __construct() {

			self::$_script_version = defined( 'WP_DEBUG' ) && WP_DEBUG ? current_time( 'U' ) : BGBDTOOLS_PLUGIN_VERSION;

			$this->loading_scripts();
			$this->loading_functions_classes();
		}


		/**
		 * @return \BGBDTOOLS_Main
		 */
		public static function instance() {
			if ( is_null( self::$_instance ) ) {
				self::$_instance = new self();
			}

			return self::$_instance;
		}


		/**
		 * Loading Functions and Classes
		 */
		function loading_functions_classes() {

			require_once BGBDTOOLS_PLUGIN_DIR . 'includes/class-hooks.php';
			require_once BGBDTOOLS_PLUGIN_DIR . 'includes/class-functions.php';
			require_once BGBDTOOLS_PLUGIN_DIR . 'includes/functions.php';
			require_once BGBDTOOLS_PLUGIN_DIR . 'includes/class-settings.php';
			require_once BGBDTOOLS_PLUGIN_DIR . 'includes/class-meta-boxes.php';
		}


		/**
		 * Admin Scripts
		 */
		function admin_scripts() {

			wp_enqueue_script( 'bgbdtools-admin', plugins_url( '/assets/admin/js/scripts.js', __FILE__ ), array( 'jquery' ), self::$_script_version );
			wp_localize_script( 'bgbdtools-admin', 'bgbdtools', array(
				'ajaxUrl'     => admin_url( 'admin-ajax.php' ),
			) );

			wp_enqueue_style( 'tool-tip', BGBDTOOLS_PLUGIN_URL . 'assets/tool-tip.min.css' );
			wp_enqueue_style( 'bgbdtools-admin', BGBDTOOLS_PLUGIN_URL . 'assets/admin/css/style.css', self::$_script_version );
		}


		/**
		 * Loading Scripts
		 */
		function loading_scripts() {
			add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
		}
	}
}


function wpdk_init_bgbdtools() {

	if ( ! function_exists( 'get_plugins' ) ) {
		include_once ABSPATH . '/wp-admin/includes/plugin.php';
	}

	if ( ! class_exists( 'WPDK\Client' ) ) {
		require_once( plugin_dir_path( __FILE__ ) . 'includes/wpdk/classes/class-client.php' );
	}

	global $bgbdtools_wpdk;

	$bgbdtools_wpdk = new WPDK\Client( esc_html( 'BGBD Tools' ), 'bgbd-tools', 36, __FILE__ );
}

/**
 * @global \WPDK\Client $bgbdtools_wpdk
 */

global $bgbdtools_wpdk;

wpdk_init_bgbdtools();

BGBDTOOLS_Main::instance();

