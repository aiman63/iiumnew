<?php

function include_adis_files(){
  wp_enqueue_style('customstyle', get_template_directory_uri() .'/css/adis.css', array(), '1.0.0', 'all');
  wp_enqueue_style('fastyle', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '1.0.0', 'all');
  wp_enqueue_script('jqery', get_template_directory_uri() .'/js/jquery.min.js', array(), '1.0.0', true);
  wp_enqueue_script('customjs', get_template_directory_uri() .'/js/adis.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'include_adis_files');


// function adis_theme_setup(){
//   add_theme_support('menus');
//   register_nav_menus('footer', 'Secondary Navigation');
// }
//
// add_action('init', 'adis_theme_setup');
