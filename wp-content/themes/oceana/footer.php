	</main>

	<footer class="footer">
		<div class="container flex-row">

			<div class="col-span-3">
				<h5 class="title__h5">Ocean Vein Specialists</h5>
				<p class="footer-contact">601 S Coast Hwy<br />
					Oceanside, CA 92054<br />
					p 555-234-2342<br />
					f 555-234-2322</p>
				<ul class="footer-social">
					<li>
						<a href="">
							<svg class="icon-facebook-circle">
								<use xlink:href="#icon-facebook-circle"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="">
							<svg class="icon-twitter-circle">
								<use xlink:href="#icon-twitter-circle"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="">
							<svg class="icon-facebook-circle">
								<use xlink:href="#icon-facebook-circle"></use>
							</svg>
						</a>
					</li>
				</ul>
				<p class="footer-copyright">&copy;<?php echo date('Y'); ?> Ocean Vein Specialists<br />
					<a href="">Privacy Policy</a> | <a href="">Terms of Use</a><br />
					Web design: <a href="http://bradsawicki.com" target="_blank">Brad Sawicki</a></p>
			</div>

			<div class="col-span-3 footer-nav">
				<?php wp_nav_menu( array( 'menu' => 'Footer Column 1' ) ); ?>
			</div>

			<div class="col-span-3 footer-nav">
				<?php wp_nav_menu( array( 'menu' => 'Footer Column 2' ) ); ?>
			</div>

			<div class="col-span-3 footer-nav">
				<?php wp_nav_menu( array( 'menu' => 'Footer Column 3' ) ); ?>
			</div>

		</div>
	</footer>


	<?php wp_footer(); ?>
</body>
</html>
