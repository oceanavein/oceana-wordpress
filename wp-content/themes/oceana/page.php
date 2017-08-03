<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="page-wrapper">
		<div class="container">

			<div class="flex-row">

				<section class="page-content col-span-8">
					<h1 class="page-title title__h1"><?php the_title(); ?></h1>
					<div class="body-content">
						<?php the_content(); ?>
					</div>
				</section>

				<aside class="page-sidebar col-span-4">
					<?php get_template_part('partials/appointment-form'); ?>
				</aside>

			</div>

		</div>
	</div>

<?php endwhile; endif; ?>

<?php get_template_part('partials/cta-section'); ?>

<?php get_footer(); ?>
