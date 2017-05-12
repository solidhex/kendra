				</div><!--eof #main -->
		<div class="nav-overlay">
			<span class="close">X</span>
			<div class="nav-overlay-content">
				<nav>
					<ul>
						<li><a href="<?php bloginfo( 'url' ); ?>">Home</a></li>
						<li><a href="<?php echo get_page_link( 22 ); ?>">Work</a></li>
						<li><a href="<?php echo get_page_link( 43 );  ?>">About</a></li>
						<li><a href="<?php echo get_page_link( 18 ); ?>">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="category-overlay">
			<span class="close">X</span>
			<div class="category-overlay-content">
				<div class="cats">
					<span><a href="/projects?sort">All</a>, </span>
					<?php
						$categories = get_pages( array( 'parent' => 22, 'sort_column' => 'menu_order' ) );
						$counter = 1;
						foreach ( $categories as $category ) :
						$spacer = (count($categories) == $counter) ? '' : ', ' ;
					?>
					
					<span><a href="<?php bloginfo( 'url' ); ?>/projects?sort=<?php echo $category->post_name; ?>"><?php echo $category->post_title; ?></a><?php echo $spacer; ?></span>
						
					<?php 
						$counter++;
						endforeach; 
					?>
				
				</div>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
</body>
</html>