	</main>

	<footer class="footer">
		<div class="container flex-row">

			<div class="col-span-3">
				<h5 class="title__h5"><?php bloginfo('name'); ?></h5>
				<p class="footer-contact"><?php the_field('office_address', 'option'); ?><br />
					<?php the_field('office_city', 'option'); ?>, <?php the_field('office_state', 'option'); ?> <?php the_field('office_zip', 'option'); ?><br />
					p <?php the_field('phone_number', 'option'); ?><br />
					f <?php the_field('fax_number', 'option'); ?><br />
					<?php the_field('office_hours', 'option'); ?></p>
				<ul class="footer-social">
					<li>
						<a href="<?php the_field('facebook_link', 'option'); ?>">
							<svg class="icon-facebook-circle">
								<use xlink:href="#icon-facebook-circle"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="<?php the_field('twitter_link', 'option'); ?>">
							<svg class="icon-twitter-circle">
								<use xlink:href="#icon-twitter-circle"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="<?php the_field('youtube_link', 'option'); ?>">
							<svg class="icon-youtube-circle">
								<use xlink:href="#icon-youtube-circle"></use>
							</svg>
						</a>
					</li>
				</ul>
				<p class="footer-copyright">&copy;<?php echo date('Y'); ?> Ocean Vein Specialists<br />
					<a href="/privacy-policy/">Privacy Policy</a> | <a href="/terms-use/">Terms of Use</a><br />
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
