<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://moxcar.com
 * @since             1.0.0
 * @package           Moxcar_super_plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Moxcar Super Plugin
 * Plugin URI:        https://Moxcar.com
 * Description:       This is Moxcar's Official Plugin!
 * Version:           1.0.0
 * Author:            Gino Peterson
 * Author URI:        https://moxcar.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       moxcar_super_plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MOXCAR_SUPER_PLUGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-moxcar_super_plugin-activator.php
 */
function activate_moxcar_super_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-moxcar_super_plugin-activator.php';
	Moxcar_super_plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-moxcar_super_plugin-deactivator.php
 */
function deactivate_moxcar_super_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-moxcar_super_plugin-deactivator.php';
	Moxcar_super_plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_moxcar_super_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_moxcar_super_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-moxcar_super_plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_moxcar_super_plugin() {

	$plugin = new Moxcar_super_plugin();
	$plugin->run();

}
run_moxcar_super_plugin();
