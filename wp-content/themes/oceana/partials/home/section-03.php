<?php
	$title = get_field('section_3_title');
	$content = get_field('section_3_content');
	$cta_link = get_field('section_3_cta_link');

	$image_id = get_field('section_3_image');
	$src = wp_get_attachment_image_src($image_id, 'treatment-image');
	$srcset = wp_get_attachment_image_srcset($image_id, 'treatment-image');
?>

<section class="home-veins bg-blue">
	<div class="container">

		<div class="md:flex gap-5">
			<div class="home-veins__image col-span-6">
				<div class="vein-badge shadow-image">
					<img
						src="<?php echo $src[0]; ?>"
						srcset="<?php echo $srcset; ?>"
						alt="<?php echo $title; ?>" />
				</div>
			</div>
			<div class="home-veins__content col-span-6">
				<h2 class="text-h2 mb-24"><?php echo $title; ?></h2>
				<div class="section-content">
					<?php echo $content; ?>

					<?php if( have_rows('section_3_list') ): ?>
						<ul class="section-list">
					    <?php while ( have_rows('section_3_list') ) : the_row(); ?>
					      <li><?php the_sub_field('list_item'); ?></li>
					    <?php endwhile; ?>
						</ul>
					<?php endif; ?>

					<p><a href="<?php echo $cta_link; ?>" class="cta-link--white">Schedule a Free Consultation</a></p>
				</div>
			</div>
		</div>

	</div>
</section>
