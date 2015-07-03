<?php

/***

Enqueue Scripts

This file handles the enqueuing for all scripts and stylesheets
used by the theme.

There are some cases when the 'global' handle used to register
and enqueue the main javascript file conflicts with js
requirements of some plugins. If you run into such conflicts,
you may need to rename the handle of that script to allow for
the plugin dependecies to be satisfied.

***/

//	Enqueued Styles

/* Primary Styles */
function codef_for_rva_primary_styles() {
	$random = rand();
	// global $is_IE;

	if (!is_admin()) {
		wp_register_style('primary-styles', get_stylesheet_directory_uri() . '/dist/css/main.css', false, $random);
		// wp_register_style('ie8_below', get_stylesheet_directory_uri() . '/dist/css/app_nomq.css', false, $random);
		// wp_register_style('ie9_up', get_stylesheet_directory_uri() . '/dist/css/app.css', false, $random);

		// NOTE: 'ie9_up' is tied to neg_conditional function located in /utilities/wp-utilities.php

		// wp_style_add_data('ie8_below', 'conditional', '(lt IE 9) & (!IEMobile)');
		// wp_style_add_data('ie9_up', 'conditional', '(gt IE 8) | (IEMobile)');
		// if($is_IE) {
		// 	wp_enqueue_style('ie8_below');
		// 	wp_enqueue_style('ie9_up');
		// } else {
		wp_enqueue_style('primary-styles');
		// }
	}
}
add_action( 'wp_enqueue_scripts', 'codef_for_rva_primary_styles' );


/* Login Styles */
// function codef_for_rva_login_styles() {
// 	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('template_directory') . '/dist/css/login.css" />';
// }
// add_action('login_head', 'codef_for_rva_login_styles');


//	Enqueued Scripts

/* All Scripts */
// function codef_for_rva_theme_scripts() {
// 	$random = rand();
//
// 	if (!is_admin()) {
// 		wp_register_script('detection', get_stylesheet_directory_uri() . '/dist/js/detection.js', array(), false, false);
// 		wp_enqueue_script('detection');
//
// 		wp_deregister_script('jquery');
//
// 		wp_register_script('jquery', get_stylesheet_directory_uri() . '/dist/js/jquery.js', array(), false, false);
// 		wp_enqueue_script('jquery');
//
// 		wp_register_script('scripts', get_stylesheet_directory_uri() . '/dist/js/app.js', array('jquery'), false, true);
// 		wp_enqueue_script('scripts');
// 	}
// }
// add_action( 'wp_enqueue_scripts', 'codef_for_rva_theme_scripts' );
