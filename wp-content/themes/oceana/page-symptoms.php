<?php /* Template Name: Symptoms */ ?>

<?php get_header(); ?>

<section class="hero page-hero bg-blue-pale">
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

<nav class="symptoms-nav bg-blue-md">
	<div class="container">
		<?php if( have_rows('symptoms') ): ?>
			<ul class="flex flex-wrap gap-10 justify-center">
				<?php $count = 0; ?>
		    <?php while ( have_rows('symptoms') ) : the_row(); ?>
		      <li><a href="#symptom-0<?php echo $count+1; ?>" <?php if(!$count): ?>class="is-active"<?php endif; ?>><?php the_sub_field('title'); ?></a></li>
					<?php $count++; ?>
		    <?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
</nav>

<section class="symptoms">
  <div class="container">

		<?php if( have_rows('symptoms') ): ?>
				<?php $count = 0; ?>
		    <?php while ( have_rows('symptoms') ) : the_row(); ?>
					<div id="symptom-0<?php echo $count+1; ?>" class="symptoms__item <?php if(!$count): ?>is-visible<?php endif; ?> md:flex gap-10">
						<div class="symptoms__content col-span-7">
				      <h2 class="text-h2 section-title"><?php the_sub_field('title'); ?></h2>
							<div class="body-content md:pr-20">
								<?php the_sub_field('description'); ?>
							</div>
						</div>
						<div class="symptoms__image col-span-5">
							<div class="shadow-image rounded overflow-hidden">
								<?php
									$image_id = get_sub_field('image');
									$src = wp_get_attachment_image_src($image_id, 'symptoms-image');
									$srcset = wp_get_attachment_image_srcset($image_id, 'symptoms-image');
								?>
								<img src="<?=$src[0]?>" srcset="<?=$srcset?>" alt="<?php the_sub_field('title'); ?>" />
							</div>
			      </div>
					</div>
				<?php $count++; ?>
		    <?php endwhile; ?>
		<?php endif; ?>

	</div>
</section>

<?php get_template_part('partials/cta-section'); ?>

<?php get_footer(); ?>
