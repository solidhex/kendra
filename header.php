<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google-site-verification" content="OxuIPtzYWEZqrfjex3mxIXfs4uy26IFvOPeEVqZVKP8" />
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
				<div class="loader"><img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/loader.gif" alt=""></div>
				<div class="home-hero-media slider-wrap">
					<div class="slides">
						<?php if ( isset($_REQUEST['video'] ) && !empty( $_REQUEST['video'] ) ): ?>
							
							<?php 

								$assets =  get_attached_media( '' );

								foreach ($assets as $asset) {
									$type = $asset->post_mime_type;
									if ( $type == 'image/jpeg' || $type == 'image/gif' ) {
							?>
										<div><?php echo wp_get_attachment_image( $asset->ID, 'full' ) ; ?></div>
							<?php
									} else if ( $type == 'video/mp4' ) {
							?>
										<div>
											<video playsinline autoplay muted loop class="bgvid">
												<source src="<?php echo $asset->guid; ?>" type="video/mp4">
											</video>
										</div>
							<?php 
									}
								}

							?>

						<?php else: ?>
							<?php echo get_attached_images( array( 'size' => 'full', 'prepend' => '<div>', 'append' => '</div>', 'orderby' => 'menu_order', 'order' => 'ASC' ) ); ?>
						<?php endif ?>
					</div>
				</div>
				<div class="controls">
					<span class="control" id="slider-prev"></span>
					<span class="control" id="slider-next"></span>
				</div>
				<div class="home-hero-message">
					<h1><?php bloginfo( 'name' ); ?></h1>
					<span class="tagline"><?php bloginfo( 'description' ); ?></span>
				</div>
			</div>
		<?php endif ?>
		<div role="main" class="main" id="main">