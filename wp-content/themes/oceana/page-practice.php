<?php /* Template Name: Our Practice */ ?>

<?php get_header(); ?>

<section class="hero page-hero bg-blue-pale">
	<div class="container">

		<div class="flex-row">
			<div class="col-span-8">
				<h1 class="page-title text-h1"><?php the_title(); ?></h1>
				<h2 class="page-subtitle text-h3"><?php the_field('hero_subtitle'); ?></h2>
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

<section class="practice-venous bg-blue">
  <div class="container">

    <div class="flex-row flex-row__center">
      <div class="practice-venous__content col-span-6">
        <h2 class="text-h2 section-title"><?php the_field('section_1_title'); ?></h2>
        <div class="section-content">
					<?php the_field('section_1_content'); ?>
        </div>
      </div>
      <div class="practice-venous__form col-span-6">
				<div class="shadow-image rounded overflow-hidden">
					<?php
						$image_id = get_field('section_1_image');
						$src = wp_get_attachment_image_src($image_id, 'section-image');
						$srcset = wp_get_attachment_image_srcset($image_id, 'section-image');
					?>
					<img
						src="<?=$src[0]?>"
						srcset="<?=$srcset?>"
						alt="<?php the_field('section_1_title'); ?>" />
				</div>
      </div>
    </div>

  </div>
</section>

<section class="practice-doctor">
  <div class="container">

    <div class="flex-row flex-row__center">
      <div class="practice-doctor__image col-span-5">
				<div class="shadow-image rounded overflow-hidden">
					<?php
						$image_id = get_field('section_2_image');
						$src = wp_get_attachment_image_src($image_id, 'head-shot');
						$srcset = wp_get_attachment_image_srcset($image_id, 'head-shot');
					?>
					<img src="<?=$src[0]?>" srcset="<?=$srcset?>" alt="Dr. Adam Isadore" />
				</div>
      </div>
      <div class="practice-doctor__content col-span-7">
				<h2 class="text-h2 section-title"><?php the_field('section_2_title'); ?></h2>
        <div class="section-content">
					<?php the_field('section_2_content'); ?>
          <p><a href="<?php the_field('section_2_cta_link'); ?>" class="cta-link">Contact Dr. Isadore</a></p>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="practice-office bg-blue">
  <div class="container">

    <div class="flex-row flex-row__center">
      <div class="practice-office__content col-span-6">
				<h2 class="text-h2 section-title"><?php the_field('section_3_title'); ?></h2>
        <div class="section-content">
					<?php the_field('section_3_content'); ?>
        </div>
      </div>
      <div class="practice-office__image col-span-6">
				<div class="shadow-image rounded overflow-hidden">
					<?php if( have_rows('section_3_images') ): ?>
						<div class="practice-office__slider img-slider">
							<?php while ( have_rows('section_3_images') ) : the_row(); ?>
								<div class="practice-office__slider-item">
									<?php
										$image_id = get_sub_field('image');
										$src = wp_get_attachment_image_src($image_id, 'section-image');
										$srcset = wp_get_attachment_image_srcset($image_id, 'section-image');
									?>
									<img src="<?=$src[0]?>" srcset="<?=$srcset?>" alt="" />
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
      </div>
    </div>

  </div>
</section>

<section class="practice-finances">
  <div class="container">

    <div class="flex-row flex-row__center">
      <div class="practice-finances__content col-span-7">
				<h2 class="text-h3 section-title"><?php the_field('section_4_title'); ?></h2>
        <div class="section-content">
					<?php the_field('section_4_content'); ?>
        </div>
      </div>
      <div class="practice-finances__form col-span-5 flex-end">
				<?php get_template_part('partials/appointment-form-2'); ?>
      </div>
    </div>

  </div>
</section>

<?php get_template_part('partials/reviews'); ?>

<?php get_template_part('partials/cta-section'); ?>

<?php get_footer(); ?>
