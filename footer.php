				</div><!--eof #main -->
		<footer>
			<?php if ( is_front_page() ): ?>
				<div class="footer-link-msg-wrap">
					<div class="footer-client-links">
						<span>Select a Project &raquo;</span>
						<ul>
							<li><a href="#">Roxy</a></li>
							<li><a href="#">Dollar Shave Club</a></li>
							<li><a href="#">New York Stock Exchange</a></li>
							<li><a href="#">Ebay</a></li>
							<li><a href="#">Original Juan's</a></li>
							<li><a href="#">Finalandia Vodka</a></li>
							<li><a href="#">One Love Organics</a></li>
							<li><a href="#">Senahill</a></li>
							<li><a href="#">Senahill</a></li>
							<li><a href="#">Senahill</a></li>
							<li><a href="#">Senahill</a></li>
							<li><a href="#">Senahill</a></li>
							<li><a href="#">Senahill</a></li>
							<li><a href="#">Senahill</a></li>
							<li><a href="#">Senahill</a></li>
							<li><a href="#">Senahill</a></li>
							<li><a href="#">Senahill</a></li>
							<li><a href="#">Senahill</a></li>
							<li><a href="#">Senahill</a></li>
						</ul>
					</div>
					<div class="footer-msg">
						<h2>Brands with a unique point of view</h2>
					</div>
				</div>
				<div class="sosumi">
					<div class="social">
						<ul>
							<li><a href="#">Instagram</a></li>
							<li><a href="#">Pinterest</a></li>
							<li><a href="#">Linked In</a></li>
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
					<span><a href="#">All</a>,</span> <span><a href="#">Creative Direction</a>,</span> <span><a href="#">Strategy</a>,</span> <span><a href="#">Brand and Identity</a>,</span><span><a href="#">Digital Product</a>,</span> <span><a href="#">Packaging</a>,</span> <span><a href="#">Print</a>,</span> <span><a href="#">Art Direction</a></span>
				</div>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
</body>
</html>