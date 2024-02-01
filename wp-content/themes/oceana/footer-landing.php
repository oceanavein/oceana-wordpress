	</main>

	<footer class="landing-footer bg-blue">
		<div class="container">

			<div class="landing-footer-top md:flex justify-between relative">
				<div class="logo mb-32 md:mb-0 text-center">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-white.svg" alt="Oceana Vein Clinic" />
				</div>

				<div class="mb-32 md:mb-0">
					<a href="tel:<?php the_field('phone_number', 'option'); ?>" class="btn btn-outline items-center">
						<svg class="icon-phone icon-24 mr-8">
							<use xlink:href="#icon-phone" />
						</svg>
						<div class="pt-4">
							<?php the_field('phone_number', 'option'); ?>
						</div>
					</a>
				</div>

				<div class="landing-footer-address text-center">
					<p><?php the_field('office_address', 'option'); ?></p>
					<p><?php the_field('office_city', 'option'); ?>, <?php the_field('office_state', 'option'); ?> <?php the_field('office_zip', 'option'); ?></p>
				</div>
			</div>

			<div class="landing-footer-bottom pt-48">
				<p class="text-center">
					&copy;<?php echo date('Y'); ?> Ocean Vein Specialists
					<a href="/privacy-policy/" class="text-white">Privacy Policy</a> |
					<a href="/terms-of-use/" class="text-white">Terms of Use</a>
				</p>
			</div>

		</div>

	</footer>

	<?php wp_footer(); ?>
</body>
</html>
