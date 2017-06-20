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
					<p id="quote"><?php the_content(); ?></p>
					<p id="author">&mdash; <?php echo get_post_meta( $post->ID, 'Auteur', true ); ?></p>
				<?php endwhile; endif; ?>
			</div>
		</div>
		<div id="prescontainer">
			<div id="preswrapper">
				<p id="pres"> Point-Barre est un studio de design graphique spécialisé dans les technologies du web.<br/><br/>
				Dirigé par Ronan Quidu et Julien Vivier, le studio développe des solutions créatives et innovantes prenant la forme d'identités visuelles, de chartes graphiques,
				de motion design, de sites web ou de tout type d'applications web.<br/><br/>
				Nous opérons également en tant que conseil pour l'élaboration de stratégies digitales.<br/><br/>
				Les locaux sont situés au 12, rue Bleue dans le 9ème arrondissement de Paris.</p>
			</div>
		</div>
	</div>

	<div id="projetscontainer">
			<?php $projetsolo = new WP_Query(array("post_type" => "Projets"));
					if ($projetsolo->have_posts()) : while ($projetsolo->have_posts()) : $projetsolo->the_post();
					?>
									
			<div class="projetsolo" style="background-image: url(<?php the_post_thumbnail_url('thumbnail'); ?>)">
					<div class="encart">
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
					</div>
			</div> <!-- projet solo fin-->

			
			<?php endwhile; endif; ?>
				</div> <!-- projet container fin-->

	<div class="fullscreenproject"> </div>
	<?php get_footer(); ?>
</div> <!-- /.container -->
