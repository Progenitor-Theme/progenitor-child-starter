<?php
/**!
 * Progenitor Child CSS Class Hooks
 * ================================
 *
 * Use these to SWAP and ADD Bootstrap classes on components,
 * and to ADD your own classes.
 *
 * If a CSS class function DOES NOT FUNCTIONALLY[*] EXIST here, then the child
 * falls back to the progenitor (parent theme) CSS class function.
 * [*] "Commented out" functions do not functionally exist.
 */

// Example

function progenitor_navbar_class() {
  ?>class="navbar navbar-expand-md navbar-light bg-yellow"<?php
}

function progenitor_navbar_search_btn_class() {
  ?>class="btn btn-dark my-2 my-sm-0"<?php
}


function progenitor_sidebar_1_class() {
  ?>class="sidebar-1 <?php
  if( is_active_sidebar('sidebar-2-widget-area') ):
  ?>col-sm-3<?php
  else:
  ?>col-sm-4<?php
  endif;
  ?> order-sm-2"<?php
}

/*
Full list of Progenitor Build CSS Class Hook Functions
======================================================

progenitor_body_class();

progenitor_navbar_class();
progenitor_navbar_search_btn_class();

progenitor_sidebar_1_class();
progenitor_sidebar_2_class();

progenitor_mainbody_wrapper_class();

progenitor_content_class();

progenitor_article_post_class();
progenitor_article_header_class();
progenitor_article_main_class();

progenitor_footer_class();
progenitor_footer_bottom_class();
*/
