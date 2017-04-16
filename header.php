<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kendra Inman</title>
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
					<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/home-hero.jpg" alt="">
				</div>
				<div class="home-hero-message">
					<h1><?php bloginfo( 'name' ); ?></h1>
					<span class="tagline">Human Centered Brand Development</span>
				</div>
				<a href="#main"><div class="down"></div></a>
			</div>
		<?php endif ?>
		<div role="main" class="main" id="main">