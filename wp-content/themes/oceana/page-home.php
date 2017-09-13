<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<section class="hero home-hero bg__pale-blue">
	<div class="container">

		<div class="home-hero__content">
			<h1 class="home-hero__title"><?php the_field('hero_title'); ?></h1>
			<h2 class="home-hero__subtitle title__h3"><?php the_field('hero_subtitle'); ?></h2>
			<?php if( have_rows('hero_benefits') ): ?>
				<ul class="home-hero__benefits">
			    <?php while ( have_rows('hero_benefits') ) : the_row(); ?>
			      <li><?php the_sub_field('benefit'); ?></li>
			    <?php endwhile; ?>
				</ul>
			<?php endif; ?>
			<p><a href="<?php the_field('hero_button_link'); ?>" class="btn btn--mobile-full-width">Schedule a Free Consultation</a></p>
		</div>

		<div class="home-hero__image">
			<?php
				$image_id = get_field('hero_image');
				$src = wp_get_attachment_image_src($image_id, 'home-hero');
				$srcset = wp_get_attachment_image_srcset($image_id, 'home-hero');
			?>
			<img src="<?=$src[0]?>" srcset="<?=$srcset?>" alt="<?php the_sub_field('hero_title'); ?>" />
		</div>

	</div>
</section>

<section class="home-intro">
	<div class="container">

		<div class="flex-row">
			<div class="home-intro__content col-span-7">
				<h2 class="title__h2 section-title"><?php the_field('section_1_title'); ?></h2>
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

<section class="home-doctor">
	<div class="container">

		<div class="home-doctor-grid flex-row">
			<div class="home-doctor__content col-span-7">
				<h2 class="title__h2 section-title"><?php the_field('section_2_title'); ?></h2>
				<div class="section-content">
					<?php the_field('section_2_content'); ?>
				</div>
			</div>
			<div class="home-doctor__image col-span-5 shadow-image">
				<?php
					$image_id = get_field('section_2_image');
					$src = wp_get_attachment_image_src($image_id, 'head-shot');
					$srcset = wp_get_attachment_image_srcset($image_id, 'head-shot');
				?>
				<img src="<?=$src[0]?>" srcset="<?=$srcset?>" alt="Dr. Adam Isadore" />
			</div>
		</div>

	</div>
</section>

<section class="home-veins bg__pale-blue">
	<div class="container">

		<div class="flex-row">
			<div class="home-veins__content col-span-6">
				<h2 class="title__h2 section-title"><?php the_field('section_3_title'); ?></h2>
				<div class="section-content">
					<?php the_field('section_3_content'); ?>
					<?php if( have_rows('section_3_list') ): ?>
						<ul class="section-list">
					    <?php while ( have_rows('section_3_list') ) : the_row(); ?>
					      <li><?php the_sub_field('list_item'); ?></li>
					    <?php endwhile; ?>
						</ul>
					<?php endif; ?>
					<p><a href="<?php the_field('section_3_cta_link'); ?>" class="cta-link">Schedule a Free Consultation</a></p>
				</div>
			</div>
			<div class="home-veins__image col-span-6 shadow-image">
				<?php
					$image_id = get_field('section_3_image');
					$src = wp_get_attachment_image_src($image_id, 'treatment-image');
					$srcset = wp_get_attachment_image_srcset($image_id, 'treatment-image');
				?>
				<img src="<?=$src[0]?>" srcset="<?=$srcset?>" alt="<?php the_field('section_3_title'); ?>" />
			</div>
		</div>

	</div>
</section>

<section class="home-payment">
	<div class="container">

		<div class="flex-row">
			<div class="home-payment__image col-span-5 shadow-image">
				<?php
					$image_id = get_field('section_4_image');
					$src = wp_get_attachment_image_src($image_id, 'section-vertical-image');
					$srcset = wp_get_attachment_image_srcset($image_id, 'section-vertical-image');
				?>
				<img src="<?=$src[0]?>" srcset="<?=$srcset?>" alt="Oceana Vein Clinic" />
			</div>
			<div class="home-payment__content col-span-7">
				<div class="body-content">
					<?php the_field('section_4_content'); ?>
				</div>
			</div>
		</div>

	</div>
</section>

<?php get_template_part('partials/cta-section'); ?>

<section class="home-map">
	<div class="container">
		<?php get_template_part('partials/appointment-form-2'); ?>
	</div>
</div>

<?php get_footer(); ?>
