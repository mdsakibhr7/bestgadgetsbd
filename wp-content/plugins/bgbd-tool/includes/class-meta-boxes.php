<?php
/*
* @Author 		pluginbazar
* Copyright: 	2022 pluginbazar
*/

use WPDK\Utils;

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'PHONE_Meta_boxes' ) ) {
	/**
	 * Class PHONE_Meta_boxes
	 */
	class PHONE_Meta_boxes {

		private $phone_metabox_main = 'phone_meta_main';

		/**
		 * PHONE_Meta_boxes constructor.
		 */
		function __construct() {
			$this->generate_tinypress_meta_box();

		}


		/**
		 * Generate meta box for slider data
		 */
		function generate_tinypress_meta_box() {
			// Create a metabox for tinypress.
			WPDK_Settings::createMetabox( $this->phone_metabox_main,
				array(
					'title'     => esc_html__( 'Phone', 'bgbd-tools' ),
					'post_type' => 'phone',
					'data_type' => 'unserialize',
					'context'   => 'normal',
					'nav'       => 'inline',
					'preview'   => true,
				)
			);

			// General Settings section.
			WPDK_Settings::createSection( $this->phone_metabox_main,
				array(
					'title'  => esc_html__( 'General', 'bgbd-tools' ),
					'fields' => array(
						array(
							'id'         => 'post_title',
							'type'       => 'text',
							'title'      => esc_html__( 'Label *', 'bgbd-tools' ),
							'wp_type'    => 'post_title',
							'subtitle'   => esc_html__( 'For admin purpose only.', 'bgbd-tools' ),
							'attributes' => array(
								'autocomplete' => 'off',
								'class'        => 'tinypress_tiny_label',
							),
						),
						array(
							'id'         => 'target_url',
							'type'       => 'text',
							'title'      => esc_html__( 'Target URL *', 'bgbd-tools' ),
							'attributes' => array(
								'class' => 'tinypress_tiny_url',
							),
						),

					),
				)
			);

		}
	}
}

bgbd_tools()->tinypress_metaboxes = new PHONE_Meta_boxes();