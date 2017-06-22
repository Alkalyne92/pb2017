<?php

add_action( 'init', 'register_wesh' );

function register_wesh()
{
	// les labels
	$labels = array(
		'name'               => 'wesh',
		'singular_name'      => 'wesh',
		'menu_name'          => 'wesh',
		'name_admin_bar'     => 'wesh',
		'add_new'            => 'Ajouter une wesh',
		'add_new_item'       => 'Ajouter une nouvelle wesh',
		'new_item'           => 'Nouvelle wesh',
		'edit_item'          => 'Éditer une wesh',
		'view_item'          => 'Voir la wesh',
		'all_items'          => 'Toutes les wesh',
		'search_items'       => 'Rechercher une wesh',
		'parent_item_colon'  => '',
		'not_found'          => 'Aucune wesh pour le moment',
		'not_found_in_trash' => 'Aucune wesh dans la corbeille'
	);

	$args = array(
		'labels'             => $labels,
        'description'        => 'Les wesh de Ronan Quidu',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'wesh' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'custom-fields', 'thumbnail', 'excerpt', 'comments' ),
		'taxonomies' => array( 'category', 'post_tag' ),

	);

	register_taxonomy('wesh', array('post'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'citation'),
		));

	register_post_type( 'wesh', $args );
}

?>