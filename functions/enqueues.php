<?php
/**!
 * Progenitor Child (Starter) Enqueues
 * ===================================
 */

function progenitor_child_enqueues() {

  // PROGENITOR CHILD CSS and JS
  // ===========================

  wp_register_style('progenitor-child-css', get_stylesheet_directory_uri() . '/theme/css/progenitor-child.css', false, null);
  wp_enqueue_style('progenitor-child-css');


  wp_register_script('progenitor-child-js', get_stylesheet_directory_uri() . '/theme/js/progenitor-child.js', false, null, true);
  wp_enqueue_script('progenitor-child-js');

  // Enqueue your own styles in here

  // Enqueue your own scripts in here

}
add_action('wp_enqueue_scripts', 'progenitor_child_enqueues', 101);
