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
