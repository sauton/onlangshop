<?php
/**
 * User: thang
 * Date: 2/9/18
 * Time: 2:23 AM
 */


function add_theme_script(){
	wp_enqueue_script('mylinkbar_js',get_template_directory_uri().'/assets/js/mylinkbar.js',array('jquery'),1.1,true);
	wp_enqueue_style('mylink_style',get_stylesheet_uri(),array(),1.0);
}
add_action('wp_enqueue_scripts','add_theme_script');

