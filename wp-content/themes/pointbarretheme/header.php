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
						foreach ($pages as $page)
						{
						    echo "<div class='nav-item'> <p class='souligney'>" . $page->post_title .  "</p></div>";
						}
					?>
						
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
		<div id="trigger"></div>
		<p class="pointbarretypo">POINT &mdash; BARRE</p>
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
		<?xml version="1.0" encoding="utf-8"?>
		<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
		<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 width="19.006px" height="19.006px" viewBox="0 0 19.006 19.006" enable-background="new 0 0 19.006 19.006" xml:space="preserve">
			<path fill="rgb(81, 0, 255)" d="M2.243,14.711c0.504,0.078,1.016-0.088,1.375-0.446L14.263,3.618c0.361-0.359,0.527-0.871,0.447-1.373
		c-0.076-0.504-0.392-0.941-0.843-1.174c-3.687-1.91-8.14-1.22-11.079,1.719c-2.938,2.938-3.627,7.392-1.717,11.08
		C1.305,14.318,1.741,14.633,2.243,14.711"/>
			<path fill="rgb(81, 0, 255)" d="M15.389,4.743L4.743,15.388c-0.36,0.36-0.528,0.871-0.45,1.373c0.078,0.504,0.393,0.938,0.844,1.174
		c3.689,1.91,8.143,1.222,11.08-1.717c2.938-2.938,3.627-7.39,1.72-11.082c-0.236-0.451-0.673-0.765-1.175-0.841
		C16.258,4.218,15.746,4.384,15.389,4.743"/>
		</svg>
	</div> 
	<div class="container">
			<div class="rotulus">
