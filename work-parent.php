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
					<h2>Strategic Branding that Resonates<a href="" class="read-more"><span>Read</span> <span>More</span></a></h2>
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
		<?php 
			$all_projects = get_pages( array( 'child_of' => 22) );
			foreach ($all_projects as $project) {
				if ($project->post_parent !== 22) {
		?>
			<li><a href="<?php echo get_page_link( $project->ID ); ?>"><?php echo get_the_post_thumbnail($project->ID, 'small'); ?></a></li>
		<?php 
				}
			} 
		?>
		
	</ul>
</div>



<?php get_footer(); ?>