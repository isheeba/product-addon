<?php
/**
 * The plugin main file

 * @since             1.0.0
 * @package           Product_Addon
 *
 * @wordpress-plugin
 * Plugin Name:       Product Addon
 * Plugin URI:        isheeba.com
 * Description:       A plugin to add product content type with price, description, image etc.
 * Version:           1.0.0
 * Author:            Sheeba
 * Author URI:        iSheeba.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       product-addon
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


/**
 * Include the  main plugin class.
 *
 */
include 'includes/class-product-addon.php';



/**
 * Hooks the plugin class on `init`.
 *
 * @return void
 */
function product_addon_setup() {
	$product_addon = new Product_Addon( __FILE__ );
}
add_action( 'init', 'product_addon_setup' );
