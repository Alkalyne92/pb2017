	<?php get_header(); ?>

	<!-- NAV PROJECTS 
	<div id="nav-projets">
		<h2>Projets swag</h2>
		<?php
		$query = new WP_Query(array("post_type" => "Projets", "tag" => "swag"));
		while ($query->have_posts()) : $query->the_post();
		 ?>
			<h3><a class="openproject" data-permalink="<?php the_permalink(); ?> "href="#"> <?php the_title(); ?></a></h3>
		<?php endwhile; ?>

		<h2>Tous les projets</h2>
		<?php
		$query = new WP_Query(array("post_type" => "Projets"));
		while ($query->have_posts()) : $query->the_post();
		echo get_the_post_thumbnail($id, 'thumbnail', array('class' => 'alignleft')); 

		?>

			<h3><a class="openproject" data-permalink="<?php the_permalink(); ?> "href="#"> <?php the_title(); ?></a></h3>
		<?php endwhile; ?>
	</div> -->

	<div id="homecontainer">
		<div id="quotecontainer">
			<div id="quotewrapper">
				<?php $quotequery = new WP_Query(array("post_type" => "Citations", "orderby" => "rand", "posts_per_page" => 1));
					if ($quotequery->have_posts()) : while ($quotequery->have_posts()) : $quotequery->the_post(); ?>
					<p id="quote" class="grow"><?php the_content(); ?></p>
					<p id="author" class="grow"><?php echo get_post_meta( $post->ID, 'Auteur', true ); ?></p>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>

	<div id="projetscontainer">
			<?php $projetsolo = new WP_Query(array("post_type" => "Projets"));
					if ($projetsolo->have_posts()) : while ($projetsolo->have_posts()) : $projetsolo->the_post();
					?>					

			<div class="projetsolo" style="background-image: url(<?php the_post_thumbnail_url('') ?>)">

					<div id="titlecontainer">
					<div id="titlewrapper">
						<h2 style="color:<?php echo get_post_meta( $post->ID, 'Couleur Encart', true ); ?> ;"><?php the_title(); ?></h2>
					</div>
					</div>
					<div class="encart" style="background-color:<?php echo get_post_meta( $post->ID, 'Couleur Encart', true ); ?> ;">

							
							<p><?php the_category(); ?></p>
							<h4></h4>
					</div>

			</div> <!-- projet solo fin-->

			
			<?php endwhile; endif; ?>
				</div> <!-- projet container fin-->

	<div class="fullscreenproject"> </div>
	<?php get_footer(); ?>
</div> <!-- /.container -->
