<?php get_header(); ?>

<h2>Projets à la une parce qu'ils sont de qualitey :</h2>
<?php
$query = new WP_Query(array("post_type" => "Projets", "tag" => "swag"));
while ($query->have_posts()) : $query->the_post(); ?>
	<h3><a class="openproject" data-permalink="<?php the_permalink(); ?>" href="#"><?php the_title(); ?></a></h3>
	<p><?php the_content(); ?></p>
<?php endwhile; ?>

<div class="fullscreenproject"></div>

<?php get_sidebar(); ?>
</div> <!-- /.row -->

<?php get_footer(); ?>

