	<?php get_header(); ?>

	<!-- NAV PROJECTS -->
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
	</div>

	<div id="homecontainer">
		<div id="quotecontainer">
			<p id="quote">Ici va apparaître la quote aléatoire parmi une liste gérée dans le back.</p>
		</div>
		<div id="prescontainer"></div>
	</div>

	<div id="projetscontainer">
			<?php
				$query = new WP_Query(array("post_type" => "Projets"));
					while ($query->have_posts()) : $query->the_post();
				echo get_the_post_thumbnail($id, 'thumbnail'); 
			?>

<div class="projetsolo">
			<img src=" <?php echo get_the_post_thumbnail($id, 'thumbnail');  ?> ">
			<h3>
			<a class="openproject" data-permalink="<?php the_permalink(); ?> "href="#">
				<?php the_title(); ?>
			</a>
		</h3>
</div>
					<?php endwhile; ?>
		
	</div>

	<div class="fullscreenproject"> </div>
	<?php get_footer(); ?>
</div> <!-- /.container -->
