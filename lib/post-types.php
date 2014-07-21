<?php
/**
 * Custom functions
 */

function home_page_menu() {
  add_menu_page( 'Site Options', 'Site Options', 'edit_posts', 'home-menu', null, '', 32 );
}

add_action('admin_menu', 'home_page_menu');

// Custom Post Types
add_action( 'init', 'create_new_slides' );
function create_new_slides() {
	// Add Student Types
	$labels = array(
		'name' => 'Slides',
		 'singular_name' => 'Slide',
		 'menu_name' => 'Slides',
		 'add_new' => 'Add Slide',
		 'add_new_item' => 'Add New Slide',
		 'edit' => 'Edit',
		 'edit_item' => 'Edit Slide',
		 'new_item' => 'New Slide',
		 'view' => 'View Slide',
		 'view_item' => 'View Slide',
		 'search_items' => 'Search Slides',
		 'not_found' => 'No Slides Found',
		 'not_found_in_trash' => 'No Slides Found in Trash',
		 'parent' => 'Parent Slide'
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Create new slides for HLA. These are displayed on the homepage',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'page',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'slide'),
		'query_var' => true,
		'exclude_from_search' => true,
		'menu_position' => 1,
		'show_in_menu' => 'home-menu',
		'menu_icon' => get_bloginfo('template_directory') . '/assets/images/custom-post-icon.png',  // Icon Path
		'supports' => array('title', 'editor'),
	);
	register_post_type('slide', $args);
};
function set_slide_columns($columns) {
    return array(
        'cb' => '<input type="checkbox" />',
        'title' => __('Title'),
        'date' => __('Date'),
        'author' => __('Author'),
		'column_1' => __('Slide Image'),
        'column_2' => __('Slide URL'),
    );
}
// POPULATE CUSTOM COLUMNS ON CUSTOM POST
add_action('manage_slide_posts_custom_column', 'add_new_slide_cols', 10, 2);
	function add_new_slide_cols($column, $post_id){
	global $post;
	switch ($column){
	case 'column_1':
	$column_1_content = the_field('slide_image');
	echo $column_1_content;
	case 'column_2':
	$column_2_content = the_field('slide_url');
	echo $column_2_content;
	default:
	break;
	}
}
add_filter('manage_slide_posts_columns' , 'set_slide_columns');
// New Modules For Site
add_action( 'init', 'create_new_modules' );
function create_new_modules() {
	// Add Modules
	$labels = array(
		'name' => 'Modules',
		 'singular_name' => 'Module',
		 'menu_name' => 'Modules',
		 'add_new' => 'Add Module',
		 'add_new_item' => 'Add New Module',
		 'edit' => 'Edit',
		 'edit_item' => 'Edit Module',
		 'new_item' => 'New Module',
		 'view' => 'View Module',
		 'view_item' => 'View Module',
		 'search_items' => 'Search Modules',
		 'not_found' => 'No Modules Found',
		 'not_found_in_trash' => 'No Modules Found in Trash',
		 'parent' => 'Parent Module'
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Create new modules for HLA. These can be content blocks for the homepage',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'page',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'module'),
		'query_var' => true,
		'exclude_from_search' => true,
		'menu_position' => 2,
		'show_in_menu' => 'home-menu',
		'menu_icon' => get_bloginfo('template_directory') . '/assets/img/custom-post-icon.png',  // Icon Path
		'supports' => array('title', 'thumbnail', 'editor'),
	);
	register_post_type('module', $args);
};

function add_menu_icons_styles(){
?>
 
<style>
#adminmenu .menu-icon-room div.wp-menu-image:before, #adminmenu .menu-icon-property div.wp-menu-image:before {
  content: "\f161";
}
#adminmenu .menu-icon-slide div.wp-menu-image:before {
  content: "\f233";
}
</style>
 
<?php
}
add_action( 'admin_head', 'add_menu_icons_styles' );


?>