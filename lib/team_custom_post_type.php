<?php
/**
 * Register 'team' post type
 */
function team_post_type() {

	// Labels
	$labels = array(
		'name'	=>	_x("Team", "post type general name"),
		'singular_name'	=>	_x("Team", "post type singular name"),
		'menu_name'	=>	'Team Profiles',
		'add_new' =>	_x("add New", "team item"),
		'add_new_item'	=>	__("Add New Profile"),
		'edit_item' => __("Edit Profile"),
		'new_item'	=>	__("New Profile"),
		'view_item'	=>	__("View Profile"),
		'not_found'	=>	__("No Profiles Found"),
		'not_found_in_trash'	=>	__("No Profiles Found in Trash"),
		'parent_item_colon'	=>	''
	);


	// Register post type
	register_post_type('team', array(
		'labels'	=> $labels,
		'public'	=>	true,
		'has_archive'	=>	false,
		'menu_icon'	=> get_stylesheet_directory_uri() . '/lib/Teamprofiles/team-icon.png',
		'rewrite'	=>	false,
		'supports'	=>	array('title', 'editor', 'thumbnail')
	) );
}
add_action( 'init', 'team_post_type', 0 );

/**
 * Register 'position' taxonomy
 */

function team_taxonomy() {

	// Labels
	$singular = "Position";
	$plural = 'Positions';
	$labels = array(
		'name'	=> _x( $plural, "taxonomy general name"),
		'singular_name'	=>	_x( $singular, "taxonomy singular name"),
		'search_items'	=>	__("Search $singular"),
		'all_items'	=>	__("All $singular"),
		'parent_item'	=>	__("Parent $singular"),
		'parent_item_colon'	=>	__("Parent $singular"),
		'edit_item'	=>	__("Edit $singular"),
		'update_item'	=>	__("Update $singular"),
		'add_new_item'	=>	__("Add New $singular"),
		'new_item_name'	=>	__("New $singular Name"),
	);

	// Register and attach to 'team' post type
	register_taxonomy( strtolower($singular), 'team', array(
		'public'	=>	true,
		'show_ui'	=>	true,
		'show_in_nav_menus'	=>	true,
		'hierrarchical'	=>	true,
		'query_var'	=>	true,
		'rewrite'	=>	false,
		'labels'	=>	$labels
	) );
}
add_action( 'init', 'team_taxonomy', 0 );