<?php
	$title = get_field('section_2_title');
	$content = get_field('section_2_content');

	$image_id = get_field('section_2_image');
	$src = wp_get_attachment_image_src($image_id, 'head-shot');
	$srcset = wp_get_attachment_image_srcset($image_id, 'head-shot');
?>

<section class="home-doctor">
	<div class="container">

		<div class="home-doctor-grid flex-row">
			<div class="home-doctor__content col-span-7">
				<h2 class="title__h2 section-title"><?php echo $title; ?></h2>
				<div class="section-content">
					<?php echo $content; ?>
				</div>
			</div>
			<div class="home-doctor__image col-span-5 shadow-image">
				<img
					src="<?php echo $src[0]; ?>"
					srcset="<?php echo $srcset; ?>"
					alt="Dr. Adam Isadore" />
			</div>
		</div>

	</div>
</section>