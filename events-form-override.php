<?php
/**
 * @package TE Override
 * @version 1.0
 */
/*
Plugin Name: Events Form Override
Plugin URI: https://bellaworksweb.com
Description: Overrides some core functionaliy for the Events Calendar.
Author: Austin Crane
Version: 1.0
Author URI: https://bellaworksweb.com
*/
/**
 * Dequeue tribe-events.min.js file. 
 * Date: 11/20/17
 */

// add_action( 'wp_enqueue_scripts', 'deregister_tribe_styles' );
 
add_action('wp_enqueue_scripts', 'custom_tribe_bellaworks_form_style');

function custom_tribe_bellaworks_form_style() {
	wp_register_style( 'custom-form-styles',  plugin_dir_url( __FILE__ ) . 'custom-form-styles.css', array(), '1.4' );
    wp_enqueue_style( 'custom-form-styles' );

    wp_enqueue_script( 
		'bellaworks-form-actions', 
		plugin_dir_url( __FILE__ ) . 'assets/js/bw-form-actions.js', 
		array(), '20200713', 
		true 
	);
}





/**
 * Defines alternative titles for various event views.
 *
 * @param  string $title
 * @return string
 */
// function ac_dont_show_social_icons_on_calendar( $title ) {

// 	if( is_post_type_archive('tribe_events') || is_singular('tribe_events') ) {
// 		return true;
// 	}
   
// }
// add_filter( 'addtoany_sharing_disabled', 'ac_dont_show_social_icons_on_calendar' );







// function ac_lets_add_the_cal_title( $title ) {

// 	if( is_post_type_archive('tribe_events') ) {
// 		$title = 'Calendar';
// 	}
// 	// if(is_singular('tribe_events')) {
// 	// 	$title = 'Today';
// 	// }
   

//     return $title;
// }
// add_filter( 'the_title', 'ac_lets_add_the_cal_title' );