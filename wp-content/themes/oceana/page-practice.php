<?php /* Template Name: Our Practice */ ?>

<?php get_header(); ?>

<section class="hero page-hero bg__pale-blue">
	<div class="container">

		<div class="flex-row">
			<div class="col-span-8">
				<h1 class="page-title title__h1"><?php the_title(); ?></h1>
				<h2 class="page-subtitle title__h3"><?php the_field('hero_subtitle'); ?></h2>
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

<section class="practice-venous bg__blue">
  <div class="container">

    <div class="flex-row">
      <div class="practice-venous__content col-span-6">
        <h2 class="title__h2 section-title"><?php the_field('section_1_title'); ?></h2>
        <div class="section-content">
					<?php the_field('section_1_content'); ?>
        </div>
      </div>
      <div class="practice-venous__form col-span-6 flex-end">
        img
      </div>
    </div>

  </div>
</section>

<section class="practice-doctor">
  <div class="container">

    <div class="flex-row">
      <div class="practice-doctor__image col-span-5">
        img
      </div>
      <div class="practice-doctor__content col-span-7">
				<h2 class="title__h2 section-title"><?php the_field('section_2_title'); ?></h2>
        <div class="section-content">
					<?php the_field('section_2_content'); ?>
          <p><a href="" class="cta-link">Contact Dr. Isadore</a></p>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="practice-venous bg__blue">
  <div class="container">

    <div class="flex-row">
      <div class="practice-venous__content col-span-6">
				<h2 class="title__h2 section-title"><?php the_field('section_3_title'); ?></h2>
        <div class="section-content">
					<?php the_field('section_3_content'); ?>
        </div>
      </div>
      <div class="practice-venous__image col-span-6 flex-end">
        img
      </div>
    </div>

  </div>
</section>

<section class="practice-finances">
  <div class="container">

    <div class="flex-row">
      <div class="practice-finances__content col-span-7">
				<h2 class="title__h2 section-title"><?php the_field('section_4_title'); ?></h2>
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

<?php get_template_part('partials/cta-section'); ?>

<?php get_footer(); ?>
