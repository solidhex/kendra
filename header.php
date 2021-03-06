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
			<?php if ( !is_page_template( 'projects.php' ) ): ?>
				<nav>
					<a href="<?php bloginfo( 'url' ); ?>" class="header-link-home">Home</a>
					<a href="<?php echo get_page_link( 22 ); ?>" class="header-link-work">Work</a>
					<a href="<?php echo get_page_link( 43 );  ?>" class="header-link-about">About</a>
					<a href="<?php echo get_page_link( 18 ); ?>" class="header-link-contact">Contact</a>
				</nav>
			<?php endif ?>
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