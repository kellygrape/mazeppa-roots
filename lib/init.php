<?php
/**
 * Roots initial setup and constants
 */
function roots_setup() {
  // Make theme available for translation
  load_theme_textdomain('roots', get_template_directory() . '/lang');

  // Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
  register_nav_menus(array(
    'primary_navigation' => __('Primary Navigation', 'roots'),
  ));

  // Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(150, 150, false);
  add_image_size('front-box-one', 250, 200, true);
  add_image_size('front-box-two', 510, 200, true);
  add_image_size('front-box-three', 770, 200, true);
  add_image_size('front-box-four', 970, 200, true);
  add_image_size('homepage-scroller', 1200, 800, true);
  // Add post formats (http://codex.wordpress.org/Post_Formats)
  // add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style('/assets/css/editor-style.css');
}
add_action('after_setup_theme', 'roots_setup');

// Backwards compatibility for older than PHP 5.3.0
if (!defined('__DIR__')) { define('__DIR__', dirname(__FILE__)); }


// Register Custom Post Type
function mazeppa_homepagebox() {

	$labels = array(
		'name'                => 'Homepage Boxes',
		'singular_name'       => 'Homepage Box',
		'menu_name'           => 'Homepage Boxes',
		'parent_item_colon'   => 'Parent Homepage Box:',
		'all_items'           => 'Homepage Boxes',
		'view_item'           => 'View Homepage Box',
		'add_new_item'        => 'Add New Homepage Box',
		'add_new'             => 'New Homepage Box',
		'edit_item'           => 'Edit Homepage Box',
		'update_item'         => 'Update Homepage Box',
		'search_items'        => 'Search homepage boxes',
		'not_found'           => 'No homepage boxes found',
		'not_found_in_trash'  => 'No homepage boxes found in Trash',
	);
	$args = array(
		'label'               => 'mzp_homepagebox',
		'description'         => 'Homepage Box',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'rewrite'             => false,
		'capability_type'     => 'page',
	);
	register_post_type( 'mzp_homepagebox', $args );
  register_post_type( 'productions',
		array(
			'labels' => array(
				'name' => __( 'Production' ),
				'singular_name' => __( 'Production' )
			),
		'supports' => array(
    		'title',
    		'editor',
    		'thumbnail'
    ),
		'public' => true,
		'has_archive' => false,
		)
	);
}

// Hook into the 'init' action
add_action( 'init', 'mazeppa_homepagebox', 0 );


