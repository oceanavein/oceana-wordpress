<section class="hero home-hero bg-blue-pale">
	<div class="container">

		<div class="home-hero__content">
			<h1 class="home-hero__title"><?php the_field('hero_title'); ?></h1>
			<h2 class="home-hero__subtitle text-h3"><?php the_field('hero_subtitle'); ?></h2>
			<?php if( have_rows('hero_benefits') ): ?>
				<ul class="home-hero__benefits section-list">
			    <?php while ( have_rows('hero_benefits') ) : the_row(); ?>
			      <li><?php the_sub_field('benefit'); ?></li>
			    <?php endwhile; ?>
				</ul>
			<?php endif; ?>
			<p><a href="<?php the_field('hero_button_link'); ?>" class="btn btn--mobile-full-width">Schedule a Free Consultation</a></p>
		</div>

		<div class="home-hero__image">
			<div class="shadow-image rounded overflow-hidden">
				<?php
					$image_id = get_field('hero_image');
					$src = wp_get_attachment_image_src($image_id, 'home-hero');
					$srcset = wp_get_attachment_image_srcset($image_id, 'home-hero');
				?>
				<img src="<?=$src[0]?>" srcset="<?=$srcset?>" alt="<?php the_sub_field('hero_title'); ?>" />
			</div>
		</div>

	</div>
</section>