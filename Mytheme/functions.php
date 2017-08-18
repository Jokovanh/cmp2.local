<?php

function BackToBike_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'BackToBike_resources');

// Navigation Menus

register_nav_menus(array(
    'primary' => __( 'Primary Menu'),
    'footer' => __('Footer Menu'),
    'Primary sidebar' =>__('Primary Sidebar'),
    'right sidebar' => __('Right Sidebar'),

));

//custom header

$args = array(
	'flex-width'    => true,
	'width'         => 980,
	'flex-height'    => true,
	'height'        => 200,
	'default-image' => get_template_directory_uri() . '/images/header1.png',
);
add_theme_support( 'custom-header', $args );

//custom logo

add_theme_support( 'custom-logo' );

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function awesome_widget_setup() {

	register_sidebar( array(
		'name'          => 'sidebar right',
		'id'            => 'right-1',
        'class'         => 'custom',
        'description'   => 'standard sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

    


}
add_action( 'widgets_init', 'awesome_widget_setup' );




  


//add featured image support
 
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 180, 120, true);
    add_image_size('banner-image', 920, 210, true);


add_action('after_setuo_theme', 'BackToBike-setup');

//custom post type


function custom_post_type_bikes() {
  $labels = array(
    'name'               => _x( 'Bikes', 'post type general name' ),
    'singular_name'      => _x( 'Bike item', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'bike' ),
    'add_new_item'       => __( 'Add New bike item' ),
    'edit_item'          => __( 'Edit bike item' ),
    'new_item'           => __( 'New bike item' ),
    'all_items'          => __( 'All bike items' ),
    'view_item'          => __( 'View bike item' ),
    'search_items'       => __( 'Search bike items' ),
    'not_found'          => __( 'No bike item found' ),
    'not_found_in_trash' => __( 'No bike item found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Bikes'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our bike items specific data',
    'public'        => true,
    'menu_position' => 5,
	'menu_icon'     => 'dashicons-admin-tools',
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields'),
    'has_archive'   => true
  );
  register_post_type( 'bikes', $args );
}

add_action( 'init', 'custom_post_type_bikes' );

function taxonomies_bikes() {
  $labels = array(
    'name'              => _x( 'Bike Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Bike Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Bike Categories' ),
    'all_items'         => __( 'All Bike Categories' ),
    'parent_item'       => __( 'Parent Bike Category' ),
    'parent_item_colon' => __( 'Parent Bike Category:' ),
    'edit_item'         => __( 'Edit Bike Category' ), 
    'update_item'       => __( 'Update Bike Category' ),
    'add_new_item'      => __( 'Add New Bike Category' ),
    'new_item_name'     => __( 'New Bike Category' ),
    'menu_name'         => __( 'Bike Categories' )
  );

    $capabilities = array(
    'edit_post'          => 'edit_bikes',
    'read_post'          => 'read_bikes',
    'delete_post'        => 'delete_bikes'
    );

  $args = array(
    'labels' => $labels,
    'capabilities' => $capabilities,
    'hierarchical' => true,
  );
  register_taxonomy( 'bikes_category', 'bikes', $args );
}
add_action( 'init', 'taxonomies_bikes', 0 );