<?php

add_action( 'init', 'register_yo' );

function register_yo()
{
	// les labels
	$labels = array(
		'name'               => 'yo',
		'singular_name'      => 'yo',
		'menu_name'          => 'yo',
		'name_admin_bar'     => 'yo',
		'add_new'            => 'Ajouter un yo',
		'add_new_item'       => 'Ajouter un nouveau yo',
		'new_item'           => 'Nouveau yo',
		'edit_item'          => 'Éditer un yo',
		'view_item'          => 'Voir le yo',
		'all_items'          => 'Tous les yo',
		'search_items'       => 'Rechercher un yo',
		'parent_item_colon'  => '',
		'not_found'          => 'Aucun yo pour le moment',
		'not_found_in_trash' => 'Aucun yo dans la corbeille'
	);

	$args = array(
		'labels'             => $labels,
        'description'        => 'Les yo de qualitey',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'yo' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'custom-fields', 'thumbnail', 'excerpt', 'comments' ),
		'taxonomies' 		 => array( 'category', 'post_tag' ),

	);

	register_taxonomy('yo', array('post'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'citation'),
		));

	register_post_type( 'yo', $args );
}

?>