<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://benwhit.co
 * @since      1.0.0
 *
 * @package    Cyberbility_Defaults
 * @subpackage Cyberbility_Defaults/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Cyberbility_Defaults
 * @subpackage Cyberbility_Defaults/includes
 * @author     Ben Whit <bwhitlock@cyberbility.com>
 */
class Cyberbility_Defaults_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'cyberbility-defaults',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
