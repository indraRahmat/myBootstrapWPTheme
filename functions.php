<?php
// register nav walker class_alias
require_once('wp_bootstrap_navwalker.php');

//theme support
function wpb_theme_setup(){
  //nav menu
  register_nav_menus(array(
    'primary' => __('Primary Menu')
  ));
}

add_action('after_setup_theme','wpb_theme_setup');
