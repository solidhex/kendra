<?php
/**
 * Template Name: Projects
 */
?>

<?php get_header(); ?>
<div class="projects-sort-container">
	<h2>Projects</h2>
	<?php if ( isset($_REQUEST['sort']) && !empty( $_REQUEST['sort']) ) {
		$catty_id = filter_input(INPUT_GET, 'sort', FILTER_SANITIZE_ENCODED);
	} else {
		$catty_id = 'all';
	} ?>
	
	<a href="#" class="view-by-category">view projects by category</a>
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
</div>
<?php get_footer(); ?>