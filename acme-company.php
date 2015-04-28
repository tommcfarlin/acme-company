<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://tommcfarlin.com/interface-for-the-wordpress-settings-api/
 * @since             1.0.0
 * @package           Acme_Company
 *
 * @wordpress-plugin
 * Plugin Name:       Acme Company
 * Plugin URI:        https://tommcfarlin.com/interface-for-the-wordpress-settings-api/
 * Description:       An example for how to use object-oriented principles with the WordPress Settings API.
 * Version:           1.0.0
 * Author:            Tom McFarlin
 * Author URI:        https://tommcfarlin.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

include_once plugin_dir_path( __FILE__ ) . 'interfaces/interface-acme-setting.php';
include_once plugin_dir_path( __FILE__ ) . 'classes/class-acme-company-dashboard.php';
include_once plugin_dir_path( __FILE__ ) . 'classes/settings/class-acme-company-name.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_acme_company() {

	$plugin = new Acme_Company_Dashboard();
	$plugin->run();

}
run_acme_company();
