<?php
/**
 * Class Hooks
 *
 * @author Pluginbazar
 */

use WPDK\Utils;

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'BGBDTOOLS_Hooks' ) ) {
	class BGBDTOOLS_Hooks {

		function __construct() {
			add_action( 'init', array( $this, 'register_everything' ) );
		}

		function register_everything() {
			global $bgbdtools_wpdk;

			$bgbdtools_wpdk->utils()->register_post_type( 'phone', array(
					'singular'      => esc_html__( 'Phones' ),
					'plural'        => esc_html__( 'Phone' ),
					'supports'      => array( 'title', 'editor', 'thumbnail' ),
					'menu_position' => 37,
					'rewrite'       => array(
						'slug' => 'phone',
					),
				)
			);
		}
	}
}

new BGBDTOOLS_Hooks();
