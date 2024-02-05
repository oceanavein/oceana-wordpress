<?php /* Template Name: Before and After */ ?>

<?php get_header(); ?>

<section class="hero page-hero before-after-hero bg-blue-pale">
	<div class="container">

		<div class="md:flex gap-5">
			<div class="col-span-8">
				<h1 class="page-title text-h1"><?php the_title(); ?></h1>
				<div class="section-content">
					<?php the_field('hero_content'); ?>
				</div>
			</div>

			<div class="col-span-4">
				<?php get_template_part('partials/appointment-form'); ?>
			</div>
		</div>

	</div>
</section>

<section class="before-after-section">
	<div class="container">

		<?php if( have_rows('images') ): ?>
			<div class="before-after">
				<?php while ( have_rows('images') ) : the_row(); ?>
					<div class="before-after__item">
						<h2 class="before-after__title text-h3"><?php the_sub_field('title'); ?></h2>
						<p class="before-after__description"><?php the_sub_field('description'); ?></p>
						<div class="before-after__grid md:grid--2">
							<div class="before-image">
								<?php $before_image = get_sub_field('before_image'); ?>
								<img src="<?php echo $before_image["sizes"]['before-after-image']; ?>" srcset="<?php echo $before_image["sizes"]['before-after-image']; ?> 586w, <?php echo $before_image["sizes"]['before-after-image-2x']; ?> 1172w" alt="Oceana Vein Clinic Office - Before Image" />
							</div>
							<div class="before-after__arrow">
								<svg class="icon-arrow-next">
									<use xlink:href="#icon-arrow-next"></use>
								</svg>
							</div>
							<div class="after-image">
								<?php $after_image = get_sub_field('after_image'); ?>
								<img src="<?php echo $after_image["sizes"]['before-after-image']; ?>" srcset="<?php echo $after_image["sizes"]['before-after-image']; ?> 586w, <?php echo $after_image["sizes"]['before-after-image-2x']; ?> 1172w" alt="Oceana Vein Clinic Office - Before Image" />
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

	</div>
</section>

<?php get_template_part('partials/reviews'); ?>

<?php get_template_part('partials/cta-section'); ?>

<?php get_footer(); ?>
