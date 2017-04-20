<?php
/**
 * Template Name: About
 */
?>

<?php get_header(); ?>

<div class="about-content">
	<?php while ( have_posts() ) : the_post(); ?>
		<article class="preamble"><?php the_content(); ?></article>
	<?php endwhile; ?>
	<article class="skills"><?php the_block( 'Skills' ); ?></article>
	<article class="past-clients"><?php the_block( 'Past Clients' ); ?></article>
	<article class="accolades"><?php the_block( 'Honors and Acccolades' ); ?></article>
</div>

<?php get_footer(); ?>

