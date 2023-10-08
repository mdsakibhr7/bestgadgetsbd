<?php
/**
 * Settings class
 *
 * @author Pluginbazar
 */

use WPDK\Utils;

defined( 'ABSPATH' ) || exit;

class BGBDTOOLS_Settings {
	public function __construct() {

		global $bgbdtools_wpdk;

		$settings_args = array(
			'framework_title'    => esc_html__( 'Best Gadgets BD', 'bgbd' ),
			'menu_title'         => esc_html__( 'Best Gadget', 'bgbd' ),
			'menu_type'          => 'menu',
			'menu_slug'          => 'bgbdtools',
			'menu_position'      => 30,
			'database'           => 'option',
			'theme'              => 'light',
			'menu_icon'          => 'dashicons-admin-generic',
			'show_search'        => false,
			'show_reset_all'     => false,
			'show_reset_section' => false,
		);

		WPDK_Settings::createSettingsPage( $bgbdtools_wpdk->plugin_unique_id, $settings_args, $this->get_settings_pages() );
	}


	function get_settings_pages() {

		$field_sections['listener'] = array(
			'title'    => esc_html__( 'phone', 'bgbd' ),
			'sections' => array(
				array(
					'id'       => 'phone',
					'title'    => esc_html__( 'Phone', 'bgbd' ),
					'external' => true,
				),
			),
		);


		$field_sections['settings'] = array(
			'title'    => esc_html__( 'Settings', 'bgbd' ),
			'sections' => array(
				array(
					'title'  => esc_html__( 'General Settings', 'bgbd' ),
					'fields' => array(
						array(
							'id'       => 'phone_nokia',
							'title'    => esc_html__( 'Nokia', 'bgbd' ),
							'subtitle' => esc_html__( 'Update your sound preference.', 'bgbd' ),
						),
					),
				),
			),
		);

		return apply_filters( 'bgbdtools_filters_setting_pages', $field_sections );
	}

}

new BGBDTOOLS_Settings();

