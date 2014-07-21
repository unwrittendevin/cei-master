<?php
/**
 * Clean up the_excerpt()
 */
function thecei_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'thecei') . '</a>';
}
add_filter('excerpt_more', 'thecei_excerpt_more');

/**
 * Manage output of wp_title()
 */
function thecei_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'thecei_wp_title', 10);
