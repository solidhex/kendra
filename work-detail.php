<?php
/**
 * Template Name: Work Detail
 */
?>

<?php get_header(); ?>


<div class="work-detail">
	<div class="work-detail-hero slider-wrap">
		<div class="slides">
			<?php echo get_attached_images( array( 'size' => 'large' ) ); ?>
		</div>
	</div>
	<div class="slider">
		<div class="arrows">
			<a href="#" class="arrow arrow-prev"></a>
			<a href="#" class="arrow arrow-next"></a>
		</div>
		<h2><?php the_title(); ?></h2>
		<div class="intro"><?php the_block( 'Intro' ); ?></div>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<div class="more"><?php the_content(); ?></div>
			
			<?php endwhile; ?>
		
		<a href="" class="read-more alt"><span>Read</span> <span>More</span></a>
	</div>
	
</div>
<pre>
	<?php
	$post_meta = get_post_meta( $post->ID );
	// $balce = get_post_meta( $post->ID );
	// echo count( $balce['related'] );
	// var_dump( $balce['related'] );
	$related = $post_meta['related'];
	var_dump( $related );
	?>
</pre>
<div class="projects-sort-container">
	<h2>Related Projects</h2>
	<?php if ( count($related) > 0 ): ?>
		<ul class="project-list">
			<?php foreach ($related as $key => $value) {
				echo 'work'
			} ?>
		</ul>	
	<?php endif ?>
	
	<a href="#" class="view-by-category">view projects by category</a>
</div>

<?php get_footer(); ?>