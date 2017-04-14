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
		<div class="burger-container">
			<div class="burgle-the-ham"></div>
		</div>
		<div class="home-hero">
			<div class="home-hero-media">
				<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/home-hero.jpg" alt="">
			</div>
			<div class="home-hero-message">
				<h1><?php bloginfo( 'name' ); ?></h1>
				<span class="tagline">Human Centered Brand Development</span>
			</div>
		</div>
		<div role="main" class="main">
			<div class="work">
				<div class="work-top">
					<h2>Work</h2>
					<span class="title"><?php bloginfo( 'name' ); ?></span>
				</div>
				<div class="work-content">
					<div class="work-image-wrap">
						<figure><img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/slide-fpo.jpg" alt=""></figure>
						<div class="work-heading">
							<h2>Strategic Branding that Resonates<a href="" class="read-more">Read <br>More</a></h2>
						</div>
					</div>
					<div class="more"><p>Fpo for overview of approach, thinking, artist’s statement. Spring is here! And with it we welcome a glamorous new edition of The Gentlewoman with, on the cover, superstar filmmaker Sofia Coppola photographed by Inez & Vinoodh and profiled by Holly Brubach. Inside, a rapturous exposition of female politics, worldly wit and good looks: Nicola Sturgeon, Scotland’s First Minister; the rollicking writer. The Gentlewoman with, on the cover, superstar filmmaker Sofia Coppola photographed by Inez & Vinoodh blah blah bhalll lorem ipsum dolor s</p></div>
				</div>
			</div>
		</div>
		<footer>
			
			<div class="sosumi">
				<ul>
					<li><a href="#">Roxy</a></li>
					<li><a href="#">Dollar Shave Club</a></li>
					<li><a href="#">New York Stock Exchange</a></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
				&copy; 2002 - <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved. 
				<ul>
					<li>Instagram</li>
					<li>Pinterest</li>
					<li>Linked In</li>
				</ul>
				<span class="title"><?php bloginfo( 'name' ); ?></span>
			</div>
		</footer>
	</div>
	<?php wp_footer(); ?>
</body>
</html>