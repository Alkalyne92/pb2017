<?php

require_once(ABSPATH.'wp-content/themes/pointbarretheme/types/projets.php');
require_once(ABSPATH.'wp-content/themes/pointbarretheme/types/citations.php');
require_once(ABSPATH.'wp-content/themes/pointbarretheme/types/footer.php');
require_once(ABSPATH.'wp-content/themes/pointbarretheme/types/yo.php');

function add_js_scripts()
{
	wp_enqueue_script('script', get_template_directory_uri().'/js/script.js', array('jquery'), '1,0', true);
	wp_localize_script('script', 'ajaxurl', admin_url('admin-ajax.php'));
}
add_action('wp_enqueue_scripts', 'add_js_scripts');

add_action('wp_ajax_mon_action', 'mon_action');
add_action('wp_ajax_nopriv_mon_action', 'mon_action');

function custom_excerpt_length( $length ) {
    return 2;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 9 );


function mon_action()
{
	$args = array('post_type' => 'projets', 'posts_per_page' => 2);
	$ajax_query = new WP_Query($args);
	if ($ajax_query->have_posts()) : while ($ajax_query->have_posts()) : $ajax_query->the_post();
		the_title();
		the_content();
	endwhile;
	endif;
	die();
}


// ACTIVER LES IMAGES A LA UNE
add_theme_support('post-thumbnails');
function setup_types() {
    register_post_type('projets', array(
        'label' => __('Projets'),
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'show_ui' => true,
    ));
}
add_action('init', 'setup_types');


// désactivation des <p> moches
remove_filter('the_content', 'wpautop');

register_nav_menus(array('Menu principal' => __('Navigation principale', 'pointbarretheme')));

// PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS
// PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS
// PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS
// PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS
// PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS
// PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS
// PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS
// PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS
// PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS PLUGINS

?>
