<?php

// set up main nav menu
function c4rva_register_nav_menu() {
  register_nav_menu( 'top', __( 'Top Menu', 'c4rva' ));
}
add_action( 'after_setup_theme', 'c4rva_register_nav_menu' );

// add classes to main nav menu items
function c4rva_nav_menu_css_class($classes, $item) {
  $classes[] = 'header__list__item';
  return $classes;
}
add_filter( 'nav_menu_css_class', 'c4rva_nav_menu_css_class', 10, 2 );

// register triptych widget areas
function c4rva_triptych_widgets_init() {

  $opts = array(
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h2 class="triptych__panel__title">',
    'after_title' => '</h2>'
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

// displays the page content (called from theme)
function c4rva_show_page() {
  while (have_posts()) : the_post();
  ?>
  <article>
    <header>
      <?php the_title('<h1>', '</h1>'); ?>
    </header>
    <div>
      <?php the_content(); ?>
    </div>
  </article>
  <?php
  endwhile;
}
?>
