<?php

// Theme Support
function mw_theme_setup() {

  // Thumbnails
  add_theme_support('post-thumbnails');
  // Nav Menus
  register_nav_menus(array(
    'primary' => __('Primary Menu')
  ));
}

add_action('after_setup_theme', 'mw_theme_setup');

  // Excerpt Length Control
  function set_excerpt_length(){
    return 60;
  }

  add_filter('excerpt_length', 'set_excerpt_length');

  function mw_init_widgets($id){
    register_sidebar(array(
      'name' => 'Sidebar',
      'id'  => 'sidebar',
      'before_widget' => '<div class="container">',
      'after_widget'  => '</div>',
      'before_title' => '<h4 class="white-text blue">',
      'after_title'  => '</h4>'
    ));
  }

  add_action('widgets_init', 'mw_init_widgets');