<?php /* Template Name: Why Us */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section class="page-wrapper">
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
	</section>

	<section class="why-questions bg__blue">
		<div class="container">
			<h2 class="section-title title__h3"><?php the_field('questions_section_title'); ?></h2>
			<div class="body-content">
				<?php the_field('questions_section_content'); ?>
			</div>
		</div>
	</section>

<?php endwhile; endif; ?>

<?php get_template_part('partials/reviews'); ?>

<?php get_template_part('partials/cta-section'); ?>

<?php get_footer(); ?>
