<?php
/**
 * Template Name: Work
 */

	get_header();

?>
<div class="work-parent">
	<div class="work-parent-content">
		<div class="work-feature">
			<div class="work-image-wrap">
				<figure class="work-feature-image">
					<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/fpo-work-large.jpg">
				</figure>
				<div class="work-heading">
					<h2>Strategic Branding that Resonates<a href="" class="read-more">Read <br>More</a></h2>
				</div>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<div class="more"><?php the_content(); ?></div>
			
			<?php endwhile; ?>
		</div>
	</div>
</div>
<div class="projects-sort-container">
	<h2>All Projects</h2>
	<a href="#" class="view-by-category">view projects by category</a>
	<ul class="project-list">
		<li>
			<a href="<?php echo get_page_link( 52 ); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/fpo-work-large.jpg"></a>
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
</div>



<?php get_footer(); ?>