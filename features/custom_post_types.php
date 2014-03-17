<?php


$labels = array(
	'name'                => _x( 'Proof Galleries', 'Post Type General Name', 'pixproof_txtd' ),
	'singular_name'       => _x( 'Proof Gallery', 'Post Type Singular Name', 'pixproof_txtd' ),
	'menu_name'           => __( 'Proof Galleries', 'pixproof_txtd' ),
	'parent_item_colon'   => __( 'Parent Item:', 'pixproof_txtd' ),
	'all_items'           => __( 'All Items', 'pixproof_txtd' ),
	'view_item'           => __( 'View Item', 'pixproof_txtd' ),
	'add_new_item'        => __( 'Add New Item', 'pixproof_txtd' ),
	'add_new'             => __( 'Add New', 'pixproof_txtd' ),
	'edit_item'           => __( 'Edit Item', 'pixproof_txtd' ),
	'update_item'         => __( 'Update Item', 'pixproof_txtd' ),
	'search_items'        => __( 'Search Item', 'pixproof_txtd' ),
	'not_found'           => __( 'Not found', 'pixproof_txtd' ),
	'not_found_in_trash'  => __( 'Not found in Trash', 'pixproof_txtd' ),
);

$args = array(
	'label'               => __( 'proof_gallery', 'pixproof_txtd' ),
	'description'         => __( 'Private Galleries', 'pixproof_txtd' ),
	'labels'              => $labels,
	'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'page-attributes', 'post-formats', ),
//	'taxonomies'          => array( 'category', 'post_tag' ),
	'hierarchical'        => true,
	'public'              => false,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'show_in_nav_menus'   => true,
	'show_in_admin_bar'   => true,
	'menu_position'       => 5,
	'menu_icon'           => '',
	'can_export'          => true,
	'has_archive'         => true,
	'exclude_from_search' => true,
	'publicly_queryable'  => true,
	'query_var'           => 'proof_gallery',
	'capability_type'     => 'page',
);
register_post_type( 'proof_gallery', $args );

