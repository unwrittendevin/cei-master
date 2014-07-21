<?php
/**
 * thecei initial setup and constants
 */
function thecei_setup() {
  // Make theme available for translation
  // Community translations can be found at https://github.com/thecei/thecei-translations
  load_theme_textdomain('thecei', get_template_directory() . '/lang');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus(array(
    'primary_navigation' => __('Primary Navigation', 'thecei'),
	'footer_navigation' => __('Footer Navigation', 'thecei')
  ));

  // Add post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');
  add_image_size( 'homepage-slide', 750, 400, true ); //(cropped)

  // Add post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio'));

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style('/assets/css/editor-style.css');
}
add_action('after_setup_theme', 'thecei_setup');

/**
 * Register sidebars
 */
function thecei_widgets_init() {
  register_sidebar(array(
    'name'          => __('Primary', 'thecei'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));
  
  register_sidebar(array(
    'name'          => __('Home', 'thecei'),
    'id'            => 'sidebar-home',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'name'          => __('Footer', 'thecei'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<div class="widget-footer"><section class="widget %1$s %2$s">',
    'after_widget'  => '</section></div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
}
add_action('widgets_init', 'thecei_widgets_init');
