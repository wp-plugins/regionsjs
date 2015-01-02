<?php
/*
Plugin Name: CSS Regions polyfill
Plugin URI: http://www.ramoonus.nl/wordpress/regionsjs/
Description: A polyfill for the Adobe's CSS3 proposal for Text regions (Tested + Works on Chrome, Safari, Firefox, IE 8+) 
Version: 1.0.1
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/
function rw_regionjs() {
		wp_deregister_script('regions'); // deregister
		wp_enqueue_script('regions', plugins_url('/js/cssregions.min.js', __FILE__), array("jquery"), '1.0.1');
} 
add_action('wp_enqueue_scripts', 'rw_regionjs');
?>