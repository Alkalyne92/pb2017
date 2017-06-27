<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Point-Barre 2017</title>
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>
	
	<div id="header" class="blog-masthead">
			<div id="hamburger">
			  <i id="1"></i>
			  <i id="2"></i>
			  <i id="3"></i>
			</div>
			<div class="container nav-wrap">

				    <?php 
						$pages = get_pages(); 
						foreach ( $pages as $page )
						{
						    echo "<div class='nav-item'> <p class='souligney'>" . $page->post_title .  "</p></div>";
 
						    
						}
					?>
						
			</div>
		<!-- anim 1 -->
		<div class="animzone">
			<div class="anim">
				<div class="back"></div>
			</div>
			<div class="stroke"></div>
		</div>
		<div class="send">
			<div class="send-indicator">
				<div class="send-indicator-dot"></div>
				<div class="send-indicator-dot"></div>
				<div class="send-indicator-dot"></div>
				<div class="send-indicator-dot"></div>
			</div>
			<button class="send-button">
				<div class="sent-bg"></div>
				<i class="fa fa-send send-icon"></i>
				<i class="fa fa-check sent-icon"></i>
			</button>
		</div>
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="800">
			<defs>
			    <filter id="goo">
			    	<feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
			      	<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
			      	<feComposite in="SourceGraphic" in2="goo" operator="atop"/>
			    </filter>
			    <filter id="goo-no-comp">
			     	<feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
			      	<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
			    </filter>
			</defs>
		</svg>
	</div> 
	<div class="container">
			<div class="rotulus">
