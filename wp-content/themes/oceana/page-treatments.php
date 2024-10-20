<?php /* Template Name: Treatments */ ?>

<?php get_header(); ?>

<section class="hero page-hero treatments-hero bg-blue-pale">
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

		<div class="anchor-link">
			<a href="#treatments-list" id="treatments-scroll">
				<span class="anchor-link__label">View Treatments</span>
				<svg class="icon-arrow-down">
					<use xlink:href="#icon-arrow-down"></use>
				</svg>
			</a>
		</div>

	</div>
</section>

<section class="treatments-image">
	<?php $image = get_field('hero_image'); ?>
	<img src="<?php echo $image["sizes"]['full-width-image']; ?>"
				srcset="<?php echo $image["sizes"]['full-width-image']; ?> 1000w,
				<?php echo $image["sizes"]['full-width-image-2x']; ?> 2000w"
				alt="Oceana Vein Clinic Office" />
</section>

<section id="treatments-list" class="treatments-list">
  <div class="container">

		<?php if( have_rows('treatments') ): ?>
			<div class="grid md:grid-cols-2 gap-10 treatments-grid">
		    <?php while ( have_rows('treatments') ) : the_row(); ?>
					<div class="mb-24">
		        <h2 class="text-h3"><?php the_sub_field('title'); ?></h2>
		        <div class="body-content">
		          <?php the_sub_field('description'); ?>
		          <p><a href="<?php the_sub_field('page_link'); ?>" class="cta-link">Learn More</a></p>
		        </div>
		      </div>
		    <?php endwhile; ?>
			</div>
		<?php endif; ?>

  </div>
</section>

<section class="payment-options bg-blue-pale">
  <div class="container">

		<div class="md:flex gap-10">
			<div class="col-span-6">
				<h3 class="section-title text-h2"><?php the_field('payment_section_title'); ?></h3>
				<div class="body-content">
		      <p><?php the_field('payment_section_content'); ?></p>
				</div>
			</div>

			<?php if( have_rows('payment_options') ): ?>
		    <?php while ( have_rows('payment_options') ) : the_row(); ?>
					<div class="col-span-6">
						<div class="payment-grid__logo">
							<img src="<?php the_sub_field('logo'); ?>" alt="" />
		        </div>
		        <div class="body-content">
		          <?php the_sub_field('description'); ?>
		        </div>
		      </div>
		    <?php endwhile; ?>
			<?php endif; ?>
		</div>

  </div>
</section>

<?php get_template_part('partials/cta-section'); ?>

<?php get_footer(); ?>
