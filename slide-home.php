<?php

/*
 * Plugin Name: Slide Home
 * Plugin URI: https://wordpress.org/plugins/slide-home
 * Description: Slide home e shortcode
 * Version: 0.0.1
 * Stable tag: 0.0.1
 * Author: Daviwp
 * WC tested up to: 5.9
 * Text Domain: slide-home
 * Author URI: https://youtube.com/c/daviwp
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}


/**
 * Register the "book" custom post type
 */
include( plugin_dir_path( __FILE__ ) . 'post-type.php');

/**
 * Loop Slide
 */
include( plugin_dir_path( __FILE__ ) . 'slide.php');