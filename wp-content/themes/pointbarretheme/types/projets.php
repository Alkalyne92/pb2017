<?php

add_action( 'init', 'register_projets' );

function register_projets()
{
	// les labels
	$labels = array(
		'name'               => 'Projets',
		'singular_name'      => 'Projet',
		'menu_name'          => 'Projets',
		'name_admin_bar'     => 'Projet',
		'add_new'            => 'Ajouter un projet',
		'add_new_item'       => 'Ajouter un nouveau projet',
		'new_item'           => 'Nouveau projet',
		'edit_item'          => 'Éditer un projet',
		'view_item'          => 'Voir le projet',
		'all_items'          => 'Tous les projets',
		'search_items'       => 'Rechercher un projet',
		'parent_item_colon'  => '',
		'not_found'          => 'Aucun projet pour le moment',
		'not_found_in_trash' => 'Aucun projet dans la corbeille'
	);

	$args = array(
		'labels'             => $labels,
        'description'        => 'Nos projets vraiment très stylés',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'projets' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'taxonomies' => array( 'category', 'post_tag' ),

	);

	register_taxonomy('projets', array('post'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'projet'),
		));

	register_post_type( 'projets', $args );
}

?>