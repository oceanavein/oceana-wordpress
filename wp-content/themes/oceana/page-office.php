<?php /* Template Name: Our Office */ ?>

<?php get_header(); ?>

<section class="office-hero hero page-hero bg-blue-pale">
	<div class="container">

		<div class="md:flex gap-5">
			<div class="col-span-4">
				<h1 class="page-title text-h1"><?php the_title(); ?></h1>
				<div class="section-content">
					<p class="footer-contact">Oceana Vein Specialist<br />
						<?php the_field('office_address', 'option'); ?><br />
						<?php the_field('office_city', 'option'); ?>, <?php the_field('office_state', 'option'); ?> <?php the_field('office_zip', 'option'); ?><br />
						<?php the_field('office_hours', 'option'); ?></p>
					<p><a href="<?php the_field('directions_link', 'option'); ?>" target="_blank">View Map</a></p>
				</div>
			</div>

			<div class="col-span-8">
				<div class="section-content">
					<?php the_field('hero_content'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="office-images bg-blue">
	<?php if( have_rows('office_images') ): ?>
		<div class="office-slider img-slider">
			<?php while ( have_rows('office_images') ) : the_row(); ?>
				<div class="office-slider__item">
					<?php $image = get_sub_field('image'); ?>
					<img src="<?php echo $image["sizes"]['full-width-image']; ?>" srcset="<?php echo $image["sizes"]['full-width-image']; ?> 1000w, <?php echo $image["sizes"]['full-width-image-2x']; ?> 2000w" alt="Oceana Vein Clinic Office" />
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
</section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="office-content">
  <div class="container">

		<div class="md:flex gap-5">
      <div class="col-span-6">
        <div class="section-content">
					<?php the_content(); ?>
        </div>
      </div>
      <div class="col-span-6 flex-center">
				<?php get_template_part('partials/appointment-form'); ?>
      </div>
    </div>

  </div>
</section>

<?php endwhile; endif; ?>

<?php get_template_part('partials/cta-section'); ?>

<?php get_footer(); ?>
