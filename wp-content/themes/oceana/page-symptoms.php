<?php /* Template Name: Symptoms */ ?>

<?php get_header(); ?>

<section class="hero page-hero bg__pale-blue">
	<div class="container">

		<div class="flex-row">
			<div class="col-span-8">
				<h1 class="page-title title__h1"><?php the_title(); ?></h1>
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

<nav class="symptoms-nav bg__md-blue">
	<div class="container">
		<?php if( have_rows('symptoms') ): ?>
			<ul>
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
					<div id="symptom-0<?php echo $count+1; ?>" class="symptoms__item <?php if(!$count): ?>is-visible<?php endif; ?> flex-row">
						<div class="symptoms__content col-span-7">
				      <h2 class="title__h2 section-title"><?php the_sub_field('title'); ?></h2>
							<div class="body-content">
								<?php the_sub_field('description'); ?>
							</div>
						</div>
						<div class="symptoms__image col-span-5">
							<div class="shadow-image radius-4 overflow-hidden">
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
