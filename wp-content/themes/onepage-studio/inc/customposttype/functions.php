<?php
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Option',
		'menu_title'	=> 'Theme Option',
		'menu_slug' 	=> 'theme-option',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
 }




function custom_post_team() {
  $labels = array(
    'name'               => _x( 'Team', 'post type general name' ),
    'singular_name'      => _x( 'Team', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'team' ),
    'add_new_item'       => __( 'Add New Team' ),
    'edit_item'          => __( 'Edit Team' ),
    'new_item'           => __( 'New Team' ),
    'all_items'          => __( 'All Teams' ),
    'view_item'          => __( 'View Team' ),
    'search_items'       => __( 'Search Teams' ),
    'not_found'          => __( 'No teams found' ),
    'not_found_in_trash' => __( 'No teams found in the Trash' ), 
    'menu_name'          => 'Teams'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'This is team data',
    'public'        => true,
    'menu_position' => 10,
    'menu_icon'           => 'dashicons-groups',
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'team', $args ); 
}
add_action( 'init', 'custom_post_team' );


function custom_post_portfolio() {
  $labels = array(
    'name'               => _x( 'Portfolio', 'post type general name' ),
    'singular_name'      => _x( 'Portfolio', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'portfolio' ),
    'add_new_item'       => __( 'Add New Portfolio' ),
    'edit_item'          => __( 'Edit Portfolio' ),
    'new_item'           => __( 'New Portfolio' ),
    'all_items'          => __( 'All Portfolio' ),
    'view_item'          => __( 'View Portfolio' ),
    'search_items'       => __( 'Search Portfolio' ),
    'not_found'          => __( 'No Portfolio found' ),
    'not_found_in_trash' => __( 'No Portfolio found in the Trash' ), 
    'menu_name'          => 'Portfolio'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'This is portfolio data',
    'public'        => true,
    'menu_position' => 10,
    'menu_icon'           => 'dashicons-portfolio',
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'portfolio', $args ); 
}
add_action( 'init', 'custom_post_portfolio' );

?>
