<?php get_header(); ?>

	<div class="row">
		<div class="col-sm-12">
			<?php
			$projets = new WP_Query(array(
				'post_type' => 'projets',
				'posts_per_page' => 10
			));
			if ($projets->have_posts()) : while ($projets->have_posts()) : $projets->the_post(); ?>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p><?php the_content(); ?></p>
			<?php
			endwhile;
			endif;
			wp_reset_query();
			?>

		</div> <!-- /.col -->
	</div> <!-- /.row -->

<?php get_footer(); ?>
