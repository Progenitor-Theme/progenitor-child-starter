<?php
/**!
 * Progenitor Child Enqueues
 * =========================
 * All the functions are in the PHP files in the `functions/` folder.
 */


function progenitor_child_enqueues() {

  wp_enqueue_style( 'progenitor_child',
    get_stylesheet_directory_uri() . '/css/progenitor-child.css', false, null);

  // Enqueue your own styles in here

  // Enqueue your own scripts in here

}
add_action('wp_enqueue_scripts', 'progenitor_child_enqueues', 101);
