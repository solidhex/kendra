<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home page</title>
	<?php wp_head(); ?>
	<style type="text/css" media="screen">
		.header {
			background: #f00;
			position: fixed;
			top: 0;
			right: 0;
			left: 0;
			min-height: 40px;
			
		}
		.topnav {
			text-align: center;
			background: rgba(0, 0, 0, 0.25);
			position: relative;
		}
		.topnav a {
			display: inline-block;
			position: relative;
			transition: all 200ms cubic-bezier(0.420, 0.000, 0.580, 1.000);
		}
		body.error404 .link-home, 
		body.error404 .link-about,
		body.error404 .link-contact
		{
			opacity: 1;
			z-index: -1;
		}
		.topnav:hover a {
/*			left: 0;*/
			transform: translateX(0);
			opacity: 1;
			z-index: 1;
		}
		.link-work {
			z-index: 1;
			transform: translateX(-50%);
		}
	</style>
</head>
<body <?php body_class(); ?>>
	<div class="header">
		<div class="topnav">
			<a href="#" class="link-home">Home</a>
			<a href="#" class="link-work">Work</a>
			<a href="#" class="link-about">About</a>
			<a href="#" class="link-contact">Contact</a>
		</div>
	</div>
	
</body>
</html>