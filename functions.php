<?php
/**!
 * Progenitor Child Functions and Hooks
 * ====================================
 * All the functions are in the PHP files in the `functions/` folder.
 */

require get_theme_file_path() . '/functions/enqueues.php';
require get_theme_file_path() . '/functions/hooks/build-hooks.php';
require get_theme_file_path() . '/functions/hooks/css-hooks.php';
require get_theme_file_path() . '/functions/hooks/action-hooks.php';

/* Example Function */

function progenitor_child_widgets_init() {
	unregister_sidebar( 'sidebar-2-widget-area' );
}
add_action( 'widgets_init', 'progenitor_child_widgets_init', 11 );
