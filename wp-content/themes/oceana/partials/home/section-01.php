<section class="home-intro">
	<div class="container">

		<div class="md:flex gap-5">
			<div class="home-intro__content col-span-7">
				<h2 class="text-h2 section-title"><?php the_field('section_1_title'); ?></h2>
				<div class="section-content">
					<?php the_field('section_1_content'); ?>
				</div>
			</div>
			<div class="home-intro__form col-span-5 flex-end">
				<?php get_template_part('partials/appointment-form'); ?>
			</div>
		</div>

	</div>
</section>