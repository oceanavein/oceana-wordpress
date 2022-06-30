<?php
	$content = get_field('section_4_content');

	$image_id = get_field('section_4_image');
	$src = wp_get_attachment_image_src($image_id, 'section-vertical-image');
	$srcset = wp_get_attachment_image_srcset($image_id, 'section-vertical-image');
?>

<section class="home-payment">
	<div class="container">

		<div class="flex-row">
			<div class="home-payment__content col-span-7">
				<div class="body-content">
					<?php echo $content; ?>
				</div>
			</div>
			<div class="home-payment__image col-span-5">
				<div class="shadow-image radius-4 overflow-hidden">
					<img
						src="<?=$src[0]?>"
						srcset="<?=$srcset?>"
						alt="Oceana Vein Clinic" />
				</div>
			</div>
		</div>

	</div>
</section>