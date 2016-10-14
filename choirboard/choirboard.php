<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://github.com/epfl-dojo
 * @since             1.0.0
 * @package           Choirboard
 *
 * @wordpress-plugin
 * Plugin Name:       Choirboard
 * Plugin URI:        http://github.com/epfl-dojo/wordpress.choirboard
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            EPFL Dojo
 * Author URI:        http://github.com/epfl-dojo
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       choirboard
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-choirboard-activator.php
 */
function activate_choirboard() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-choirboard-activator.php';
	Choirboard_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-choirboard-deactivator.php
 */
function deactivate_choirboard() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-choirboard-deactivator.php';
	Choirboard_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_choirboard' );
register_deactivation_hook( __FILE__, 'deactivate_choirboard' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-choirboard.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_choirboard() {

	$plugin = new Choirboard();
	$plugin->run();

}
run_choirboard();

function foo() {
  return "<p>Hello world!</p>";
}

