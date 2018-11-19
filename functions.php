<?php

// Theme Support
function mw_theme_setup() {
  // Nav Menus
  register_nav_menus(array(
    'primary' => __('Primary Menu')
  ));
}

add_action('after_setup_theme', 'mw_theme_setup');