<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Point-Barre 2017</title>
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/assets/css/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>
	
	<div id="header" class="blog-masthead">

			<div class="container nav-wrap">

				    <?php 
						$pages = get_pages(); 
						foreach ( $pages as $page )
						{
						    echo "<div class='nav-item'> <p style='width:auto;'>" . $page->post_title .  "</p></div>";
 
						    
						}
					?>
						
			</div>

		<div class="animtest"></div>
	</div> 
	<div class="container">
			<div class="rotulus">
