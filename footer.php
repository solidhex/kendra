				</div>
		<footer>
			<?php if ( is_front_page() ): ?>
				<div class="footer-link-msg-wrap">
					<div class="footer-msg">
						<h2>Brands with a unique point of view</h2>
					</div>
					<div class="footer-client-links">
						<span>Select a Project &raquo;</span>
						<ul>
							<li><a href="http://example.com/">Roxy</a></li>
							<li><a href="http://example.com/">Dollar Shave Club</a></li>
							<li><a href="http://example.com/">New York Stock Exchange</a></li>
							<li><a href="http://example.com/">Ebay</a></li>
							<li><a href="http://example.com/">Original Juan's</a></li>
							<li><a href="http://example.com/">Finalandia Vodka</a></li>
							<li><a href="http://example.com/">One Love Organics</a></li>
							<li><a href="http://example.com/">Senahill</a></li>
							<li><a href="http://example.com/">Senahill</a></li>
							<li><a href="http://example.com/">Senahill</a></li>
							<li><a href="http://example.com/">Senahill</a></li>
							<li><a href="http://example.com/">Senahill</a></li>
							<li><a href="http://example.com/">Senahill</a></li>
							<li><a href="http://example.com/">Senahill</a></li>
							<li><a href="http://example.com/">Senahill</a></li>
							<li><a href="http://example.com/">Senahill</a></li>
							<li><a href="http://example.com/">Senahill</a></li>
							<li><a href="http://example.com/">Senahill</a></li>
							<li><a href="http://example.com/">Senahill</a></li>
						</ul>
					</div>
				</div>
				<div class="sosumi">
					<div class="copyright">
						&copy; 2002 - <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.
					</div>
					<div class="social">
						<ul>
							<li><a href="http://example.com/">Instagram</a></li>
							<li><a href="http://example.com/">Pinterest</a></li>
							<li><a href="http://example.com/">Linked In</a></li>
						</ul>
					</div>
					<div class="title-wrap">
						<span class="title"><?php bloginfo( 'name' ); ?></span>
					</div>
				</div>
				
			<?php else: ?>	
				other footer
			<?php endif; ?>
			
			</div>
		</footer>
		<div class="nav-overlay">
			<span class="close">X</span>
			<nav>
				<ul>
					<li><a href="<?php bloginfo( 'url' ); ?>">Home</a></li>
					<li><a href="#">Work</a></li>
					<li>About</li>
					<li>Contact</li>
				</ul>
			</nav>
		</div>
	</div>
	<?php wp_footer(); ?>
</body>
</html>