<?php
/**!
 * Progenitor Child Action Hooks
 * =============================
 *
 * Use these to ADD extra stuff, e.g.
 * PHP, HTML, [shortcode], <style>, <script>, social feeds, ads, etc.
 *
 * TIPS:
 *
 * (1.) Use pairs of `before` and `after` action hooks to WRAP a component,
 * and pairs of `top` and `bottom` action hooks to INNER WRAP a component.
 *
 * (2.) If you want to add something via an action hook on one page and not
 * another, then wrap your `add_action()` filters inside conditional tags.
 * (See: https://codex.wordpress.org/Conditional_Tags)
 */

// Example
// -------
// Adding an alert box message to single posts only, using a conditional tag.

function progenitor_child_single_message() {
  if ( is_single() ) { ?>
    <div class="alert alert-success blockquote" role="alert">
      This alert box has been added to this webpage using an action tag. It has been targeted to single posts using the <code> is_single()</code> conditional tag.
    </div>
  <?php }
};

add_action( 'progenitor_action_content_top', 'progenitor_child_single_message' );

/*
Full list of Progenitor Action Hook Functions
=============================================

progenitor_action_head_top()
progenitor_action_head_bottom()

progenitor_action_body_top()
progenitor_action_body_bottom()

progenitor_action_header_before()
progenitor_action_header_top()
progenitor_action_header_bottom()
progenitor_action_header_after()

progenitor_action_navbar_before()
progenitor_action_navbar_top()
progenitor_action_navbar_bottom()
progenitor_action_navbar_after()

progenitor_action_sidebar_1_top()
progenitor_action_sidebar_1_bottom()

progenitor_action_mainbody_top()
progenitor_action_mainbody_bottom()

progenitor_action_content_top()
progenitor_action_content_bottom()

progenitor_action_comments_before()
progenitor_action_comments_after()

progenitor_action_sidebar_2_top()
progenitor_action_sidebar_2_bottom()

progenitor_action_footer_before()
progenitor_action_footer_top()
progenitor_action_footer_bottom()
progenitor_action_footer_after()

progenitor_action_footer_bottom_before()
progenitor_action_footer_bottom_after()
*/
