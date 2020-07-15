<?php
/**
 * Plugin Name: AA WooCommerce startups
 * Plugin URI: https://wpmaestro.net/
 * Description: A WooCommerce Plugin Tutorial.
 * Version: 1.0.0
 * Author: MD IMTIAZ
 * Author URI: https://wpmaestro.net
 * License: GPL2 or later
 * Text Domain: woocommerce-example-plugin
 */

 //check to make sure WooCommerce is active

 require_once __DIR__ . '/vendor/autoload.php';

 

 if ( in_array('woocommerce/woocommerce.php' , apply_filters('active_plugins' , get_option('active_plugins') ) ) ) {
   // Only run if there's no other class with this name

   if (! class_exists('Basic') ) {

    new WooCommerce\Startup\Basic();
   
 }
}