<?php

require_once(ABSPATH.'wp-content/themes/pointbarretheme/types/projets.php');

function add_js_scripts()
{
	wp_enqueue_script('script', get_template_directory_uri().'/js/script.js', array('jquery'), '1,0', true);
	wp_localize_script('script', 'ajaxurl', admin_url('admin-ajax.php'));
}
add_action('wp_enqueue_scripts', 'add_js_scripts');

add_action('wp_ajax_mon_action', 'mon_action');
add_action('wp_ajax_nopriv_mon_action', 'mon_action');

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

?>
