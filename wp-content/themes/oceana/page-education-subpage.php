<?php /* Template Name: Education Subpage */ ?>

<?php get_header(); ?>

<section class="hero page-hero bg__pale-blue">
	<div class="container">

		<div class="flex-row">
			<div class="col-span-8">
				<h1 class="page-title title__h1"><?php the_field('hero_title'); ?></h1>
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

<section class="education-causes">
  <div class="container">

    <div class="flex-row">
      <div class="education-causes__image col-span-6">
        img
      </div>
      <div class="education-causes__content col-span-6">
        <h2 class="title__h2 section-title"><?php the_field('causes_section_title'); ?></h2>
        <div class="section-content">
					<?php the_field('causes_section_content'); ?>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="education-symptoms bg__blue">
  <div class="container">

    <div class="flex-row">
      <div class="education-symptoms__content col-span-5">
        <h2 class="title__h3 section-title"><?php the_field('symptoms_section_title'); ?></h2>
        <div class="section-content">
					<?php the_field('symptoms_section_content'); ?>
        </div>
      </div>
      <div class="education-symptoms__list col-span-6">
				<?php if( have_rows('symptoms_section_list') ): ?>
					<ul>
				    <?php while ( have_rows('symptoms_section_list') ) : the_row(); ?>
				      <li><?php the_sub_field('list_item'); ?></li>
							<?php $count++; ?>
				    <?php endwhile; ?>
					</ul>
				<?php endif; ?>
      </div>
    </div>

  </div>
</section>

<section class="education-treatments">
  <div class="container">

    <div class="flex-row">
      <div class="education-treatments__content col-span-7">
        <div class="body-content">
					<?php the_field('treatments_section_content'); ?>
        </div>
      </div>
      <div class="education-treatment__form col-span-5 flex-end">
				<?php get_template_part('partials/appointment-form-2'); ?>
      </div>
    </div>

  </div>
</section>

<?php get_template_part('partials/cta-section'); ?>

<?php get_footer(); ?>
