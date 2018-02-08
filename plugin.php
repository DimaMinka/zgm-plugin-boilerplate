<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://zerogravitymarketing.com
 * @since             1.0.0
 * @package           ZGM
 *
 * @wordpress-plugin
 * Plugin Name:       ZGM Plugin Boilerplate
 * Plugin URI:        https://zerogravitymarketing.com
 * Description:       ZGM Plugin Boilerplate Description
 * Version:           1.0.0
 * Author:            Zero Gravity Marketing
 * Author URI:        https://zerogravitymarketing.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       zgm-plugin-boilerplate
 * Domain Path:       /
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 */


// Require once the Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/**
 * The code that runs during plugin activation
 */
register_activation_hook( __FILE__, function() {

	ZGM\Activate::activate();
	
} );

/**
 * The code that runs during plugin deactivation
 */
register_deactivation_hook( __FILE__, function() {

	ZGM\Deactivate::deactivate();

} );

/**
 * Initialize all the core classes of the plugin
 */
if ( class_exists( 'ZGM\\Init' ) ) {
	$Init = new ZGM\Init();
	$Init->run();
}
