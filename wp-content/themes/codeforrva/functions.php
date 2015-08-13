<?php

/***

Primary Functions

For the sake of organization, this file should only include
require statements for the various types of function files
that you are going to be using.

***/

// Enqueue Scripts & Stylesheets
require_once(dirname(__FILE__) . '/functions/queue-scripts.php');

// // Initialize Custom Post Types
// require_once(dirname(__FILE__) . '/functions/post-types.php');
//
// // Initialize Custom Taxonomies
// require_once(dirname(__FILE__) . '/functions/taxonomies.php');
//
// // Enqueue Utility Functions
// require_once(dirname(__FILE__) . '/functions/utilities/wp-utilities.php');
// require_once(dirname(__FILE__) .  '/functions/utilities/global-utilities.php');
//
// Enqueue Modular Functions
require_once(dirname(__FILE__) .  '/functions/modules/menus.php');
require_once(dirname(__FILE__) .  '/functions/modules/latest_news.php');

// register latest news widget
function c4rva_latest_news_widget_init() {
  $opts = array(
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3 class="news__title">',
    'after_title' => '</h3>'
  );

  register_sidebar(array_merge($opts, array(
    'name' => 'Latest News',
    'id' => 'latest_news'
  )));
}
add_action( 'widgets_init', 'c4rva_latest_news_widget_init' );

// register triptych widget areas
function c4rva_triptych_widgets_init() {

  $opts = array(
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3 class="triptych__panel__title">',
    'after_title' => '</h3>'
  );

  register_sidebar(array_merge($opts, array(
    'name' => 'Home Triptych Left',
    'id' => 'triptych_left'
  )));

  register_sidebar(array_merge($opts, array(
    'name' => 'Home Triptych Center',
    'id' => 'triptych_center'
  )));

  register_sidebar(array_merge($opts, array(
    'name' => 'Home Triptych Right',
    'id' => 'triptych_right'
  )));

}
add_action( 'widgets_init', 'c4rva_triptych_widgets_init' );

// register meetup widget area
function c4rva_meetup_widget_init() {
  register_sidebar(array(
    'name' => 'Home Next Meetup',
    'id' => 'next_meetup',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => ''
  ));
}
add_action( 'widgets_init', 'c4rva_meetup_widget_init' );

// load meetup-widgets plugin
function c4rva_load_plugins() {
  if (!class_exists('VsMeet')) {
    require_once(TEMPLATEPATH . '/plugins/meetup-widgets/vs_meetup.php');
  }
}
add_action( 'after_setup_theme', 'c4rva_load_plugins' );

// displays the nav menu (called from theme)
function c4rva_nav_menu() {
  wp_nav_menu(array(
    'menu' => 'top',
    'menu_class' => 'header__list',
    'container' => 'false'
  ));
}

// displays a widget area (called from theme)
function c4rva_show_widget_area( $id ) {
  if ( is_active_sidebar( $id ) ) {
    dynamic_sidebar( $id );
  }
}

function the_slug(){
  echo get_post_field( 'post_name', get_post() );
}
