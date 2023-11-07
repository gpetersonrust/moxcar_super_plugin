<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://moxcar.com
 * @since      1.0.0
 *
 * @package    Moxcar_super_plugin
 * @subpackage Moxcar_super_plugin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Moxcar_super_plugin
 * @subpackage Moxcar_super_plugin/includes
 * @author     Gino Peterson <gpeterson@moxcar.com>
 */
class Moxcar_super_plugin_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'moxcar_super_plugin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
