<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.upwork.com/fl/mahdiyazdani
 * @author            Mahdi Yazdani <mahdiyazdani@mail.com>
 * @since             1.0.0
 * @package           webpack-livereload-extension
 *
 * @wordpress-plugin
 * Plugin Name:       Webpack Livereload
 * Plugin URI:        https://www.mahdiyazdani.com
 * Description:       Adds a script tag to your page pointed at the livereload server.
 * Version:           1.0.0
 * Requires at least: WordPress 5.0
 * Requires PHP:      7.2.0
 * Author:            Mahdi Yazdani
 * Author URI:        https://www.upwork.com/fl/mahdiyazdani
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       webpack-livereload-extension
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function webpack_livereload_extension_script() {
	echo "<script>document.write('<script src=\"http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1\"></' + 'script>')</script>";
}

add_action( 'wp_head', 'webpack_livereload_extension_script' );
add_action( 'admin_head', 'webpack_livereload_extension_script' );