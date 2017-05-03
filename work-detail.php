<?php
/**
 * Template Name: Work Detail
 */
?>

<?php get_header(); ?>


<div class="work-detail">
	<div class="work-detail-hero slider-wrap">
		<div class="slides">
			<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/fpo-work-large.jpg"><img src="https://placekitten.com/1440/723" alt="">
		</div>
	</div>
	<div class="slider">
		<div class="arrows">
			<a href="#" class="arrow arrow-prev"></a>
			<a href="#" class="arrow arrow-next"></a>
		</div>
		<h2>New York Stock Exchange</h2>
		<div class="intro">Authenticity, vibrancy and joie de vivre drive the brand strategy and 
graphics for the surf brand Roxy.</div>
		<div class="more">Launched in the early 90’s, ROXY is one of the leading surf wear brands. In 2008, my team was challenged to extend the brand from its core surf and snowboarding history into new efforts including lounge wear, athletic wear and a green line; while also keeping the core line vibrant and relevant to the ever changing teen market. Working with artists around the world, we created an archive of imagery that referenced the free spirit and creativity of the ROXY girl. We created relevant campaigns and innovative packaging solutions (like the footwear box which is reversible and meant to be customized and kept as a keepsake box) that increased sales even as the overall economy slowed.</div>
		<a href="" class="read-more alt"><span>Read</span> <span>More</span></a>
	</div>
	
</div>
<pre>
	<?php
	// $balce = get_post_meta( $post->ID );
	// echo count( $balce['related'] );
	// var_dump( $balce['related'] );
	
	?>
</pre>
<div class="projects-sort-container">
	<h2>Related Projects</h2>
	<ul class="project-list">
		<li>
			<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/fpo-work-large.jpg">
		</li><li>
			<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/fpo-work-large.jpg">
		</li><li>
			<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/fpo-work-large.jpg">
		</li><li>
			<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/fpo-work-large.jpg">
		</li><li>
			<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/fpo-work-large.jpg">
		</li><li>
			<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/fpo-work-large.jpg">
		</li>
	</ul>
	<a href="#" class="view-by-category">view projects by category</a>
</div>

<?php get_footer(); ?>