
<?php
	$title = get_field('reviews_section_title', 'option');
?>

<section class="reviews bg__pale-blue pt-56">

	<h2 class="title__h2 pt-56 text-center"><?php echo $title; ?></h2>

	<?php if( have_rows('reviews', 'option') ): ?>
    <div class="reviews-list pb-40">
			<?php while( have_rows('reviews', 'option') ): the_row();
				$content = get_sub_field('content');
				$name = get_sub_field('name');
				$platform = get_sub_field('platform');
				?>
				<div class="reviews-list__item radius-8 p-20 md:p-32 shadow-image">
					<p class="mb-24">
						<?php echo $content; ?>
					</p>

					<div class="flex">
						<p><?php echo $name; ?></p>
						<p><?php echo $platform; ?></p>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>

</section>
