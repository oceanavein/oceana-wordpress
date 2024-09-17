<?php
	$hero_title = get_field('hero_title');
	$hero_subtitle = get_field('hero_subtitle');
	$hero_button_link = get_field('hero_button_link');

	$image_id = get_field('hero_image');
	$src = wp_get_attachment_image_src($image_id, 'home-hero');
	$srcset = wp_get_attachment_image_srcset($image_id, 'home-hero');
?>

<section class="hero home-hero bg-blue-pale">
	<div class="container">

		<div class="home-hero__content">
			<h1 class="home-hero__title">
				<?php echo $hero_title; ?>
			</h1>

			<h2 class="home-hero__subtitle text-h3">
				<?php echo $hero_subtitle; ?>
			</h2>

			<?php if( have_rows('hero_benefits') ): ?>
				<ul class="home-hero__benefits section-list">
			    <?php while ( have_rows('hero_benefits') ) : the_row(); ?>
						<?php $benefit = get_sub_field('benefit') ?>
			      <li>
							<?php echo $benefit; ?>
						</li>
			    <?php endwhile; ?>
				</ul>
			<?php endif; ?>

			<p>
				<a href="<?php echo $hero_button_link; ?>" class="btn btn--mobile-full-width">
					Schedule a Free Consultation
				</a>
			</p>
		</div>

		<div class="home-hero__image">
			<div class="shadow-image rounded overflow-hidden">
				<img
					src="<?=$src[0]?>"
					srcset="<?=$srcset?>"
					alt="<?php echo $hero_title; ?>"
					loading="eager"
				/>
			</div>
		</div>

	</div>
</section>