<?php
/*
Plugin Name: Impact Hub Location Locator
Plugin URI: 
Description: Impact Hub Location Locator Plugin
Author: 
Version: 1.0
Author URI: 
*/

require_once( plugin_dir_path( __FILE__ ) . 'class-impact-hub-location-locator.php' );
add_action( 'plugins_loaded', array( 'ImpactHubLocationLocator', 'get_instance' ) );
?>
