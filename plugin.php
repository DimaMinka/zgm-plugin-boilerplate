<?php

/**
 * The plugin bootstrap file
 *
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


// Require once the Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/**
 * The code that runs during plugin activation
 */
register_activation_hook( __FILE__, function() {

	ZGM\ZGMPB\Activate::activate();
	
} );

/**
 * The code that runs during plugin deactivation
 */
register_deactivation_hook( __FILE__, function() {

	ZGM\ZGMPB\Deactivate::deactivate();

} );

/**
 * Initialize all the core classes of the plugin
 */
if ( class_exists( 'ZGM\\ZGMPB\\Init' ) ) {
	$Init = new ZGM\ZGMPB\Init();
	$Init->run();
}
