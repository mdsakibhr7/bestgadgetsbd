<?php
/**
 * All Functions
 *
 * @author Pluginbazar
 * @copyright 2020 Pluginbazar
 */

if ( ! function_exists( 'bgbd_tools' ) ) {
	function bgbd_tools() {
		global $bgbd_tools;

		if ( empty( $bgbd_tools ) ) {
			$bgbd_tools = new BGBDTOOLS_Functions();
		}

		return $bgbd_tools;
	}
}
