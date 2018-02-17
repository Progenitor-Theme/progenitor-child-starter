<?php
/**!
 * Progenitor Child Build hooks
 * ============================
 *
 * Use these to, either:
 * (1.) SWAP your build functions for the progenitor build functions, or
 * (2.) REMOVE progenitor build functions -- by creating an empty function here.
 *
 * If a build function DOES NOT FUNCTIONALLY[*] EXIST here, then the child
 * falls back to the progenitor (parent theme) build function.
 * [*] "Commented out" functions do not functionally exist.
 */

// Example
// =======
// Un-comment this empty funciton below, and your header_nav will be gone!
// Inspect your code -- you will not find it in the served HTML.

/*
function progenitor_build_header_nav() {
  // The existence of empty function removes the header_nav.
}
*/

function progenitor_build_sidebar_2() {
  // This empty function REMOVES sidebar 2
}

function progenitor_build_footer_bottom() {
  /*
   * This is merely a clone of the progenitor_build_footer_bottom() stuff,
   * plus a comment to show you where to add your analytics script(s).
   */
  ?>
    <?php progenitor_action_footer_bottom_before(); ?>

    <div <?php progenitor_footer_bottom_class(); ?>>
      <div class="container text-center">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
      </div>
    </div>

    <?php progenitor_action_footer_bottom_after(); ?>

    <!-- Add your analytics script(s) in here. -->

  <?php
}

/*
Full list of Progenitor Build Hook Functions
============================================

progenitor_build_html_head()

progenitor_build_body_top()
progenitor_build_body_bottom()

progenitor_build_header()

progenitor_build_header_nav()
progenitor_build_header_nav_menu_left()
progenitor_build_header_nav_menu_right()
progenitor_build_header_nav_search()

progenitor_build_main_top()
progenitor_build_main_bottom()

progenitor_build_content_404()
progenitor_build_content_404_message()
progenitor_build_content_author()
progenitor_build_content_category()
progenitor_build_content_index()
progenitor_build_content_month()
progenitor_build_content_page()
progenitor_build_content_tag()
progenitor_build_content_search()
progenitor_build_content_single()

progenitor_build_index_post_front_matter()

progenitor_build_single_post_front_matter()
progenitor_build_single_comments()
progenitor_build_single_prev_next()

// Used on single posts and on author archive:
progenitor_build_author_bio()

progenitor_build_sidebar_1()
progenitor_build_sidebar_2()

progenitor_build_footer()
progenitor_build_bottom_line()
*/
