<?php
/**
 * Template Name: Projects
 */
?>

<?php get_header(); ?>
<div class="projects-sort-container">
	<h2>Projects</h2>
	<?php if ( isset($_REQUEST['sort']) && !empty( $_REQUEST['sort']) ) {
		$parent_page_path = 'work/' . filter_input(INPUT_GET, 'sort', FILTER_SANITIZE_ENCODED);
		$path = get_page_by_path( $parent_page_path );
		$parent_id = $path->ID;
	
		$projects = get_pages( 'child_of=' . $parent_id);
	} else {
		$projects = get_pages( array( 'child_of' => 22) );
	} ?>

	
	<a href="#" class="view-by-category">view projects by category</a>
	<ul class="project-list">
		<?php 
			foreach ($projects as $project): 
				if ($project->post_parent == 22) continue; 
		?>
			<li><a href="<?php echo get_page_link( $project->ID ); ?>"><?php echo get_the_post_thumbnail($project->ID, 'small' ); ?></a></li>
		<?php endforeach; ?>
	</ul>
</div>
<?php get_footer(); ?>