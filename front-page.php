<?php get_header(); ?>
			<div class="work">
				<div class="work-content">
					<div class="work-image-wrap slider-wrap">
						<div class="slides"><img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/slide-fpo.jpg" alt=""><img src="https://placekitten.com/791/507" alt=""></div>
						<div class="work-heading">
							<h2>Strategic Branding that Resonates<a href="" class="read-more"><span>Read</span> <span>More</span></a></h2>
						</div>
					</div>
					
					<?php while ( have_posts() ) : the_post(); ?>
						
						<div class="more"><?php the_content(); ?></div>
					
					<?php endwhile; ?>
					
				</div>
			</div>
<?php get_footer();	 ?>