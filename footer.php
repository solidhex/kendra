				</div><!--eof #main -->
		<footer>
			<?php if ( is_front_page() ): ?>
				<div class="footer-link-msg-wrap">
					<div class="footer-client-links">
						<?php
							// $projects = get_pages( array( 'child_of' => 22) );
// 							foreach ($projects as $project) {
// 								if ( $project->post_parent !== 22 ) {
// 									echo $project->post_title;
// 								}
// 							}
						?>
						<span>Select a Project &raquo;</span>
						<?php
							 $projects = get_pages( array( 'child_of' => 22) );
						?>
						<ul>
							<?php 
								foreach ($projects as $project): 
									if ( $project->post_parent == 22 ) continue;
							?>
								<li><a href="<?php echo get_page_link( $project->ID ); ?>"><?php echo $project->post_title; ?></a></li>
							<?php endforeach ?>
						</ul>
					</div>
					<div class="footer-msg">
						<h2>Brands with a unique point of view</h2>
					</div>
				</div>
				<div class="sosumi">
					<div class="social">
						<ul>
							<li><a href="https://www.instagram.com/kendrainman/" rel="external">Instagram</a></li>
							<li><a href="https://www.pinterest.com/kendrai/" rel="external">Pinterest</a></li>
							<li><a href="https://www.linkedin.com/in/kendrainman/" rel="external">Linked In</a></li>
						</ul>
					</div>
					<div class="copyright">
						&copy; 2002 - <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.
					</div>
					<div class="title-wrap">
						<span class="title"><?php bloginfo( 'name' ); ?></span>
					</div>
				</div>
				
			<?php else: ?>
				<div class="footer-row">
					<nav>
						<a href="https://www.instagram.com/kendrainman/" rel="external">Instagram</a>
						<a href="https://www.pinterest.com/kendrai/" rel="external">Pinterest</a>
						<a href="https://www.linkedin.com/in/kendrainman/" rel="external">Linked In</a>
					</nav>
					<div class="copyright">
						&copy; 2002 - <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.
					</div>
					<div class="title-wrap">
						<span class="title"><?php bloginfo( 'name' ); ?></span>
					</div>
				</div>
			<?php endif; ?>
		</footer>
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
							//var_dump( $category );
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