
<?php
	$title = get_field('reviews_section_title', 'option');
?>

<section id="reviews" class="reviews pt-56 ">

	<h2 class="text-h2 md:pt-56 text-center text-blue-dk"><?php echo $title; ?></h2>

	<?php if( have_rows('reviews_section_reviews', 'option') ): ?>
    <div class="reviews-list pb-40">
			<?php while( have_rows('reviews_section_reviews', 'option') ): the_row();
				$content = get_sub_field('content');
				$name = get_sub_field('name');
				$platform = get_sub_field('platform');
				?>
				<div class="reviews-list__item radius-8 p-20 md:p-32 shadow-image">
					<p class="mb-24">
						<?php echo $content; ?>
					</p>

					<div class="flex justify-between items-center">
						<p><?php echo $name; ?></p>
						<?php if($platform == 'yelp') { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-yelp.svg" alt="Yelp Logo" />
						<?php } else { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-google.svg" alt="Google Logo" />
						<?php } ?>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>

</section>
