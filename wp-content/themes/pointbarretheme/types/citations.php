<?php

add_action( 'init', 'register_citations' );

function register_citations()
{
	// les labels
	$labels = array(
		'name'               => 'Citations',
		'singular_name'      => 'Citation',
		'menu_name'          => 'Citations',
		'name_admin_bar'     => 'Citation',
		'add_new'            => 'Ajouter une citation',
		'add_new_item'       => 'Ajouter une nouvelle citation',
		'new_item'           => 'Nouvelle citation',
		'edit_item'          => 'Éditer une citation',
		'view_item'          => 'Voir la citation',
		'all_items'          => 'Toutes les citations',
		'search_items'       => 'Rechercher une citation',
		'parent_item_colon'  => '',
		'not_found'          => 'Aucune citation pour le moment',
		'not_found_in_trash' => 'Aucune citation dans la corbeille'
	);

	$args = array(
		'labels'             => $labels,
        'description'        => 'Les citations de Ronan Quidu',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'citations' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'custom-fields', 'thumbnail', 'excerpt', 'comments' ),
		'taxonomies' 		 => array( 'category', 'post_tag' ),

	);

	register_taxonomy('citations', array('post'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'citation'),
		));

	register_post_type( 'citations', $args );
}

?>