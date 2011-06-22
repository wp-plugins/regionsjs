<?php
/*
Plugin Name: Regions.js
Plugin URI: http://www.ramoonus.nl/wordpress/regionsjs/
Description: A polyfill for the Adobe's CSS3 proposal for Text regions (Tested + Works on Chrome, Safari, Firefox, IE 8+) 
Version: 1.0.0
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/
function rw_regionjs() {
		wp_deregister_script('region'); // deregister
		wp_register_script('region', plugins_url('/js/regions.jquery.min.js', __FILE__), array("jquery", "lettering"), '0.1'); // re register
		wp_enqueue_script('region'); // load
} 
add_action('init', 'rw_regionjs');
?>