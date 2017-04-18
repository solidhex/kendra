<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="page">
		<header>
			<div class="burger-container">
				<div class="burgle-the-ham"></div>
			</div>
			<nav>
				<ul>
					<!-- <li><a href="http://example.com/">Home</a></li> -->
					<li><a href="http://example.com/">Work</a></li>
					<!-- <li><a href="http://example.com/">About</a></li> -->
					<!-- <li><a href="http://example.com/">Contact</a></li> -->
				</ul>
			</nav>
			<span class="title"><?php bloginfo( 'name' ); ?></span>
		</header>
		<?php if ( is_front_page() ): ?>
			<div class="home-hero">
				<div class="home-hero-media">
					<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width ?>" height="<?php echo get_custom_header()->height; ?>">
				</div>
				<div class="home-hero-message">
					<h1><?php bloginfo( 'name' ); ?></h1>
					<span class="tagline"><?php bloginfo( 'description' ); ?></span>
				</div>
				<a href="#main"><div class="down"></div></a>
			</div>
		<?php endif ?>
		<div role="main" class="main" id="main">